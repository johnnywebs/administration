<?php

class Project extends CI_Model {
	
	function getWhere_ProjList($id) {
		$query = $this->db->query('SELECT * FROM projects WHERE id = ? ORDER by date_inserted',$id);
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}
	
	function getWhere_BiddingData($id) {
		$query = $this->db->query('SELECT * FROM project_bidding WHERE id = ? ORDER by date_inserted',$id);
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}
	
	function get_ProjList() {
		$query = $this->db->query('SELECT * FROM projects ORDER by date_inserted');
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}	
	
	function insert_ProjList($param) {
		$this->db->insert('projects',$param);
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	function delete_ProjList($admin,$id) {
		$this->db->delete('projects', array('id' => $id));
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	function update_ProjList($param,$id) {
		$this->db->where('id', $id);
		$this->db->update('projects', $param);
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	function insert_ProjType($param) {
		$this->db->insert('project_type',$param);
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	function getWhere_ProjTypes($id) {
		$query = $this->db->query('SELECT * FROM project_type WHERE id = ? ORDER by date_inserted',$id);
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}
	
	function get_ProjTypes() {
		$query = $this->db->query('SELECT * FROM project_type ORDER by date_inserted');
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}
	
	function delete_ProjTypes($admin,$id) {
		$this->db->delete('project_type', array('id' => $id));
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	function update_ProjTypes($param,$id) {
		$this->db->where('id', $id);
		$this->db->update('project_type', $param);
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	function getWhere_EquipRate($id) {
		$query = $this->db->query('SELECT * FROM rate_equipment WHERE id = ? ORDER by date_inserted',$id);
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}
	
	function get_EquipRate() {
		$query = $this->db->query('SELECT * FROM rate_equipment ORDER by date_inserted');
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}
	
	function insert_EquipRate($param) {
		$this->db->insert('rate_equipment',$param);
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	function delete_EquipRate($admin,$id) {
		$this->db->delete('rate_equipment', array('id' => $id));
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	function update_EquipRate($param,$id) {
		$this->db->where('id', $id);
		$this->db->update('rate_equipment', $param);
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	function getWhere_LaborRate($id) {
		$query = $this->db->query('SELECT * FROM rate_labor WHERE id = ? ORDER by date_inserted',$id);
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}
	
	function get_LaborRate() {
		$query = $this->db->query('SELECT * FROM rate_labor ORDER by date_inserted');
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}
	
	function insert_LaborRate($param) {
		$this->db->insert('rate_labor',$param);
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	function delete_LaborRate($admin,$id) {
		$this->db->delete('rate_labor', array('id' => $id));
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	function update_LaborRate($param,$id) {
		$this->db->where('id', $id);
		$this->db->update('rate_labor', $param);
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	function getWhere_Materials($id) {
		$query = $this->db->query('SELECT * FROM materials WHERE id = ? ORDER by date_inserted',$id);
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}
	
	function get_Materials() {
		$query = $this->db->query('SELECT * FROM materials ORDER by date_inserted');
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}
	
	function insert_Materials($param) {
		$this->db->insert('materials',$param);
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	function delete_Materials($admin,$id) {
		$this->db->delete('materials', array('id' => $id));
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	function update_Materials($param,$id) {
		$this->db->where('id', $id);
		$this->db->update('materials', $param);
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	function insert_BiddingData($param) {
		$this->db->insert('project_bidding',$param);
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	function get_BiddingData() {
		$query = $this->db->query('SELECT * FROM project_bidding ORDER by date_inserted');
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}
	
	function update_BiddingData($param,$id) {
		$this->db->where('id', $id);
		$this->db->update('project_bidding', $param);
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	function delete_BiddingData($admin,$id) {
		$this->db->delete('project_bidding', array('id' => $id));
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	function search_ProjLeadNames($param) {
		$query = $this->db->query('SELECT * FROM project_leads WHERE id = ? OR project_name LIKE ? ORDER by created_date',array($param,"%".$param."%"));
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}
	
}