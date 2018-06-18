<?php

class Employees extends CI_Model {
	
	function __construct() {
		$this->load->database();
	}
	/////TYPES
	function insert_Types($param) {
		$this->db->insert('employee_type',$param);
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	function update_Types($param,$id) {
		$this->db->where('id', $id);
		$this->db->update('employee_type', $param);
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	function delete_Types($adminid,$id) {
		$this->db->delete('employee_type', array('id' => $id));
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	function get_Types() {
		$query = $this->db->query('SELECT * FROM employee_type ORDER by date_inserted');
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}
	/////DEPTS
	function insert_Depts($param) {
		$this->db->insert('employee_department',$param);
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	function update_Depts($param,$id) {
		$this->db->where('id', $id);
		$this->db->update('employee_department', $param);
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	function delete_Depts($adminid,$id) {
		$this->db->delete('employee_department', array('id' => $id));
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	function get_Depts() {
		$query = $this->db->query('SELECT * FROM employee_department ORDER by date_inserted');
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}
	////DESIG
	function insert_Desigs($param) {
		$this->db->insert('employee_designation',$param);
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	function update_Desigs($param,$id) {
		$this->db->where('id', $id);
		$this->db->update('employee_designation', $param);
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	function delete_Desigs($adminid,$id) {
		$this->db->delete('employee_designation', array('id' => $id));
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	function get_Desigs() {
		$query = $this->db->query('SELECT * FROM employee_designation ORDER by date_inserted');
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}
	
	function insert_Emp($param) {
		$this->db->insert('employee_info',$param);
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	function update_Emp($param,$id) {
		$this->db->where('id', $id);
		$this->db->update('employee_info',$param);
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	function delete_Emp($adminid,$id) {
		$this->db->delete('employee_info', array('id' => $id));
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	function get_Emplist() {
		$query = $this->db->query('SELECT * FROM employee_info ORDER by date_inserted');
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}

	function view_Emp($id) {
		$query = $this->db->query('SELECT * FROM employee_info WHERE id = ?',array($id));
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}
	
	function insert_Logs($data) {
		$this->db->insert('employee_logs',$data);
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	function insertmetoday($data) {
		$this->db->insert('online_sessions',$data);
		if($this->db->affected_rows() > 0) {
			return "success";
		} else {
			return "false";
		}
	}
	
	function get_empLogs() {
		$query = $this->db->query('SELECT * FROM employee_logs ORDER by date_inserted');
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}

	function getWhere_Types($id) {
		$query = $this->db->query('SELECT * FROM employee_type WHERE id = ? ORDER by date_inserted',$id);
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}
	
	function getWhere_Depts($id) {
		$query = $this->db->query('SELECT * FROM employee_department WHERE id = ? ORDER by date_inserted',$id);
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}
	
	function getWhere_Desigs($id) {
		$query = $this->db->query('SELECT * FROM employee_designation WHERE id = ? ORDER by date_inserted',$id);
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}
	
	function getWhere_Emplist($id) {
		$query = $this->db->query('SELECT * FROM employee_info WHERE id = ? ORDER by date_inserted',$id);
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}
	
	function getWhere_empLogs($id) {
		$query = $this->db->query('SELECT * FROM employee_logs WHERE id = ? ORDER by date_inserted',$id);
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}
}