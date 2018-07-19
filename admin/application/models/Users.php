<?php

class Users extends CI_Model {
	
	function __construct() {
		$this->load->database();
	}
	
	function search_Users($where = array(),$limit=0,$offset=0) {
		if(count($where) > 0) {
			$this->db->where($where);
			if($limit>0) {
				$query = $this->db->get("auth_accounts",$limit,$offset);
			} else {
				$query = $this->db->get("auth_accounts");
			}
			if($query->num_rows()>0) {
				return $query->result();
			} else {
				return false;
			}
		} else {
			return false;
		}
	}
	
	function insert_Users($param=array()) {
		if(count($param)>0) {
			$this->db->insert("auth_accounts",$param);
			if($this->db->affected_rows()>0) {
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}
	
	function get_Users($limit=0,$offset=0) {
		if($limit>0) {
			$query = $this->db->get("auth_accounts",$limit,$offset);
		} else {
			$query = $this->db->get("auth_accounts");
		}
		if($query->num_rows()>0) {
			return $query->result();
		} else {
			return false;
		}
	}
	
	function update_Users($param=array(),$id) {
		if(count($param)>0) {
			if($id!="") {
				$this->db->where('id', $id);
				$this->db->update("auth_accounts",$param);
				if($this->db->affected_rows()>0) {
					return true;
				} else {
					return false;
				}
			} else {
				return false;
			}
		} else {
			return false;
		}
	}
	
	function delete_Users($param,$id) {
		if(count($param)>0) {
			if($id!="") {
				$this->db->delete("auth_accounts",array('id'=>$id));
				if($this->db->affected_rows()>0) {
					return true;
				} else {
					return false;
				}
			} else {
				return false;
			}
		} else {
			return false;
		}
	}
	
}