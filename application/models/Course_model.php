<?php
class Course_model extends CI_Model {

  function get_course(){

    $this->db->select('id, name');
    $q = $this->db->get('course');

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


  function add_course($data){

    $this->db->insert('course', $data); 

  }

}