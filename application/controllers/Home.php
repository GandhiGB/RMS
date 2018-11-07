<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {

		if (isset($this->session->userdata['spc_rms'])) {

			$this->load->model("Course_model");			

			$data["course"]=$this->Course_model->get_course();

			$this->load->view('view-header', $data);
			$this->load->view('view-home');
			$this->load->view('view-footer');
		} 

		else {
			redirect('login', 'refresh');
		}	
	}
}
