<?php
session_start();

class Settings extends CI_Controller {
	function __construct() {
		parent::__construct();
	}

	function index() {
		if ($this -> session -> userdata('logged_in')) {
			$session_data = $this -> session -> userdata('logged_in');
			$_SESSION['username'] = $session_data['username'];
			$result = $this->app_model->getuser($session_data['username']);
			$data = get_object_vars($result[0]);
			$result = $this->app_model->getchatter($session_data['username']);
			$newres = array();
			for ($i=0; $i < count($result); $i++) { 
				$newres[$i] = get_object_vars($result[$i]);
			}
			$data['chatter'] = $newres;
			$this -> load -> view('foundation/dashboard', $data);
		} else {
			//If no session, redirect to login page
			redirect('gateway', 'refresh');
		}
	}
}
?>