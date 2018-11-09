<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {

		if (isset($this->session->userdata['spc_rms'])) {

			$this->load->model('student_model');

			$data['students'] = $this->student_model->get_students();

			$this->load->view('view-header');
			$this->load->view('view-home', $data);
			$this->load->view('view-footer');
		} 

		else {
			redirect('login', 'refresh');
		}	
	}



}
