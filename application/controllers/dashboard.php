<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
session_start();
//we need to call PHP's session object to access it through CI
class Dashboard extends CI_Controller {

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
		$this -> load -> view('foundation/dashboard', $data);
	}

	function profile($user) {
		$session_data = $this -> session -> userdata('logged_in');
		$_SESSION['username'] = $session_data['username'];
		$result = $this -> app_model -> getuser($user);
		$data = get_object_vars($result[0]);
		$result = $this -> app_model -> getchatter($session_data['username']);
		$newres = array();
		for ($i = 0; $i < count($result); $i++) {
			$newres[$i] = get_object_vars($result[$i]);
		}
		$data['chatter'] = $newres;
		$data['username'] = $session_data['username'];
		$this -> load -> view('foundation/dashboard', $data);
	}
	
	function search() {
		$name = $this->input->post('q');
		$result = $this->app_model->member($name);
		$newres = array();
		for ($i=0; $i < count($result); $i++) { 
			$newres[$i] = get_object_vars($result[$i]);
		}
		echo json_encode($newres);
	}
	
	function logout() {
		$this->app_model->makeoffline($_SESSION['username']);
		$this -> session -> unset_userdata('logged_in');
		session_destroy();
		redirect('dashboard', 'refresh');
	}

}
?>

