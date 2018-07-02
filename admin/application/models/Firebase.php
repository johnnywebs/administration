<?php

class Firebase extends CI_Model {
	
	function __construct() {
		$this->load->database();
	}
	
	function saveData($db,$param = array()) {
		if(count($param) > 0) {
			$this->db->insert($db,$param);
			if($this->db->affected_rows() > 0) {
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}
	
	function insertData($db,$param = array(),$where = array()) {
		if(count($param) > 0 && count($where) > 0) {
			$this->db->where($where);
			$this->db->insert($db,$param);
			if($this->db->affected_rows() > 0) {
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}
	
	
	function deleteData($db,$param = array(),$where = array()) {
		if(count($param) > 0 && count($where) > 0) {
			$this->db->where($where);
			$this->db->delete($db,$param);
			if($this->db->affected_rows() > 0) {
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}
	
	function updateData($db,$param = array(),$where = array()) {
		if(count($param) > 0 && count($where) > 0) {
			$this->db->where($where);
			$this->db->update($db,$param);
			if($this->db->affected_rows() > 0) {
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}
	
}