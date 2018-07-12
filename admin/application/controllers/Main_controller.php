<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_controller extends CI_Controller {
	
	public function index() {
		$data['module'] = "login";
		$this->load->view('login',$data);
	}
	
	public function employees($module = '',$id = '') {
		if($module == "dashboard") {
			$data['module'] = "employees/employee_dashboard";
			$this->load->view('main',$data);
		}
		elseif($module == "emplist") {
			$data['module'] = "employees/employee_list";
			$this->load->view('main',$data);
		}
		elseif($module == "empnew") {
			$data['module'] = "employees/employee_new_list";
			$this->load->view('main',$data);
		}
		elseif($module == "empupdate") {
			$data['module'] = "employees/employee_update_list";
			$this->load->model('Employees','emp');
			$result = $this->emp->view_Emp($id);
			$data['rowid'] = $id;
			foreach($result as $row) {
				$data['emp_first']		= $row->emp_first;
				$data['emp_last']		= $row->emp_last;
				$data['emp_mi']			= $row->emp_mi;
				$data['birthdate']		= $row->birthdate;
				$data['email']			= $row->email;
				$data['mobile_no']		= $row->mobile_no;
				$data['marital_status']	= $row->marital_status;
				$data['emp_status']		= $row->emp_status;
				$data['add_street']		= $row->add_street;
				$data['add_unit']		= $row->add_unit;
				$data['add_city']		= $row->add_city;
				$data['add_country']	= $row->add_country;
				$data['add_state']		= $row->add_state;
				$data['add_zipcode']	= $row->add_zipcode;
				$data['designation']	= $row->designation;
				$data['hourly_rate']	= $row->hourly_rate;
				$data['monthly_rate']	= $row->monthly_rate;
			}
			$this->load->view('main',$data);
		}
		elseif($module == "types") {
			$data['module'] = "employees/employee_type";
			$this->load->view('main',$data);
		} 
		elseif($module == "departments") {
			$data['module'] = "employees/employee_department";
			$this->load->view('main',$data);
		}
		elseif($module == "designations") {
			$data['module'] = "employees/employee_designation";
			$this->load->view('main',$data);
		}
		else {
			show_404();
		}
	}
	
	public function projects($module = '',$id = '') {
		if($module == "projlist") {
			$data['module'] = "projects/project_list";
			$this->load->view('main',$data);
		}
		elseif($module == "types") {
			$data['module'] = "projects/project_types";
			$this->load->view('main',$data);
		}
		elseif($module == "equipment") {
			$data['module'] = "projects/rate_equipment";
			$this->load->view('main',$data);
		}
		elseif($module == "labor") {
			$data['module'] = "projects/rate_labor";
			$this->load->view('main',$data);
		}
		elseif($module == "materials") {
			$data['module'] = "projects/materials";
			$this->load->view('main',$data);
		}
		else {
			show_404();
		}
	}
	
	public function payroll($module = '', $id = '') {
		if($module == "leaverequest") {
			$data['module'] = "payroll/leave_request";
			$this->load->view('main',$data);
		}
		elseif($module == "leavetype") {
			$data['module'] = "payroll/leave_type";
			$this->load->view('main',$data);
		} 
		elseif($module == "payperiod") {
			$data['module']	= "payroll/payroll_period";
			$this->load->view('main',$data);
		}
		elseif($module == "timesheet_type") {
			$data['module'] = "payroll/timesheet_type";
			$this->load->view('main',$data);
		}
		elseif($module == "deduction_type") {
			$data['module'] = "payroll/deduction_type";
			$this->load->view('main',$data);
		}
		elseif($module == "deduction_master") {
			$data['module'] = "payroll/deduction_master";
			$this->load->view('main',$data);
		}
		elseif($module == "processpayroll") {
			$data['module'] = "payroll/process_payroll";
			$this->load->view('main',$data);
		}
		else {
			show_404();
		}
	}
	
	public function estimation($module = '',$id = ''){
		if($module == "build"){
			$data['module'] = "estimation/estimation_build";
			$this->load->view('main',$data);
		}
	}
	
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
	
}
