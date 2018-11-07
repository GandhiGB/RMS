<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {

	public function add_course() {

    	$this->load->model('Course_model');

		$data = array(
		   'name' => $this->input->post('cname'),
		   'description' => $this->input->post('cfname')
		);

		$this->Course_model->add_course($data);

		echo "";	
	}
}
