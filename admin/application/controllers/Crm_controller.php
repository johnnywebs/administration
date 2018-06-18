<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crm_controller extends CI_Controller {
	
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
				
			} 
			elseif($action == "retrieve" && $this->input->post('admin_id') <> "") {
				if($module == "countrycbo") {
					echo $this->CBO_countries($this->input->post('def_ctr'));
				}
				elseif($module == "statescbo") {
					echo $this->CBO_states($this->input->post('country'));
				}
			}
			elseif($action == "update" && $this->input->post('admin_id') <> "") {
				
			}
			elseif($action == "delete" && $this->input->post('admin_id') <> "") {
				
			}
			else {
				show_404();
			}
		}
		else {
			show_404();
		}
	}
	
	public function CBO_countries($def = '') {
		$this->load->model('Crm','crm');
		$data = $this->crm->get_countries();
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
	
	public function CBO_states($country) {
		$this->load->model('Crm','crm');
		if($country == "United States") { $country = "USA"; }
		$data = $this->crm->get_states($country);
		if($data !== false) {
			$html = "<option value=''>-- SELECT --</option>";
			foreach($data as $row) {
				$html .= "<option value='$row->description'>$row->description</option>";
			}
			return $html;
		} 
	}
	
	
}