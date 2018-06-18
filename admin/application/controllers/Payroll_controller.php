<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payroll_controller extends CI_Controller {
	
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
		if($action == "create") {
			if($module == "leavetype") {
				if($this->input->post('admin_id') <> "" && $this->input->post('description') <> "") {
					$data = array(
						"description" 	=> $this->input->post('description'),
						"user"			=> $this->input->post('admin_id')
					);
					$result = $this->Create_LeaveType($data);
					if($result == false) {
						$this->redirector("payroll/leavetype","An error occurrred when creating record!","error");
					} else {
						$this->redirector("payroll/leavetype","Successfully created a leave type!","success");
					}
				}
				else {
					show_404();
				}
			}
			elseif($module == "leaverequest") {
				if($this->input->post('admin_id') <> "" && $this->input->post('employee_id') <> "" && $this->input->post('date_from') <> "" && $this->input->post('date_to') <> "" && $this->input->post('leave_type') <> "" && $this->input->post('reason') <> "") {
					$data = array(
						"employee_id" 	=> $this->input->post('employee_id'),
						"date_from" 	=> $this->input->post('date_from'),
						"date_to" 		=> $this->input->post('date_to'),
						"leave_type" 	=> $this->input->post('leave_type'),
						"reason" 		=> $this->input->post('reason'),
						"user"			=> $this->input->post('admin_id')
					);
					$result = $this->Create_LeaveRequest($data);
					if($result == false) {
						$this->redirector("payroll/leaverequest","An error occurrred when creating record!","error");
					} else {
						$this->redirector("payroll/leaverequest","Successfully created a leave request!","success");
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
		elseif($action == "update") {
			if($module == "leavetype") {
				if($this->input->post('admin_id') <> "" && $this->input->post('description') <> "" && $this->input->post('rowid') <> "") {
					$data = array(
						"description" 	=> $this->input->post('description'),
						"user"			=> $this->input->post('admin_id')
					);
					$result = $this->Edit_LeaveType($data,$this->input->post('rowid'));
					if($result == false) {
						$this->redirector("payroll/leavetype","An error occurrred when creating record!","error");
					} else {
						$this->redirector("payroll/leavetype","Successfully updated a leave type!","success");
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
		elseif($action == "delete") {
			if($module == "leavetype") {
				if($this->input->post('admin_id') <> "" && $this->input->post('id') <> "") {
					$result = $this->Delete_LeaveType($this->input->post('admin_id'),$this->input->post('id'));
					if($result == false) {
						$this->redirector("payroll/leavetype","An error occurred when deleting record!","error");
					} 
					else {
						echo true;
					}
				}
				else {
					$this->redirector("payroll/leavetype","Invalid parameters passed!","error");
				}
			} 
			if($module == "leaverequest") {
				if($this->input->post('admin_id') <> "" && $this->input->post('id') <> "") {
					$result = $this->Delete_LeaveRequest($this->input->post('admin_id'),$this->input->post('id'));
					if($result == false) {
						$this->redirector("payroll/leaverequest","An error occurred when deleting record!","error");
					} 
					else {
						echo true;
					}
				}
				else {
					$this->redirector("payroll/leaverequest","Invalid parameters passed!","error");
				}
			} 
			else {
				show_404();
			}
		}
		elseif($action == "retrieve") {
			if($module == "leaverequest") {
				echo $this->List_LeaveReq();
			}
			elseif($module == "cboleavetype") {
				echo $this->CBO_LeaveType();
			}
			elseif($module == "leavetype") {
				echo $this->List_LeaveType();
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
			$this->load->model('Payroll','pay');
			if($type == "leavetype") {
				$data = $this->pay->getWhere_LeaveType($this->input->post('id'));
			}
			elseif($type == "leaverequest") {
				$data = $this->pay->getWhere_LeaveReq($this->input->post('id'));
			}
			else {
				show_404();
			}
			echo json_encode($data);
		}
	}
	
	public function List_LeaveReq() {
		$this->load->model('Payroll','pay');
		$data = $this->pay->get_LeaveReq();
		if($data !== false) {
			$html = "";
			foreach($data as $row) {
				$html .= "<tr>";
				$html .= "<td>$row->employee_id</td>";
				$html .= "<td>$row->date_from</td>";
				$html .= "<td>$row->date_to</td>";
				$html .= "<td>$row->leave_type</td>";
				$html .= "<td>$row->reason</td>";
				$html .= "<td>$row->date_inserted</td>";
				$html .= "<td>
							<button data-toggle='tooltip' title='Edit Record' type='button' onclick=\"fneditLeaveReq('".$row->id."');\" class='btn btn-info'><i class='fa fa-edit'></i></button>
							<button data-toggle='tooltip' title='Delete Record' type='button' onclick=\"fndeleteLeaveReq('".$row->id."');\" class='btn btn-warning'><i class='fa fa-eraser'></i></button>
						  </td>";
			}
			return $html;
		}
		return false;
	}
	
	public function CBO_LeaveType() {
		$this->load->model('Payroll','pay');
		$data = $this->pay->get_LeaveType();
		if($data !== false) {
			$html = "";
			foreach($data as $row) {
				$html .= "<option value='$row->description'>$row->description</option>";
			}
			return $html;
		}
		return false;
	}
	
	public function List_LeaveType() {
		$this->load->model('Payroll','pay');
		$data = $this->pay->get_LeaveType();
		if($data !== false) {
			$html = "";
			foreach($data as $row) {
				$html .= "<tr>";
				$html .= "<td>$row->description</td>";
				$html .= "<td>$row->date_inserted</td>";
				$html .= "<td>
							<button data-toggle='tooltip' title='Edit Record' type='button' onclick=\"fneditLeaveType('".$row->id."');\" class='btn btn-info'><i class='fa fa-edit'></i></button>
							<button data-toggle='tooltip' title='Delete Record' type='button' onclick=\"fndeleteLeaveType('".$row->id."');\" class='btn btn-warning'><i class='fa fa-eraser'></i></button>
						  </td>";
			}
			return $html;
		}
		return false;
	}
	
	public function Create_LeaveRequest($data) {
		if(count($data) > 0) {
			$this->load->model('Payroll','pay');
			return $this->pay->insert_LeaveReq($data);
		} else {
			return false;
		}	
	}
	
	public function Edit_LeaveRequest($data,$id) {
		if(count($data) > 0) {
			$this->load->model('Payroll','pay');
			return $this->pay->update_LeaveReq($data,$id);
		} else {
			return false;
		}	
	}
	
	public function Delete_LeaveRequest($adminid,$id) {
		if($adminid <> "" && $id <> "") {
			$this->load->model('Payroll','pay');
			$rr = $this->pay->delete_LeaveReq($adminid,$id);
			return $rr;
		} else {
			return false;
		}
	}
	
	public function Create_LeaveType($data) {
		if(count($data) > 0) {
			$this->load->model('Payroll','pay');
			return $this->pay->insert_LeaveType($data);
		} else {
			return false;
		}	
	}
	
	public function Edit_LeaveType($data,$id) {
		if(count($data) > 0) {
			$this->load->model('Payroll','pay');
			return $this->pay->update_LeaveType($data,$id);
		} else {
			return false;
		}	
	}
	
	public function Delete_LeaveType($adminid,$id) {
		if($adminid <> "" && $id <> "") {
			$this->load->model('Payroll','pay');
			$rr = $this->pay->delete_LeaveType($adminid,$id);
			return $rr;
		} else {
			return false;
		}
	}
}