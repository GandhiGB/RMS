<?php 
class Student_model extends CI_Model {
	public function get_students(){
		$this->db->select('*');
		$q = $this->db->get('student');

		$data = [];

	    if($q->num_rows() > 0) {
	      foreach ($q->result() as $row) {
	      	$data[] = $row;
	    }
	    return $data;
	    }

	    else {
	      return $data;
	    }
	}
}
