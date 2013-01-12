<?php
session_start();
class Register extends CI_Controller {

	function Register() {
		parent::__construct();
	}

	function index() {

		$this -> form_validation -> set_rules('username', 'Username', 'trim|required|xss_clean|callback_check_db');

		if ($this -> form_validation -> run() == FALSE) {
			$this->session->set_flashdata('errorreg', 'Error validating credentials');
			redirect('gateway', 'refresh');
		}
		else {
			$this->session->set_flashdata('successreg', 'Your account has been created');
			$details['fname'] = $this->input->post('fname');
			$details['lname'] = $this->input->post('lname');
			$details['username'] = $this->input->post('username');
			$details['email'] = $this->input->post('email');
			$details['password'] = $this->input->post('password');
			$details['bday'] = $this->input->post('bday');
			$this->app_model->adduser($details);
			redirect('gateway', 'refresh');
		}
	}

	function check_db($username) {		
		return $this->app_model->usercheck($username);
	}

}
?>
