<?php

class Infokit extends CI_Model {
	
	function getWhere_Topic($id) {
		$query = $this->db->query('SELECT * FROM infokit_topics WHERE id = ? ORDER by date_inserted',$id);
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}
	
	function insert_Topic($param) {
		$this->db->insert('infokit_topics',$param);
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	function update_Topic($param,$id) {
		$this->db->where('id', $id);
		$this->db->update('infokit_topics', $param);
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	function delete_Topic($adminid,$id) {
		$this->db->delete('infokit_topics', array('id' => $id));
		if($this->db->affected_rows() > 0) {
			$this->db->delete('infokit_lessons', array('topic_id' => $id));
			if($this->db->affected_rows() > 0) {
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}
	
	function get_Topic() {
		$query = $this->db->query('SELECT * FROM infokit_topics ORDER by date_inserted');
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}
	
	function getWhere_Lessons($id) {
		$query = $this->db->query('SELECT * FROM infokit_lessons WHERE id = ? ORDER by date_inserted',$id);
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}
	
	function getWhere_Topic_Lessons($id) {
		$query = $this->db->query('SELECT * FROM infokit_lessons WHERE topic_id = ? ORDER by date_inserted',$id);
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}
	
	function insert_Lesson($param) {
		$this->db->insert('infokit_lessons',$param);
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	function update_Lesson($param,$id) {
		$this->db->where('id', $id);
		$this->db->update('infokit_lessons', $param);
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	function delete_Lesson($adminid,$id) {
		$this->db->delete('infokit_lessons', array('id' => $id));
		if($this->db->affected_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}
	
	
	
	
}