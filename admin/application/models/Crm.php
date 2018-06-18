<?php

class Crm extends CI_Model {

	function __construct() {
		$this->load->database();
	}
	
	function get_countries() {
		$query = $this->db->query('SELECT * FROM crm_country');
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}
	
	function get_states($country) {
		$query = $this->db->query('SELECT * FROM crm_state WHERE country = ?',array($country));
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}
	
}