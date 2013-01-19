<?php
session_start();

class Settings extends CI_Controller {

	function __construct() {
		parent::__construct();
		if (!$this -> session -> userdata('logged_in')) {
			//If no session, redirect to login page
			redirect('gateway', 'refresh');
		}
	}

	function index() {
		$session_data = $this -> session -> userdata('logged_in');
		$_SESSION['username'] = $session_data['username'];
		$result = $this -> app_model -> getuser($session_data['username']);
		$data = get_object_vars($result[0]);
		$result = $this -> app_model -> getchatter($session_data['username']);
		$newres = array();
		for ($i = 0; $i < count($result); $i++) {
			$newres[$i] = get_object_vars($result[$i]);
		}
		$data['chatter'] = $newres;
		
		$result = $this -> app_model -> mob($session_data['username']);
		if ($result != null) {
			$newres = array();
			for ($i = 0; $i < count($result); $i++) {
				$newres[$i] = get_object_vars($result[$i]);
			}
		}
		$data['mobile'] = $newres;
		
		$result = $this -> app_model -> land($session_data['username']);
		if ($result != null) {
			$newres = array();
			for ($i = 0; $i < count($result); $i++) {
				$newres[$i] = get_object_vars($result[$i]);
			}
		}
		$data['landline'] = $newres;
		
		$result = $this -> app_model -> child($session_data['username']);
		if ($result != null) {
			$newres = array();
			for ($i = 0; $i < count($result); $i++) {
				$newres[$i] = get_object_vars($result[$i]);
			}
		}
		$data['children'] = $newres;
		
		$result = $this -> app_model -> email($session_data['username']);
		if ($result != null) {
			$newres = array();
			for ($i = 0; $i < count($result); $i++) {
				$newres[$i] = get_object_vars($result[$i]);
			}
		}
		$data['emails'] = $newres;
		$data['username'] = $session_data['username'];
		$this -> load -> view('foundation/account', $data);
	}

}
?>