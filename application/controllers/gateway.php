<?php
session_start();

class Gateway extends CI_Controller {

	function Gateway() {
		parent::__construct();
		$this -> load -> model('app_model');
	}

	function index() {
		$data['title'] = 'Welcome to IAS | Made personal for you.';
		$data['description'] = 'An interactive portal for IAS officers.';
		$data['keywords'] = 'ias, portal, news, event';
		$data['heading'] = 'IAS PORTAL';
		$data['flashlog'] = $this->session->flashdata('errorlog');
		$data['flasherrorreg'] = $this->session->flashdata('errorreg');
		$data['flashsuccessreg'] = $this->session->flashdata('successreg');
		if($this->session->userdata('site_count')) {
			$this->session->set_userdata(array('site_count' => $this->session->userdata('site_count')+1));
		}
		else {
			$this->session->set_userdata(array('site_count' => 1));
		}
		$data['site_count'] = $this->session->userdata('site_count');
		$this -> load -> view('foundation/index', $data);
	}

	function contact() {
		$data['title'] = 'Contact Us | IAS';
		$data['heading'] = 'Contact Us';
		$data['keywords'] = 'feedback, support, contact';
		$data['description'] = 'Get in touch.';
		$this -> load -> view('foundation/contact', $data);
	}

	function feedback() {
		$user = $this -> input -> post('user');
		$message = $this -> input -> post('message');
		$commit = $commit = array('user' => $user, 'message' => $message);
		$status = FALSE;
		$status = $this -> app_model -> addfeedback($commit);
		echo json_encode(array('status' => $status));
	}

}
?>