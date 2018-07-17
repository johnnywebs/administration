<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {
	
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
	
	public function loginpage() {
		if($this->session->userdata('userid') == "") { 
			$this->load->view('login');
		} else {
			$this->redirector("employees/types","Welcome back ".$this->session->userdata('fullname')."!","success");
		}
	}
	
	public function submitLogin() {
		$useremail = $this->input->post('useremail');
		$userpass = $this->input->post('userpass');
		if($useremail != "" && $userpass != "") {
			$this->load->model("Users","user");
			$result = $this->user->search_Users(array("username" => $useremail, "password" => md5($userpass)));
			if($result !== false) {
				foreach($result as $row) {
					$xuserid 		= $row->id;
					$xusername 		= $row->username;
					$xuserfullname	= $row->fullname;
					$xuserlevel		= $row->level;
				}
				
				$newdata = array(
					'userid'	=> $xuserid,
					'username'	=> $xusername,
					'fullname'	=> $xuserfullname,
					'userlevel'	=> $xuserlevel
				);

				$this->session->set_userdata($newdata);
				$this->redirector("employees/types","Welcome back ".$this->session->userdata('fullname')."!","success");
			} else {
				$this->session->set_flashdata('global_message', "<span style='color:red'>Invalid Account!</span>");
				redirect(base_url("user/login"));
			}
		} else {
			$this->session->set_flashdata('global_message', "<span style='color:red'>Incomplete required parameter!</span>");
			redirect(base_url("user/login"));
		}
	}
	
	public function submitLogout() {
		$sess = array('userid', 'username','fullname','userlevel');
		$this->session->unset_userdata($sess);
		$this->session->set_flashdata('global_message', "<span style='color:green'>Successfully logged out!</span>");
		redirect(base_url("user/login"));
	}
	
	
}