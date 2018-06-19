<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_controller extends CI_Controller {

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
	
	public function crud($action = '',$module = '',$search = '') {
		if($action != "") {
			if($action == "create" && $this->input->post('admin_id') <> "") {
				if($module == "types") {
					if($this->input->post('admin_id') <> "" && $this->input->post('emp_type') <> "") {
						$data = array(
							"description" 	=> $this->input->post('emp_type'),
							"user"			=> $this->input->post('admin_id')
						);
						$result = $this->Create_EmpType($data);
						if($result == false) {
							$this->redirector("employees/types","An error occurrred when creating record!","error");
						} else {
							$this->redirector("employees/types","Successfully created employee types!","success");
						}
					}  
					else {
						$this->redirector("employees/types","Invalid User ID!","error");
					}
				}
				elseif($module == "departments") {
					if($this->input->post('admin_id') <> "" && $this->input->post('emp_dept') <> "") {
						$data = array(
							"description" 	=> $this->input->post('emp_dept'),
							"user"			=> $this->input->post('admin_id')
						);
						$result = $this->Create_EmpDept($data);
						if($result == false) {
							$this->redirector("employees/departments","An error occurrred when creating record!","error");
						} else {
							$this->redirector("employees/departments","Successfully created employee departments!","success");
						}
					}  
					else {
						$this->redirector("employees/departments","Invalid User ID!","error");
					}
				}
				elseif($module == "designations") {
					if($this->input->post('admin_id') <> "" && $this->input->post('emp_desig') <> "") {
						$data = array(
							"description" 	=> $this->input->post('emp_desig'),
							"user"			=> $this->input->post('admin_id')
						);
						$result = $this->Create_EmpDesig($data);
						if($result == false) {
							$this->redirector("employees/designations","An error occurrred when creating record!","error");
						} else {
							$this->redirector("employees/designations","Successfully created employee designations!","success");
						}
					}  
					else {
						$this->redirector("employees/designations","Invalid User ID!","error");
					}
				}
				elseif($module == "emplist") {
					if($this->input->post('admin_id') <> "") {
						if($this->input->post('add_country') != "United States" || $this->input->post('add_country') != "Canada") {
							$data = array(
							"emp_last"			=> $this->input->post('emp_last'),
							"emp_first"			=> $this->input->post('emp_first'),
							"emp_mi"			=> $this->input->post('emp_mi'),
							"birthdate"			=> $this->input->post('birthdate'),
							"email"				=> $this->input->post('email'),
							"mobile_no"			=> $this->input->post('mobile_no'),
							"marital_status"	=> $this->input->post('marital_status'),
							"emp_status"		=> $this->input->post('emp_status'),
							"add_street"		=> $this->input->post('add_street'),
							"add_unit"			=> $this->input->post('add_unit'),
							"add_city"			=> $this->input->post('add_city'),
							"add_country"		=> $this->input->post('add_country'),
							"add_zipcode"		=> $this->input->post('add_zipcode'),
							"designation"		=> $this->input->post('designation'),
							"user"				=> $this->input->post('admin_id')
						);
						} else {
							$data = array(
							"emp_last"			=> $this->input->post('emp_last'),
							"emp_first"			=> $this->input->post('emp_first'),
							"emp_mi"			=> $this->input->post('emp_mi'),
							"birthdate"			=> $this->input->post('birthdate'),
							"email"				=> $this->input->post('email'),
							"mobile_no"			=> $this->input->post('mobile_no'),
							"marital_status"	=> $this->input->post('marital_status'),
							"emp_status"		=> $this->input->post('emp_status'),
							"add_street"		=> $this->input->post('add_street'),
							"add_unit"			=> $this->input->post('add_unit'),
							"add_city"			=> $this->input->post('add_city'),
							"add_country"		=> $this->input->post('add_country'),
							"add_state"			=> $this->input->post('add_state'),
							"add_zipcode"		=> $this->input->post('add_zipcode'),
							"designation"		=> $this->input->post('designation'),
							"user"				=> $this->input->post('admin_id')
						);
						}
						
						$result = $this->Create_EmpList($data);
						if($result == false) {
							$this->redirector("employees/emplist","An error occurrred when creating new employee!","error");
						} else {
							$this->redirector("employees/emplist","Successfully created new employee!","success");
						}
					} else {
						$this->redirector("employees/emplist","Invalid User ID!","error");
					}
				}
				else {
					show_404();
				}
			} 
			elseif($action == "update" && $this->input->post('admin_id') <> "") {
				if($module == "types") {
					if($this->input->post("admin_id") <> "" && $this->input->post("row_id") <> "" && $this->input->post("emp_type") <> "") {
						$data = array(
							"description" 	=> $this->input->post('emp_type'),
							"user"			=> $this->input->post('admin_id')
						);
						$result = $this->Update_EmpType($data,$this->input->post('row_id'));
						if($result == false) {
							$this->redirector("employees/types","An error occurred when updating record!","error");
						} else {
							$this->redirector("employees/types","Successfully created employee types!","success");
						}
					} 
					else {
						$this->redirector("employees/types","Invalid parameters passed!","error");
					}
				} 
				elseif($module == "departments") {
					if($this->input->post("admin_id") <> "" && $this->input->post("row_id") <> "" && $this->input->post("emp_dept") <> "") {
						$data = array(
							"description" 	=> $this->input->post('emp_dept'),
							"user"			=> $this->input->post('admin_id')
						);
						$result = $this->Update_EmpDept($data,$this->input->post('row_id'));
						if($result == false) {
							$this->redirector("employees/departments","An error occurred when updating record!","error");
						} else {
							$this->redirector("employees/departments","Successfully created employee departments!","success");
						}
					} 
					else {
						$this->redirector("employees/departments","Invalid parameters passed!","error");
					}
				}
				elseif($module == "designations") {
					if($this->input->post("admin_id") <> "" && $this->input->post("row_id") <> "" && $this->input->post("emp_desig") <> "") {
						$data = array(
							"description" 	=> $this->input->post('emp_desig'),
							"user"			=> $this->input->post('admin_id')
						);
						$result = $this->Update_EmpDesig($data,$this->input->post('row_id'));
						if($result == false) {
							$this->redirector("employees/designations","An error occurred when updating record!","error");
						} else {
							$this->redirector("employees/designations","Successfully created employee designations!","success");
						}
					} 
					else {
						$this->redirector("employees/designations","Invalid parameters passed!","error");
					}
				}
				elseif($module == "emplist") {
					if($this->input->post('admin_id') <> "") {
						$data = array(
							"emp_last"			=> $this->input->post('emp_last'),
							"emp_first"			=> $this->input->post('emp_first'),
							"emp_mi"			=> $this->input->post('emp_mi'),
							"birthdate"			=> $this->input->post('birthdate'),
							"email"				=> $this->input->post('email'),
							"mobile_no"			=> $this->input->post('mobile_no'),
							"marital_status"	=> $this->input->post('marital_status'),
							"emp_status"		=> $this->input->post('emp_status'),
							"add_street"		=> $this->input->post('add_street'),
							"add_unit"			=> $this->input->post('add_unit'),
							"add_city"			=> $this->input->post('add_city'),
							"add_country"		=> $this->input->post('add_country'),
							"add_state"			=> $this->input->post('add_state'),
							"add_zipcode"		=> $this->input->post('add_zipcode'),
							"designation"		=> $this->input->post('designation'),
							"user"				=> $this->input->post('admin_id')
						);
						$result = $this->Update_EmpList($data,$this->input->post('rowid'));
						if($result == false) {
							$this->redirector("employees/emplist","An error occurrred when updating employee!","error");
						} else {
							$this->redirector("employees/emplist","Successfully updated employee!","success");
						}
					} else {
						$this->redirector("employees/emplist","Invalid User ID!","error");
					}
				}
				elseif($module == "leaverequest") {
					if($this->input->post('admin_id') <> "") {
						$data = array(
							"status" => $this->input->post('status'),
							"approver" => $this->input->post('admin_id')
						);
						$result = $this->Update_LeaveRequest($data,$this->input->post('id'));
						echo $result;
					} else {
						echo false;
					}
				}
				elseif($module == "otrequest") {
					if($this->input->post('admin_id') <> "") {
						$data = array(
							"status" => $this->input->post('status'),
							"approver" => $this->input->post('admin_id')
						);
						$result = $this->Update_OTRequest($data,$this->input->post('id'));
						echo $result;
					} else {
						echo false;
					}
				}
				else {
					show_404();
				}
			}
			elseif($action == "retrieve" && $this->input->post('admin_id') <> "") {
				if($module == "types") {
					echo $this->List_EmpType();
				}
				elseif($module == "departments") {
					echo $this->List_EmpDept();
				}
				elseif($module == "designations") {
					echo $this->List_EmpDesig();
				}
				elseif($module == "listcbo") {
					echo $this->CBO_EmpDesig($this->input->post('def_desig'));
				}
				elseif($module == "emplist") {
					echo $this->List_EmpList();
				}
				elseif($module == "logs") {
					echo $this->List_EmpLogs();
				}
				elseif($module == "leavelogs") {
					echo $this->List_LeaveRequestLogs();
				}
				elseif($module == "otlogs") {
					echo $this->List_OTRequestLogs();
				}
				else {
					echo $module;
				}
			}
			elseif($action == "delete" && $this->input->post('admin_id') <> "") {
				if($module == "types") {
					if($this->input->post('admin_id') <> "" && $this->input->post('id') <> "") {
						$result = $this->Delete_EmpType($this->input->post('admin_id'),$this->input->post('id'));
						if($result == false) {
							$this->redirector("employees/types","An error occurred when deleting record!","error");
						} else {
							//$this->redirector("index.php/employees/types","Successfully created employee types!","success");
							echo true;
						}
					}
					else {
						$this->redirector("employees/types","Invalid parameters passed!","error");
					}
				}
				elseif($module == "departments") {
					if($this->input->post('admin_id') <> "" && $this->input->post('id') <> "") {
						$result = $this->Delete_EmpDept($this->input->post('admin_id'),$this->input->post('id'));
						if($result == false) {
							$this->redirector("employees/departments","An error occurred when deleting record!","error");
						} else {
							//$this->redirector("index.php/employees/types","Successfully created employee types!","success");
							echo true;
						}
					}
					else {
						$this->redirector("employees/departments","Invalid parameters passed!","error");
					}
				}
				elseif($module == "designations") {
					if($this->input->post('admin_id') <> "" && $this->input->post('id') <> "") {
						$result = $this->Delete_EmpDesig($this->input->post('admin_id'),$this->input->post('id'));
						if($result == false) {
							$this->redirector("employees/designations","An error occurred when deleting record!","error");
						} else {
							//$this->redirector("index.php/employees/types","Successfully created employee types!","success");
							echo true;
						}
					}
					else {
						$this->redirector("employees/designations","Invalid parameters passed!","error");
					}
				}
				elseif($module == "emplist") {
					if($this->input->post('admin_id') <> "" && $this->input->post('id') <> "") {
						$result = $this->Delete_EmpList($this->input->post('admin_id'),$this->input->post('id'));
						if($result == false) {
							$this->redirector("employees/designations","An error occurred when deleting record!","error");
						} else {
							echo true;
						}
					}
					else {
						$this->redirector("employees/designations","Invalid parameters passed!","error");
					}
				}
				else {
					show_404();
				}
			}
			else {
				show_404();
			}
		}
		else {
			show_404();
		}
	}
	
	public function prep_update($type) {
		if($this->input->post('id') <> "" && $this->input->post('admin_id') <> "") {
			$this->load->model('Employees','emp');
			if($type == "types") {
				$data = $this->emp->getWhere_Types($this->input->post('id'));
			}
			elseif($type == "department") {
				$data = $this->emp->getWhere_Depts($this->input->post('id'));
			}
			elseif($type == "designations") {
				$data = $this->emp->getWhere_Desigs($this->input->post('id'));
			}
			elseif($type == "emplist") {
				$data = $this->emp->getWhere_Emplist($this->input->post('id'));
			}
			else {
				show_404();
			}
			echo json_encode($data);
		}
		else {
			show_404();
		}
	}

	public function Create_EmpType($param = array()) {
		if(count($param) > 0) {
			$this->load->model('Employees','emp');
			return $this->emp->insert_Types($param);
		} else {
			return false;
		}		
	}
	
	public function Update_EmpType($param = array(),$id) {
		if(count($param) > 0) {
			$data = array(
				"description" => $param['description'],
				"user"		  => $param['user']
			);
			$this->load->model('Employees','emp');
			return $this->emp->update_Types($data,$id);
		} else {
			return false;
		}		
	}
	
	public function Delete_EmpType($adminid,$id) {
		if($adminid <> "" && $id <> "") {
			$this->load->model('Employees','emp');
			$rr = $this->emp->delete_Types($adminid,$id);
			return $rr;
		} else {
			return false;
		}
	}
	
	public function List_EmpType() {
		$this->load->model('Employees','emp');
		$data = $this->emp->get_Types();
		if($data !== false) {
			$html = "";
			foreach($data as $row) {
				$html .= "<tr>";
				$html .= "<td>".$row->description."</td>";
				$html .= "<td>".$row->date_inserted."</td>";
				$html .= "<td>".$row->user."</td>";
				$html .= "<td>
							<button data-toggle='tooltip' title='Edit Record'  type='button' onclick=\"fneditTypes('".$row->id."');\" class='btn btn-info'><i class='fa fa-edit'></i></button>
							<button data-toggle='tooltip' title='Delete Record' type='button' onclick=\"fndeleteTypes('".$row->id."');\" class='btn btn-warning'><i class='fa fa-eraser'></i></button>
						  </td>";
			}
			return $html;
		}
	}

	public function Create_EmpDept($param = array()) {
		if(count($param) > 0) {
			$this->load->model('Employees','emp');
			return $this->emp->insert_Depts($param);
		} else {
			return false;
		}		
	}
	
	public function Update_EmpDept($param = array(),$id) {
		if(count($param) > 0) {
			$data = array(
				"description" => $param['description'],
				"user"		  => $param['user']
			);
			$this->load->model('Employees','emp');
			return $this->emp->update_Depts($data,$id);
		} else {
			return false;
		}		
	}
	
	public function Delete_EmpDept($adminid,$id) {
		if($adminid <> "" && $id <> "") {
			$this->load->model('Employees','emp');
			$rr = $this->emp->delete_Depts($adminid,$id);
			return $rr;
		} else {
			return false;
		}
	}
	
	public function List_EmpDept() {
		$this->load->model('Employees','emp');
		$data = $this->emp->get_Depts();
		if($data !== false) {
			$html = "";
			foreach($data as $row) {
				$html .= "<tr>";
				$html .= "<td>".$row->description."</td>";
				$html .= "<td>".$row->date_inserted."</td>";
				$html .= "<td>".$row->user."</td>";
				$html .= "<td>
							<button data-toggle='tooltip' title='Edit Record'  type='button' onclick=\"fneditDepts('".$row->id."');\" class='btn btn-info'><i class='fa fa-edit'></i></button>
							<button data-toggle='tooltip' title='Delete Record' type='button' onclick=\"fndeleteDepts('".$row->id."');\" class='btn btn-warning'><i class='fa fa-eraser'></i></button>
						  </td>";
			}
			return $html;
		}
	}

	public function Create_EmpDesig($param = array()) {
		if(count($param) > 0) {
			$this->load->model('Employees','emp');
			return $this->emp->insert_Desigs($param);
		} else {
			return false;
		}		
	}
	
	public function Update_EmpDesig($param = array(),$id) {
		if(count($param) > 0) {
			$data = array(
				"description" => $param['description'],
				"user"		  => $param['user']
			);
			$this->load->model('Employees','emp');
			return $this->emp->update_Desigs($data,$id);
		} else {
			return false;
		}		
	}
	
	public function Delete_EmpDesig($adminid,$id) {
		if($adminid <> "" && $id <> "") {
			$this->load->model('Employees','emp');
			$rr = $this->emp->delete_Desigs($adminid,$id);
			return $rr;
		} else {
			return false;
		}
	}
	
	public function List_EmpDesig() {
		$this->load->model('Employees','emp');
		$data = $this->emp->get_Desigs();
		if($data !== false) {
			$html = "";
			foreach($data as $row) {
				$html .= "<tr>";
				$html .= "<td>".$row->description."</td>";
				$html .= "<td>".$row->date_inserted."</td>";
				$html .= "<td>".$row->user."</td>";
				$html .= "<td>
							<button data-toggle='tooltip' title='Edit Record'  type='button' onclick=\"fneditDesigs('".$row->id."');\" class='btn btn-info'><i class='fa fa-edit'></i></button>
							<button data-toggle='tooltip' title='Delete Record' type='button' onclick=\"fndeleteDesigs('".$row->id."');\" class='btn btn-warning'><i class='fa fa-eraser'></i></button>
						  </td>";
			}
			return $html;
		}
	}
	
	public function CBO_EmpDesig($def = '') {
		$this->load->model('Employees','emp');
		$data = $this->emp->get_Desigs();
		if($data !== false) {
			$html = "<option value=''>-- SELECT --</option>";
			foreach($data as $row) {
				if($def <> "" && $def == $row->description) {
					$xx = "selected";
				} else {
					$xx = "";
				}
				$html .= "<option value='$row->description' $xx>$row->description</option>";
			}
			return $html;
		} 
	}

	public function Create_EmpList($data = array()) {
		if(count($data) > 0) {
			$this->load->model('Employees','emp');
			return $this->emp->insert_Emp($data);
		} else {
			return false;
		}
	}
	
	public function Update_EmpList($data = array(),$rowid) {
		if(count($data) > 0) {
			$this->load->model('Employees','emp');
			return $this->emp->update_Emp($data,$rowid);
		} else {
			return false;
		}
	}
	
	public function List_EmpList() {
		$this->load->model('Employees','emp');
		$data = $this->emp->get_Emplist();
		if($data !== false) {
			$html = "";
			foreach($data as $row) {
				$html .= "<tr>";
				$html .= "<td>$row->emp_last, $row->emp_first $row->emp_mi</td>";
				$html .= "<td>$row->designation</td>";
				$html .= "<td>$row->email</td>";
				$html .= "<td>$row->emp_status</td>";
				$html .= "<td>$row->date_inserted</td>";
				$html .= "<td>
							<a href='".base_url("employees/empupdate/".$row->id)."' data-toggle='tooltip' title='Edit Record'  type='button' class='btn btn-info'><i class='fa fa-edit'></i></a>
							<button data-toggle='tooltip' title='Delete Record' type='button' onclick=\"fndeleteEmpList('".$row->id."');\" class='btn btn-warning'><i class='fa fa-eraser'></i></button>
						  </td>";
			}
			return $html;
		}
	}
	
	public function List_EmpLogs() {
		$this->load->model('Employees','emp');
		$data = $this->emp->get_empLogs();
		if($data !== false) {
			$html = "";
			foreach($data as $row) {
				$html .= "<tr>";
				$html .= "<td>$row->employee_id</td>";
				$html .= "<td>$row->employee_name</td>";
				$html .= "<td>$row->job</td>";
				$html .= "<td>$row->task</td>";
				$html .= "<td><button class='btn btn-link' onclick=\"showInMap('".$row->location."');\">Show in Map</button></td>";
				$html .= "<td>$row->time_start</td>";
				$html .= "<td>$row->time_end</td>";
				$html .= "<td>$row->date_inserted</td>";
				$html .= "</tr>";
			}
			return $html;
		}
	}
	
	public function Delete_EmpList($adminid,$id) {
		if($adminid <> "" && $id <> "") {
			$this->load->model('Employees','emp');
			$rr = $this->emp->delete_Emp($adminid,$id);
			return $rr;
		} else {
			return false;
		}
	}
	
	public function List_LeaveLogs() {
		$this->load->model('Payroll','pay');
		$data = $this->pay->get_LeaveLogs();
		if($data !== false) {
			$html = "";
			foreach($data as $row) {
				$html .= "<tr>";
				$html .= "<td>$row->fullname</td>";
				$html .= "<td>$row->date_from</td>";
				$html .= "<td>$row->date_to</td>";
				$html .= "<td>$row->leave_type</td>";
				$html .= "<td>$row->reason</td>";
				$html .= "<td>$row->status</td>";
				if(strtoupper($row->status) == "PENDING") {
					$html .= "<td>
							<button data-toggle='tooltip' title='Approve' type='button' onclick=\"fnApproveLeave('".$row->id."');\" class='btn btn-success'><i class='fa fa-check-square-o'></i></button>
							<button data-toggle='tooltip' title='Reject' type='button' onclick=\"fnRejectLeave('".$row->id."');\" class='btn btn-warning'><i class='fa fa-times-rectangle-o'></i></button></td>";
				} else {
					$html .= "<td></td>";
				}
				$html .= "</tr>";
			}
			return $html;
		}
	}
	
	public function List_LeaveRequestLogs() {
		$this->load->model('Payroll','pay');
		$data = $this->pay->get_LeaveRequestLogs();
		if($data !== false) {
			$html = "";
			foreach($data as $row) {
				$html .= "<tr>";
				$html .= "<td>$row->fullname</td>";
				$html .= "<td>$row->date_from</td>";
				$html .= "<td>$row->date_to</td>";
				$html .= "<td>$row->leave_type</td>";
				$html .= "<td>$row->reason</td>";
				$html .= "<td>$row->status</td>";
				if(strtoupper($row->status) == "PENDING") {
					$html .= "<td>
							<button data-toggle='tooltip' title='Approve' type='button' onclick=\"fnApproveLeave('".$row->id."');\" class='btn btn-success'><i class='fa fa-check-square-o'></i></button>
							<button data-toggle='tooltip' title='Reject' type='button' onclick=\"fnRejectLeave('".$row->id."');\" class='btn btn-warning'><i class='fa fa-times-rectangle-o'></i></button></td>";
				} else {
					$html .= "<td></td>";
				}
				$html .= "</tr>";
			}
			return $html;
		}
	}
	
	public function Update_LeaveRequest($data = array(),$id) {
		if(count($data) > 0) {
			$this->load->model('Payroll','pay');
			return $this->pay->update_LeaveReq($data,$id);
		} else {
			return false;
		}
	}
	
	public function List_OTRequestLogs() {
		$this->load->model('Payroll','pay');
		$data = $this->pay->get_OTRequestLogs();
		if($data !== false) {
			$html = "";
			foreach($data as $row) {
				$html .= "<tr>";
				$html .= "<td>$row->fullname</td>";
				$html .= "<td>$row->hours</td>";
				$html .= "<td>$row->reason</td>";
				$html .= "<td>$row->date_inserted</td>";
				$html .= "<td>$row->status</td>";
				if(strtoupper($row->status) == "PENDING") {
					$html .= "<td>
							<button data-toggle='tooltip' title='Approve' type='button' onclick=\"fnApproveOT('".$row->id."');\" class='btn btn-success'><i class='fa fa-check-square-o'></i></button>
							<button data-toggle='tooltip' title='Reject' type='button' onclick=\"fnRejectOT('".$row->id."');\" class='btn btn-warning'><i class='fa fa-times-rectangle-o'></i></button></td>";
				} else {
					$html .= "<td></td>";
				}
				$html .= "</tr>";
			}
			return $html;
		}
	}
	
	public function Update_OTRequest($data = array(),$id) {
		if(count($data) > 0) {
			$this->load->model('Payroll','pay');
			return $this->pay->update_OTReq($data,$id);
		} else {
			return false;
		}
	}

	
}