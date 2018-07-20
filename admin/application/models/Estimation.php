<?php

class Estimation extends CI_Model {
	
	function __construct() {
		$this->load->database();
	}
	////create projectestimate
	function insert_estimate($param) {
		$this->db->insert('estimate_master',$param);
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	function insert_labor($param) {
		$this->db->insert('estimate_labor',$param);
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	function insert_material($param) {
		$this->db->insert('estimate_material',$param);
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	function insert_misc($param) {
		$this->db->insert('estimate_misc',$param);
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	function insert_subcon($param) {
		$this->db->insert('estimate_subcon',$param);
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	function insert_equip($param) {
		$this->db->insert('estimate_equipment',$param);
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	function insert_summary($param) {
		$this->db->insert('estimate_summary',$param);
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	function insert_bidsummary($param) {
		$this->db->insert('estimate_bidsummary',$param);
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	function insert_jobbudget($param){
		$this->db->insert('estimate_jobcost',$param);
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	function gettypeofwork(){
		$query = $this->db->get('estimate_worktype');
		return $query->result();
	}
	
	function getTemplate($tbl, $type){
		$query = $this->db->get_where($tbl, array('worktype'=> trim($type)));
		return $query->result();
	}
	
	function getEstimate($tbl, $code){
		$query = $this->db->get_where($tbl, array('code'=> trim($code)));
		return $query->result();
	}
	
	function delete_Estimate($adminid,$id) {
		$this->db->delete('estimate_master', array('id' => $id));
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	function getProjectList($id){
		if($id <> ""){
			$query = $this->db->get_where('projects', array('id' => $id));
		}else{
			$query = $this->db->get('projects');
		}
		return $query->result();
	}
	
	function getProject(){
		$query = $this->db->query('SELECT a.id, c.project_name, a.project_type, a.code,  a.client, b.description AS typeofwork, a.location, a.estimatedby, a.estimateddate FROM `estimate_master` AS a, 
				`estimate_worktype` AS b, projects as c WHERE (a.typeofwork = b.id) and (a.project_name = c.id) order by a.id desc');
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}

	
	
	
}