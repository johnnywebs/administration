<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_controller extends CI_Controller {
	
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
		if($action == "create" && $this->session->userdata('adminid') <> "") {
			if($module == "projlist") {
				if($this->session->userdata('userlevel') == "VIEWER") {
					$this->redirector("projects/projlist","Unable to proceed insufficient account level!","error");
					exit;
				}
				if($this->session->userdata('adminid') <> "" && $this->input->post('project_name') <> "" && $this->input->post('client_name') <> "" && $this->input->post('proj_location') <> "" && $this->input->post('project_type') <> "") {
					$data = array(
						"project_name" 	=> $this->input->post('project_name'),
						"client_name" 	=> $this->input->post('client_name'),
						"location" => $this->input->post('proj_location'),
						"project_type" 	=> $this->input->post('project_type'),
						"user" 			=> $this->session->userdata('adminid'),
					);
					$result = $this->Create_Projlist($data);
					if($result == false) {
						$this->redirector("projects/projlist","An error occurrred when creating record!","error");
					} else {
						$this->redirector("projects/projlist","Successfully created a project!","success");
					}
				} 
				else {
					$this->redirector("projects/projlist","Incomplete required parameters!","error");
				}
			}
			elseif($module == "types") {
				if($this->session->userdata('userlevel') == "VIEWER") {
					$this->redirector("projects/types","Unable to proceed insufficient account level!","error");
					exit;
				}
				if($this->session->userdata('adminid') <> "" && $this->input->post('description') <> "") {
					$data = array(
						"description" 	=> $this->input->post('description'),
						"user"			=> $this->session->userdata('adminid')
					);
					$result = $this->Create_Types($data);
					if($result == false) {
						$this->redirector("projects/types","An error occurrred when creating record!","error");
					} else {
						$this->redirector("projects/types","Successfully created a project types!","success");
					}
				}
				else {
					$this->redirector("projects/types","Incomplete required parameter!","error");
				}
			}
			elseif($module == "equiprate") {
				if($this->session->userdata('userlevel') == "VIEWER") {
					$this->redirector("projects/equipment","Unable to proceed insufficient account level!","error");
					exit;
				}
				if($this->session->userdata('adminid') <> "" && $this->input->post('description') <> "" && $this->input->post('code') <> "" && $this->input->post('equip_no') <> "" && $this->input->post('class') <> "" && $this->input->post('fa_rate') <> "" && $this->input->post('geo_rate') <> "" && $this->input->post('make') <> "" && $this->input->post('model') <> "" && $this->input->post('ot_factor') <> "" && $this->input->post('row_delay') <> "") {
					$data = array(
						"code"			=> $this->input->post('code'),
						"description"	=> $this->input->post('description'),
						"equip_no"		=> $this->input->post('equip_no'),
						"class"			=> $this->input->post('class'),
						"fa_rate"		=> $this->input->post('fa_rate'),
						"geo_rate"		=> $this->input->post('geo_rate'),
						"make"			=> $this->input->post('make'),
						"model"			=> $this->input->post('model'),
						"ot_factor"		=> $this->input->post('ot_factor'),
						"row_delay"		=> $this->input->post('row_delay'),
						"user"			=> $this->session->userdata('adminid')
					);
					$result = $this->Create_EquipRate($data);
					if($result == false) {
						$this->redirector("projects/equipment","An error occurrred when creating record!","error");
					} else {
						$this->redirector("projects/equipment","Successfully created a Equipment Rate!","success");
					}
				}
				else {
					$this->redirector("projects/equipment","Incomplete required parameter!","error");
				}
			}
			elseif($module == "laborrate") {
				if($this->session->userdata('userlevel') == "VIEWER") {
					$this->redirector("projects/labor","Unable to proceed insufficient account level!","error");
					exit;
				}
				if($this->session->userdata('adminid') <> "" && $this->input->post('description') <> "" && $this->input->post('class') <> "" && $this->input->post('st_hour') <> "" && $this->input->post('st_rate') <> "" && $this->input->post('ot_hour') <> "" && $this->input->post('ot_rate') <> "" && $this->input->post('dt_hour') <> "" && $this->input->post('dt_rate') <> "") {
					$data = array(
						"class"			=> $this->input->post('class'),
						"description"	=> $this->input->post('description'),
						"st_hour"		=> $this->input->post('st_hour'),
						"st_rate"		=> $this->input->post('st_rate'),
						"ot_hour"		=> $this->input->post('ot_hour'),
						"ot_rate"		=> $this->input->post('ot_rate'),
						"dt_hour"		=> $this->input->post('dt_hour'),
						"dt_rate"		=> $this->input->post('dt_rate'),
						"user"			=> $this->session->userdata('adminid')
					);
					$result = $this->Create_LaborRate($data);
					if($result == false) {
						$this->redirector("projects/labor","An error occurrred when creating record!","error");
					} else {
						$this->redirector("projects/labor","Successfully created a Equipment Rate!","success");
					}
				}
				else {
					$this->redirector("projects/labor","Incomplete required parameter!","error");
				}
			}
			elseif($module == "material") {
				if($this->session->userdata('userlevel') == "VIEWER") {
					$this->redirector("projects/materials","Unable to proceed insufficient account level!","error");
					exit;
				}
				if($this->session->userdata('adminid') <> "" && $this->input->post('description') <> "" && $this->input->post('unit') <> "") {
					$data = array(
						"description"	=> $this->input->post('description'),
						"unit"		=> $this->input->post('unit'),
						"user"			=> $this->session->userdata('adminid')
					);
					$result = $this->Create_Material($data);
					if($result == false) {
						$this->redirector("projects/materials","An error occurrred when creating record!","error");
					} else {
						$this->redirector("projects/materials","Successfully created a Material!","success");
					}
				}
				else {
					$this->redirector("projects/materials","Incomplete required parameter!","error");
				}
			}
			elseif($module == "bidding") {
				if($this->session->userdata('userlevel') == "VIEWER") {
					$this->redirector("projects/bidding","Unable to proceed insufficient account level!","error");
					exit;
				}
				if($this->session->userdata('adminid') <> "" && $this->input->post('bid_date') <> "" && $this->input->post('bid_agent') && $this->input->post('job_name') && $this->input->post('project_type') && $this->input->post('bid_completed') && $this->input->post('rebid') && $this->input->post('old_bid_date') && $this->input->post('prebid_meeting_date') && $this->input->post('job_location') && $this->input->post('start_date') && $this->input->post('project_valuation') && $this->input->post('sc_method') && $this->input->post('delivery_system') && $this->input->post('owner_type') && $this->input->post('address')) {
					$data = array(
						"bid_date"				=> $this->input->post('bid_date'),
						"bid_agent"				=> $this->input->post('bid_agent'),
						"job_name"				=> $this->input->post('job_name'),
						"project_type"			=> $this->input->post('project_type'),
						"bid_completed"			=> $this->input->post('bid_completed'),
						"rebid"					=> $this->input->post('rebid'),
						"old_bid_date"			=> $this->input->post('old_bid_date'),
						"prebid_meeting_date"	=> $this->input->post('prebid_meeting_date'),
						"job_location"			=> $this->input->post('job_location'),
						"start_date"			=> $this->input->post('start_date'),
						"project_valuation"		=> $this->input->post('project_valuation'),
						"sc_method"				=> $this->input->post('sc_method'),
						"delivery_system"		=> $this->input->post('delivery_system'),
						"owner_type"			=> $this->input->post('owner_type'),
						"address"				=> $this->input->post('address'),
						"user"					=> $this->session->userdata('adminid')
					);
					$result = $this->Create_BiddingData($data);
					if($result == false) {
						$this->redirector("projects/bidding","An error occurrred when creating record!","error");
					} else {
						$this->redirector("projects/bidding","Successfully created a Material!","success");
					}
				}
				else {
					$this->redirector("projects/bidding","Incomplete required parameter!","error");
				}
			}
			else {
				show_404();
			}
		} 
		elseif($action == "update" && $this->session->userdata('adminid') <> "") {
			if($module == "projlist") {
				if($this->session->userdata('userlevel') == "VIEWER") {
					$this->redirector("projects/projlist","Unable to proceed insufficient account level!","error");
					exit;
				}
				if($this->session->userdata('adminid') <> "" && $this->input->post('project_name') <> "" && $this->input->post('client_name') <> "" && $this->input->post('proj_location') <> "" && $this->input->post('project_type') <> "") {
					$data = array(
						"project_name" 	=> $this->input->post('project_name'),
						"client_name" 	=> $this->input->post('client_name'),
						"location" 		=> $this->input->post('proj_location'),
						"project_type" 	=> $this->input->post('project_type'),
						"user" 			=> $this->session->userdata('adminid'),
					);
					$result = $this->Edit_Projlist($data,$this->input->post('rowid'));
					if($result == false) {
						$this->redirector("projects/projlist","An error occurrred when updating record!","error");
					} else {
						$this->redirector("projects/projlist","Successfully updated the project!","success");
					}
				} 
				else {
					$this->redirector("projects/projlist","Incomplete required parameters!","error");
				}
			} 
			elseif($module == "types") {
				if($this->session->userdata('userlevel') == "VIEWER") {
					$this->redirector("projects/types","Unable to proceed insufficient account level!","error");
					exit;
				}
				if($this->session->userdata('adminid') <> "" && $this->input->post('description') <> "" && $this->input->post('row_id') <> "") {
					$data = array(
						"description" => $this->input->post('description'),
						"user"		  => $this->session->userdata('adminid')
					);
					$result = $this->Edit_ProjType($data,$this->input->post('row_id'));
					if($result == false) {
						$this->redirector("projects/types","An error occurrred when updating record!","error");
					} else {
						$this->redirector("projects/types","Successfully updated the project!","success");
					}
				}
				else {
					$this->redirector("projects/types","Incomplete required parameters!","error");
				}
			}
			elseif($module == "equiprate") {
				if($this->session->userdata('userlevel') == "VIEWER") {
					$this->redirector("projects/equipment","Unable to proceed insufficient account level!","error");
					exit;
				}
				if($this->session->userdata('adminid') <> "" && $this->input->post('rowid') <> "" && $this->input->post('code') <> "" && $this->input->post('description') <> "" && $this->input->post('equip_no') <> "" && $this->input->post('class') <> "" && $this->input->post('fa_rate') <> "" && $this->input->post('geo_rate') <> "" && $this->input->post('make') <> "" && $this->input->post('model') <> "" && $this->input->post('ot_factor') <> "" && $this->input->post('row_delay') <> "") {
					$data = array(
						"code"			=> $this->input->post('code'),
						"description"	=> $this->input->post('description'),
						"equip_no"		=> $this->input->post('equip_no'),
						"class"			=> $this->input->post('class'),
						"fa_rate"		=> $this->input->post('fa_rate'),
						"geo_rate"		=> $this->input->post('geo_rate'),
						"make"			=> $this->input->post('make'),
						"model"			=> $this->input->post('model'),
						"ot_factor"		=> $this->input->post('ot_factor'),
						"row_delay"		=> $this->input->post('row_delay'),
						"user"			=> $this->session->userdata('adminid')
					);
					$result = $this->Edit_EquipRate($data,$this->input->post('rowid'));
					if($result == false) {
						$this->redirector("projects/equipment","An error occurrred when updating record!","error");
					} else {
						$this->redirector("projects/equipment","Successfully updated the project!","success");
					}
				}
				else {
					$this->redirector("projects/equipment","Incomplete required parameters!","error");
				}
			}
			elseif($module == "laborrate") {
				if($this->session->userdata('userlevel') == "VIEWER") {
					$this->redirector("projects/labor","Unable to proceed insufficient account level!","error");
					exit;
				}
				if($this->input->post('rowid') <> "" && $this->session->userdata('adminid') <> "" && $this->input->post('description') <> "" && $this->input->post('class') <> "" && $this->input->post('st_hour') <> "" && $this->input->post('st_rate') <> "" && $this->input->post('ot_hour') <> "" && $this->input->post('ot_rate') <> "" && $this->input->post('dt_hour') <> "" && $this->input->post('dt_rate') <> "") {
					$data = array(
						"class"			=> $this->input->post('class'),
						"description"	=> $this->input->post('description'),
						"st_hour"		=> $this->input->post('st_hour'),
						"st_rate"		=> $this->input->post('st_rate'),
						"ot_hour"		=> $this->input->post('ot_hour'),
						"ot_rate"		=> $this->input->post('ot_rate'),
						"dt_hour"		=> $this->input->post('dt_hour'),
						"dt_rate"		=> $this->input->post('dt_rate'),
						"user"			=> $this->session->userdata('adminid')
					);
					$result = $this->Edit_LaborRate($data,$this->input->post('rowid'));
					if($result == false) {
						$this->redirector("projects/labor","An error occurrred when updating record!","error");
					} else {
						$this->redirector("projects/labor","Successfully updated the project!","success");
					}
				}
				else {
					$this->redirector("projects/labor","Incomplete required parameters!","error");
				}
			}
			elseif($module == "material") {
				if($this->session->userdata('userlevel') == "VIEWER") {
					$this->redirector("projects/materials","Unable to proceed insufficient account level!","error");
					exit;
				}
				if($this->session->userdata('adminid') <> "" && $this->input->post('rowid') <> "" && $this->input->post('description') <> "" && $this->input->post('unit') <> "") {
					$data = array(
						"description"	=> $this->input->post('description'),
						"unit"		=> $this->input->post('unit'),
						"user"			=> $this->session->userdata('adminid')
					);
					$result = $this->Edit_Material($data,$this->input->post('rowid'));
					if($result == false) {
						$this->redirector("projects/materials","An error occurrred when creating record!","error");
					} else {
						$this->redirector("projects/materials","Successfully created a Material!","success");
					}
				}
				else {
					show_404();
				}
			}
			elseif($module == "bidding") {
				if($this->session->userdata('userlevel') == "VIEWER") {
					$this->redirector("projects/bidding","Unable to proceed insufficient account level!","error");
					exit;
				}
				if($this->session->userdata('adminid') <> "" && $this->input->post('rowid') && $this->input->post('bid_date') <> "" && $this->input->post('bid_agent') && $this->input->post('job_name') && $this->input->post('project_type') && $this->input->post('bid_completed') && $this->input->post('rebid') && $this->input->post('old_bid_date') && $this->input->post('prebid_meeting_date') && $this->input->post('job_location') && $this->input->post('start_date') && $this->input->post('project_valuation') && $this->input->post('sc_method') && $this->input->post('delivery_system') && $this->input->post('owner_type') && $this->input->post('address')) {
					$data = array(
						"bid_date"				=> $this->input->post('bid_date'),
						"bid_agent"				=> $this->input->post('bid_agent'),
						"job_name"				=> $this->input->post('job_name'),
						"project_type"			=> $this->input->post('project_type'),
						"bid_completed"			=> $this->input->post('bid_completed'),
						"rebid"					=> $this->input->post('rebid'),
						"old_bid_date"			=> $this->input->post('old_bid_date'),
						"prebid_meeting_date"	=> $this->input->post('prebid_meeting_date'),
						"job_location"			=> $this->input->post('job_location'),
						"start_date"			=> $this->input->post('start_date'),
						"project_valuation"		=> $this->input->post('project_valuation'),
						"sc_method"				=> $this->input->post('sc_method'),
						"delivery_system"		=> $this->input->post('delivery_system'),
						"owner_type"			=> $this->input->post('owner_type'),
						"address"				=> $this->input->post('address'),
						"user"					=> $this->input->post('user')
					);
					$result = $this->Edit_BiddingData($data,$this->input->post('rowid'));
					if($result == false) {
						$this->redirector("projects/bidding","An error occurrred when creating record!","error");
					} else {
						$this->redirector("projects/bidding","Successfully created a Material!","success");
					}
				}
				else {
					$this->redirector("projects/bidding","Incomplete required parameter!","error");
				}
			}
			else {
				show_404();
			}
		}
		elseif($action == "retrieve" && $this->session->userdata('adminid') <> "") {
				if($module == "projlist") {
					echo $this->List_ProjList();
				}
				elseif($module == "cbotypes") {
					echo $this->CBO_ProjTypes();
				}
				elseif($module == "types") {
					echo $this->List_ProjTypes();
				}
				elseif($module == "equiprate") {
					echo $this->List_EquipRate();
				}
				elseif($module == "laborrate") {
					echo $this->List_LaborRate();
				}
				elseif($module == "material") {
					echo $this->List_Material();
				}
				elseif($module == "bidding") {
					echo $this->List_BiddingData();
				}
				else {
					show_404();
				}
			}
		elseif($action == "delete" && $this->session->userdata('adminid') <> "") {
				if($module == "projlist") {
					if($this->session->userdata('userlevel') == "VIEWER") {
						$this->redirector("projects/list","Unable to proceed insufficient account level!","error");
						exit;
					}
					if($this->session->userdata('adminid') <> "" && $this->input->post('id') <> "") {
						$result = $this->Delete_ProjList($this->session->userdata('adminid'),$this->input->post('id'));
						if($result == false) {
							$this->redirector("projects/list","An error occurred when deleting record!","error");
						} 
						else {
							echo true;
						}
					}
					else {
						$this->redirector("projects/list","Invalid parameters passed!","error");
					}
				} 
				elseif($module == "types") {
					if($this->session->userdata('userlevel') == "VIEWER") {
						$this->redirector("projects/types","Unable to proceed insufficient account level!","error");
						exit;
					}
					if($this->session->userdata('adminid') <> "" && $this->input->post('id') <> "") {
						$result = $this->Delete_ProjTypes($this->session->userdata('adminid'),$this->input->post('id'));
						if($result == false) {
							$this->redirector("projects/types","An error occurred when deleting record!","error");
						} 
						else {
							echo true;
						}
					}
				}
				elseif($module == "equiprate") {
					if($this->session->userdata('userlevel') == "VIEWER") {
						$this->redirector("projects/equipment","Unable to proceed insufficient account level!","error");
						exit;
					}
					if($this->session->userdata('adminid') <> "" && $this->input->post('id') <> "") {
						$result = $this->Delete_EquipRate($this->session->userdata('adminid'),$this->input->post('id'));
						if($result == false) {
							$this->redirector("projects/equipment","An error occurred when deleting record!","error");
						} 
						else {
							echo true;
						}
					}
					else {
						$this->redirector("projects/equipment","Invalid parameters passed!","error");
					}
				}
				elseif($module == "laborrate") {
					if($this->session->userdata('userlevel') == "VIEWER") {
						$this->redirector("projects/labor","Unable to proceed insufficient account level!","error");
						exit;
					}
					if($this->session->userdata('adminid') <> "" && $this->input->post('id') <> "") {
						$result = $this->Delete_LaborRate($this->session->userdata('adminid'),$this->input->post('id'));
						if($result == false) {
							$this->redirector("projects/labor","An error occurred when deleting record!","error");
						} 
						else {
							echo true;
						}
					}
					else {
						$this->redirector("projects/labor","Invalid parameters passed!","error");
					}
				}
				elseif($module == "material") {
					if($this->session->userdata('userlevel') == "VIEWER") {
						$this->redirector("projects/materials","Unable to proceed insufficient account level!","error");
						exit;
					}
					if($this->session->userdata('adminid') <> "" && $this->input->post('id') <> "") {
						$result = $this->Delete_Material($this->session->userdata('adminid'),$this->input->post('id'));
						if($result == false) {
							$this->redirector("projects/materials","An error occurred when deleting record!","error");
						} 
						else {
							echo true;
						}
					}
					else {
						$this->redirector("projects/material","Invalid parameters passed!","error");
					}
				}
				elseif($module == "bidding") {
					if($this->session->userdata('userlevel') == "VIEWER") {
						$this->redirector("projects/bidding","Unable to proceed insufficient account level!","error");
						exit;
					}
					if($this->session->userdata('adminid') <> "" && $this->input->post('id') <> "") {
						$result = $this->Delete_BiddingData($this->session->userdata('adminid'),$this->input->post('id'));
						if($result == false) {
							$this->redirector("projects/bidding","An error occurred when deleting record!","error");
						} 
						else {
							echo true;
						}
					}
					else {
						$this->redirector("projects/bidding","Invalid parameters passed!","error");
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
		if($this->input->post('id') <> "" && $this->session->userdata('adminid') <> "") {
			$this->load->model('Project','proj');
			if($this->session->userdata('userlevel') == "VIEWER") {
				$data = "Unable to proceed insufficient account level!";
			} else {
				if($type == "projlist") {
					$data = $this->proj->getWhere_ProjList($this->input->post('id'));
				}
				elseif($type == "types") {
					$data = $this->proj->getWhere_ProjTypes($this->input->post('id'));
				}
				elseif($type == "equiprate") {
					$data = $this->proj->getWhere_EquipRate($this->input->post('id'));
				}
				elseif($type == "laborrate") {
					$data = $this->proj->getWhere_LaborRate($this->input->post('id'));
				}
				elseif($type == "material") {
					$data = $this->proj->getWhere_Materials($this->input->post('id'));
				}
				elseif($type == "bidding") {
					$data = $this->proj->getWhere_BiddingData($this->input->post('id'));
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
	
	public function List_ProjList() {
		$this->load->model('Project','proj');
		$data = $this->proj->get_ProjList();
		if($data !== false) {
			$html = "";
			foreach($data as $row) {
				$html .= "<tr>";
				$html .= "<td>$row->project_name</td>";
				$html .= "<td>$row->client_name</td>";
				$html .= "<td>$row->location</td>";
				$html .= "<td>$row->project_type</td>";
				$html .= "<td>$row->date_inserted</td>";
				$html .= "<td>
							<button data-toggle='tooltip' title='Edit Record' type='button' onclick=\"fneditProjList('".$row->id."');\" class='btn btn-info'><i class='fa fa-edit'></i></button>
							<button data-toggle='tooltip' title='Delete Record' type='button' onclick=\"fndeleteProjList('".$row->id."');\" class='btn btn-warning'><i class='fa fa-eraser'></i></button>
						  </td>";
			}
			return $html;
		}
		return false;
	}
	
	public function Create_Projlist($data) {
		if(count($data) > 0) {
			$this->load->model('Project','proj');
			return $this->proj->insert_ProjList($data);
		} else {
			return false;
		}	
	}
	
	public function Edit_Projlist($data,$id) {
		if(count($data) > 0) {
			$this->load->model('Project','proj');
			return $this->proj->update_ProjList($data,$id);
		} else {
			return false;
		}	
	}
	
	public function CBO_ProjTypes() {
		$this->load->model('Project','proj');
		$data = $this->proj->get_ProjTypes();
		if($data !== false) {
			$html = "";
			foreach($data as $row) {
				$html .= "<option value='$row->description'>$row->description</option>";
			}
			return $html;
		}
		return false;
	}
	
	public function Delete_ProjList($adminid,$id) {
		if($adminid <> "" && $id <> "") {
			$this->load->model('Project','proj');
			$rr = $this->proj->delete_ProjList($adminid,$id);
			return $rr;
		} else {
			return false;
		}
	}
	
	public function List_ProjTypes() {
		$this->load->model('Project','proj');
		$data = $this->proj->get_ProjTypes();
		if($data !== false) {
			$html = "";
			foreach($data as $row) {
				$html .= "<tr>";
				$html .= "<td>$row->description</td>";
				$html .= "<td>$row->date_inserted</td>";
				$html .= "<td>$row->user</td>";
				$html .= "<td>
							<button data-toggle='tooltip' title='Edit Record' type='button' onclick=\"fneditTypes('".$row->id."');\" class='btn btn-info'><i class='fa fa-edit'></i></button>
							<button data-toggle='tooltip' title='Delete Record' type='button' onclick=\"fndeleteTypes('".$row->id."');\" class='btn btn-warning'><i class='fa fa-eraser'></i></button>
						  </td>";
			}
			return $html;
		}
		return false;
	}
	
	public function Create_Types($data) {
		if(count($data) > 0) {
			$this->load->model('Project','proj');
			return $this->proj->insert_ProjType($data);
		} else {
			return false;
		}	
	}
	
	public function Delete_ProjTypes($adminid,$id) {
		if($adminid <> "" && $id <> "") {
			$this->load->model('Project','proj');
			$rr = $this->proj->delete_ProjTypes($adminid,$id);
			return $rr;
		} else {
			return false;
		}
	}
	
	public function Edit_ProjType($data,$id) {
		if(count($data) > 0) {
			$this->load->model('Project','proj');
			return $this->proj->update_ProjTypes($data,$id);
		} else {
			return false;
		}	
	}
	
	public function List_EquipRate() {
		$this->load->model('Project','proj');
		$data = $this->proj->get_EquipRate();
		if($data !== false) {
			$html = "";
			foreach($data as $row) {
				$html .= "<tr>";
				$html .= "<td>$row->code</td>";
				$html .= "<td>$row->description</td>";
				$html .= "<td>$row->equip_no</td>";
				$html .= "<td>$row->class</td>";
				$html .= "<td>$row->fa_rate</td>";
				$html .= "<td>$row->geo_rate</td>";
				$html .= "<td>$row->make</td>";
				$html .= "<td>$row->model</td>";
				$html .= "<td>$row->ot_factor</td>";
				$html .= "<td>$row->row_delay</td>";
				$html .= "<td>$row->date_inserted</td>";
				$html .= "<td>
							<button data-toggle='tooltip' title='Edit Record' type='button' onclick=\"fneditEquipRate('".$row->id."');\" class='btn btn-info'><i class='fa fa-edit'></i></button>
							<button data-toggle='tooltip' title='Delete Record' type='button' onclick=\"fndeleteEquipRate('".$row->id."');\" class='btn btn-warning'><i class='fa fa-eraser'></i></button>
						  </td>";
			}
			return $html;
		}
		return false;
	}
	
	public function Create_EquipRate($data) {
		if(count($data) > 0) {
			$this->load->model('Project','proj');
			return $this->proj->insert_EquipRate($data);
		} else {
			return false;
		}	
	}
	
	public function Delete_EquipRate($adminid,$id) {
		if($adminid <> "" && $id <> "") {
			$this->load->model('Project','proj');
			$rr = $this->proj->delete_EquipRate($adminid,$id);
			return $rr;
		} else {
			return false;
		}
	}
	
	public function Edit_EquipRate($data,$id) {
		if(count($data) > 0) {
			$this->load->model('Project','proj');
			return $this->proj->update_EquipRate($data,$id);
		} else {
			return false;
		}	
	}
	
	public function List_LaborRate() {
		$this->load->model('Project','proj');
		$data = $this->proj->get_LaborRate();
		if($data !== false) {
			$html = "";
			foreach($data as $row) {
				$html .= "<tr>";
				$html .= "<td>$row->class</td>";
				$html .= "<td>$row->description</td>";
				$html .= "<td>$row->st_hour</td>";
				$html .= "<td>$row->st_rate</td>";
				$html .= "<td>$row->ot_hour</td>";
				$html .= "<td>$row->ot_rate</td>";
				$html .= "<td>$row->dt_hour</td>";
				$html .= "<td>$row->dt_rate</td>";
				$html .= "<td>$row->date_inserted</td>";
				$html .= "<td>
							<button data-toggle='tooltip' title='Edit Record' type='button' onclick=\"fneditLaborRate('".$row->id."');\" class='btn btn-info'><i class='fa fa-edit'></i></button>
							<button data-toggle='tooltip' title='Delete Record' type='button' onclick=\"fndeleteLaborRate('".$row->id."');\" class='btn btn-warning'><i class='fa fa-eraser'></i></button>
						  </td>";
			}
			return $html;
		}
		return false;
	}
	
	public function Create_LaborRate($data) {
		if(count($data) > 0) {
			$this->load->model('Project','proj');
			return $this->proj->insert_LaborRate($data);
		} else {
			return false;
		}	
	}
	
	public function Delete_LaborRate($adminid,$id) {
		if($adminid <> "" && $id <> "") {
			$this->load->model('Project','proj');
			$rr = $this->proj->delete_LaborRate($adminid,$id);
			return $rr;
		} else {
			return false;
		}
	}
	
	public function Edit_LaborRate($data,$id) {
		if(count($data) > 0) {
			$this->load->model('Project','proj');
			return $this->proj->update_LaborRate($data,$id);
		} else {
			return false;
		}	
	}
	
	public function List_Material() {
		$this->load->model('Project','proj');
		$data = $this->proj->get_Materials();
		if($data !== false) {
			$html = "";
			foreach($data as $row) {
				$html .= "<tr>";
				$html .= "<td>$row->description</td>";
				$html .= "<td>$row->unit</td>";
				$html .= "<td>$row->date_inserted</td>";
				$html .= "<td>
							<button data-toggle='tooltip' title='Edit Record' type='button' onclick=\"fneditMtrl('".$row->id."');\" class='btn btn-info'><i class='fa fa-edit'></i></button>
							<button data-toggle='tooltip' title='Delete Record' type='button' onclick=\"fndeleteMtrl('".$row->id."');\" class='btn btn-warning'><i class='fa fa-eraser'></i></button>
						  </td>";
			}
			return $html;
		}
		return false;
	}
	
	public function Create_Material($data) {
		if(count($data) > 0) {
			$this->load->model('Project','proj');
			return $this->proj->insert_Materials($data);
		} else {
			return false;
		}	
	}
	
	public function Delete_Material($adminid,$id) {
		if($adminid <> "" && $id <> "") {
			$this->load->model('Project','proj');
			$rr = $this->proj->delete_Materials($adminid,$id);
			return $rr;
		} else {
			return false;
		}
	}
	
	public function Edit_Material($data,$id) {
		if(count($data) > 0) {
			$this->load->model('Project','proj');
			return $this->proj->update_Materials($data,$id);
		} else {
			return false;
		}	
	}
	
	public function Create_BiddingData($data) {
		if(count($data) > 0) {
			$this->load->model('Project','proj');
			return $this->proj->insert_BiddingData($data);
		} else {
			return false;
		}	
	}
	
	public function List_BiddingData() {
		$this->load->model('Project','proj');
		$data = $this->proj->get_BiddingData();
		if($data !== false) {
			$html = "";
			foreach($data as $row) {
				$html .= "<tr>";
				$html .= "<td>$row->bid_date</td>";
				$html .= "<td>$row->bid_agent</td>";
				$html .= "<td>$row->job_name</td>";
				$html .= "<td>$row->project_type</td>";
				$html .= "<td>$row->bid_completed</td>";
				$html .= "<td>$row->rebid</td>";
				$html .= "<td>$row->old_bid_date</td>";
				$html .= "<td>$row->prebid_meeting_date</td>";
				$html .= "<td>$row->job_location</td>";
				$html .= "<td>$row->start_date</td>";
				$html .= "<td>$row->project_valuation</td>";
				$html .= "<td>$row->sc_method</td>";
				$html .= "<td>$row->delivery_system</td>";
				$html .= "<td>$row->owner_type</td>";
				$html .= "<td>$row->address</td>";
				$html .= "<td>$row->date_inserted</td>";
				$html .= "<td>
							<button data-toggle='tooltip' title='Edit Record' type='button' onclick=\"fneditBiddingData('".$row->id."');\" class='btn btn-info'><i class='fa fa-edit'></i></button>
							<button data-toggle='tooltip' title='Delete Record' type='button' onclick=\"fndeleteBiddingData('".$row->id."');\" class='btn btn-warning'><i class='fa fa-eraser'></i></button>
						  </td>";
			}
			return $html;
		}
		return false;
	}
	
	public function Delete_BiddingData($adminid,$id) {
		if($adminid <> "" && $id <> "") {
			$this->load->model('Project','proj');
			$rr = $this->proj->delete_BiddingData($adminid,$id);
			return $rr;
		} else {
			return false;
		}
	}
	
	public function Edit_BiddingData($data,$id) {
		if(count($data) > 0) {
			$this->load->model('Project','proj');
			return $this->proj->update_BiddingData($data,$id);
		} else {
			return false;
		}	
	}
	
}