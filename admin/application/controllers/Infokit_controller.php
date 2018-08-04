<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Infokit_controller extends CI_Controller {
	
	public function redirector($path,$flashmsg,$flashmsgtype) {
		if($flashmsgtype == "error") {
			$toast = "$.toast({
				heading: 'An error occurred!',
				text: '$flashmsg',
				position: 'top-center',
				loaderBg:'#ff6849',
				icon: 'error',
				hideAfter: 3500
			});";
			$this->session->set_flashdata('global_message', $toast);
		} 
		elseif($flashmsgtype == "success") {
			$toast = "$.toast({
				heading: 'Congratulations!',
				text: '$flashmsg',
				position: 'top-center',
				loaderBg:'#ff6849',
				icon: 'success',
				hideAfter: 3500
			});";
			$this->session->set_flashdata('global_message', $toast);
		} 
		elseif($flashmsgtype == "warning") {
			$toast = "$.toast({
				heading: 'Warning!',
				text: '$flashmsg',
				position: 'top-center',
				loaderBg:'#ff6849',
				icon: 'warning',
				hideAfter: 3500
			});";
			$this->session->set_flashdata('global_message', $toast);
		}
		redirect(base_url($path));
	}
	
	public function uniqidReal($lenght = 13) {
		if (function_exists("random_bytes")) {
			$bytes = random_bytes(ceil($lenght / 2));
		} elseif (function_exists("openssl_random_pseudo_bytes")) {
			$bytes = openssl_random_pseudo_bytes(ceil($lenght / 2));
		} else {
			throw new Exception("no cryptographically secure random function available");
		}
		return substr(bin2hex($bytes), 0, $lenght);
	}

	public function crud($action = '',$module = '',$search = '') {
		if($action == "create" && $this->session->userdata('adminid') <> "") {
			if($this->session->userdata('userlevel') == "VIEWER") {
				$this->redirector("infokit/topics","Unable to proceed insufficient account level!","error");
				exit;
			}
			if($module == "topics") {
				if($this->session->userdata('adminid') <> "" && $this->input->post('subject') <> "" && $this->input->post('description') <> "") {
					$data = array(
						"subject" 		=> $this->input->post('subject'),
						"description" 	=> $this->input->post('description'),
						"created_by" 	=> $this->session->userdata('adminid')
					);
					$result = $this->Create_Topic($data);
					if($result == false) {
						$this->redirector("infokit/topic","An error occurrred when creating record!","error");
					} else {
						$this->redirector("infokit/topic","Successfully created a topic!","success");
					}
				}
				else {
					$this->redirector("infokit/topic","Incomplete required parameters!","error");
				}
			}
			elseif($module == "lesson") {
				if($this->session->userdata('adminid') <> "") {
					if(isset($_FILES['attachment'])) {
						$uniq = $this->uniqidReal();
						$name = $_FILES['attachment']['name'];  
						$file = $_FILES['attachment']['tmp_name'];  
						$uniq = $this->uniqidReal();
						$final_file_name = $uniq.$name;
						$dest_file = '/elearning/'.$uniq.$name;
						
						$host = "ftp.accel-construction.com";
						$port = "21";
						$timeo= "5000000";
						$user = "johnmaster@accel-construction.com";
						$pass = "john@12345";
						$error = "";
						$ftp = ftp_connect($host);
						ftp_login($ftp,$user,$pass);
						ftp_pasv($ftp, true);
						if(!ftp_put($ftp, $dest_file, $file, FTP_BINARY, FTP_AUTORESUME)) {
							$this->redirector("infokit/lesson",error_get_last(),"error");
						}
						ftp_close($ftp);
						$data = array(
							"topic_id" => $this->input->post('topic_id'),
							"name" => $this->input->post('name'),
							"description" => $this->input->post('description'),
							"attachment" => $final_file_name,
							"attachment_type" => $_FILES['attachment']['type'],
							"created_by"	=> $this->session->userdata('adminid')
						);
					} 
					else {
						$data = array(
							"topic_id" => $this->input->post('topic_id'),
							"name" => $this->input->post('name'),
							"description" => $this->input->post('description'),
							"created_by"	=> $this->session->userdata('adminid')
						);
					}
					
					$result = $this->Create_Lesson($data);
					if($result == false) {
						$this->redirector("infokit/lesson","An error occurrred when creating record!","error");
					} else {
						$this->redirector("infokit/lesson","Successfully created a bidding info!","success");
					}
					
				}
			}
		}
		elseif($action == "retrieve" && $this->session->userdata('adminid') <> "") {
			if($module == "topics") {
				echo $this->List_Topics();
			}
			elseif($module == "lesson") {
				$newdata = array(
					'topic_id'		=> $this->input->post('topic_id'),
					'topic_name'	=> $this->input->post('topic_name'),
					'topic_sequence'=> $this->input->post('topic_sequence')
				);
				$this->session->set_userdata($newdata);
				redirect(base_url("infokit/lesson"));
			}
			elseif($module == "lessonlist") {
				echo $this->List_Lessons($this->input->post('topic_id'));
			}
			elseif($module == "ftplessonfile") {
				if($this->input->post('file') != "") { 
					$host = "ftp.accel-construction.com";
					$port = "21";
					$timeo= "5000000";
					$user = "johnmaster@accel-construction.com";
					$pass = "john@12345";
					$ftp = ftp_connect($host);
					ftp_login($ftp,$user,$pass);
					ftp_pasv($ftp, true);
					$file_path = "/elearning/".$this->input->post('file');
					$size = ftp_size($ftp, $file_path);
					header("Content-Type: application/octet-stream");
					header("Content-Disposition: attachment; filename=" . basename($file_path));
					header("Content-Length: $size"); 
					ftp_get($ftp, "php://output", $file_path, FTP_BINARY);
					ftp_close($ftp);
				} 
				else {
					echo "AW";
				}
			}
			else {
				show_404();
			}
		}
		elseif($action == "update" && $this->session->userdata('adminid') <> "") {
			if($this->session->userdata('userlevel') == "VIEWER") {
				$this->redirector("infokit/topics","Unable to proceed insufficient account level!","error");
				exit;
			}
			if($module == "lesson_order") {
				$sequence = json_encode($this->input->post('topic_sequence'));
				$data = array(
					"lesson_sequence" => $sequence
				);
				$result = $this->Update_Topic($data, $this->input->post('topic_id'));
				if($result == false) {
					echo "An error occurred when updating record!";
				} else {
					echo "Successfully updated Lesson Sequence!";
				}			
			}
		}
		elseif($action == "delete" && $this->session->userdata('adminid') <> "") {
			if($this->session->userdata('userlevel') == "VIEWER") {
				$this->redirector("infokit/topics","Unable to proceed insufficient account level!","error");
				exit;
			}
			if($module == "lesson") {
					if($this->session->userdata('adminid') <> "" && $this->input->post('id') <> "") {
						$result = $this->Delete_Lesson($this->session->userdata('adminid'),$this->input->post('id'));
						if($result == false) {
							$this->redirector("infokit/lesson","An error occurred when deleting record!","error");
						} 
						else {
							echo true;
						}
					}
					else {
						$this->redirector("infokit/lesson","Invalid parameters passed!","error");
					}
			} 
			elseif($module == "topics") {
					if($this->session->userdata('adminid') <> "" && $this->input->post('id') <> "") {
						$result = $this->Delete_Topic($this->session->userdata('adminid'),$this->input->post('id'));
						if($result == false) {
							$this->redirector("infokit/topic","An error occurred when deleting record!","error");
						} 
						else {
							echo true;
						}
					}
					else {
						$this->redirector("infokit/lesson","Invalid parameters passed!","error");
					}
			} 
			else {
				show_404();
			}
		}
	}
	
	public function prep_update($type) {
		if($this->input->post('id') <> "" && $this->session->userdata('adminid') <> "") {
			$this->load->model('Infokit','infokit');
			if($this->session->userdata('userlevel') == "VIEWER") {
				$data = "Unable to proceed insufficient account level!";
			} else {
				if($type == "topics") {
					$data = $this->infokit->getWhere_Topic($this->input->post('id'));
				}
				elseif($type == "lessons") {
					$data = $this->infokit->getWhere_Lessons($this->input->post('id'));
				}
				else {
					show_404();
				}
			}
			echo json_encode($data);
		}
		else {
			show_404();
		}
	}
	
	public function List_Topics() {
		$this->load->model('Infokit','infokit');
		$data = $this->infokit->get_Topic();
		if($data !== false) {
			$html = "";
			foreach($data as $row) {
				$seq = str_replace('"',"",$row->lesson_sequence);
				$html .= "<tr>";
				$html .= "<td>$row->subject</td>";
				$html .= "<td>$row->description</td>";
				$html .= "<td>$row->date_inserted</td>";
				$html .= "<td>
							<button data-toggle='tooltip' title='View Record' type='button' onclick=\"fneditTopics('".$row->id."');\" class='btn btn-info'><i class='fa fa-desktop'></i></button>
							<button data-toggle='tooltip' title='Show Lessons' type='button' onclick=\"fnRedirectLesson('".$row->id."','".$row->subject."','".$seq."');\" class='btn btn-primary'><i class='fa fa-folder-open'></i></button>
							<button data-toggle='tooltip' title='Delete Record' type='button' onclick=\"fndeleteTopics('".$row->id."');\" class='btn btn-warning'><i class='fa fa-eraser'></i></button>
						</td>";
			}
			return $html;
		}
		return false;
	}
	
	public function Create_Topic($data) {
		if(count($data) > 0) {
			$this->load->model('Infokit','infokit');
			return $this->infokit->insert_Topic($data);
		} else {
			return false;
		}	
	}
	
	public function Update_Topic($data,$id) {
		if(count($data) > 0) {
			$this->load->model('Infokit','infokit');
			return $this->infokit->update_Topic($data,$id);
		} else {
			return false;
		}	
	}
	
	public function Delete_Topic($adminid,$id) {
		if($adminid <> "" && $id <> "") {
			$this->load->model('Infokit','infokit');
			$rr = $this->infokit->delete_Topic($adminid,$id);
			return $rr;
		} else {
			return false;
		}
	}
	
	public function List_Lessons($id) {
		$this->load->model('Infokit','infokit');
		$data = $this->infokit->getWhere_Topic_Lessons($id);
		if($data !== false) {
			$html = "";
			foreach($data as $row) {
				$html .= "<li data-id='".$row->id."' class='list-group-item'><i class='mdi mdi-apps'></i>".$row->name;
				$html .= "<span class='float-right'><button data-toggle='tooltip' title='View Record' type='button' onclick=\"fnViewLesson('".$row->id."');\" class='btn btn-info'><i class='fa fa-desktop'></i> VIEW</button> ";
				$html .= "<button data-toggle='tooltip' title='Delete Record' type='button' onclick=\"fnDeleteLesson('".$row->id."');\" class='btn btn-warning'><i class='fa fa-eraser'></i> DELETE</button></span></li>";
			}
			return $html;
		}
		return false;
	}
	
	public function Create_Lesson($data) {
		if(count($data) > 0) {
			$this->load->model('Infokit','infokit');
			return $this->infokit->insert_Lesson($data);
		} else {
			return false;
		}	
	}
	
	public function Delete_Lesson($adminid,$id) {
		if($adminid <> "" && $id <> "") {
			$this->load->model('Infokit','infokit');
			$rr = $this->infokit->delete_Lesson($adminid,$id);
			return $rr;
		} else {
			return false;
		}
	}
	
}