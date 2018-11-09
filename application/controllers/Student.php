<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('spc_rms')==FALSE) {
			redirect('login','refresh');
		}
	}


	public function add($id) {

		
	}


	public function view($course, $id){

		$this->load->model('student_model');

		$data['students'] = $this->student_model->get_students($id);

		$this->load->view('view-header');
		$this->load->view('view-students', $data);
		$this->load->view('view-footer');

	}

}