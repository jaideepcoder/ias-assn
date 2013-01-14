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
		if($data['facebook']!="") {
			$data['image'] = "http://res.cloudinary.com/demo/image/facebook/w_500,h_500,c_thumb,g_face/".$data['facebook'].".jpg";
		}
		else if($data['twitter']!="") {
			$data['image'] = "http://res.cloudinary.com/demo/image/twitter_name/w_500,h_500,c_thumb,g_face/".$data['twitter'].".jpg";
		}
		else {
			$data['image'] = "http://www.gravatar.com/avatar/205e460b479e2e5b48dfhbf710c08d50?s=500";
		}
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
		$this -> load -> view('foundation/dashboard', $data);
	}

	function profile($user) {
		$session_data = $this -> session -> userdata('logged_in');
		$_SESSION['username'] = $session_data['username'];
		$result = $this -> app_model -> getuser($user);
		$data = get_object_vars($result[0]);
		if($data['facebook']!="") {
			$data['image'] = "http://res.cloudinary.com/demo/image/facebook/w_500,h_500,c_thumb,g_face/".$data['facebook'].".jpg";
		}
		else if($data['twitter']!="") {
			$data['image'] = "http://res.cloudinary.com/demo/image/twitter_name/w_500,h_500,c_thumb,g_face/".$data['twitter'].".jpg";
		}
		else {
			$data['image'] = "http://www.gravatar.com/avatar/205e460b479e2e5b48dfhbf710c08d50?s=500";
		}
		$result = $this -> app_model -> getchatter($session_data['username']);
		$newres = array();
		for ($i = 0; $i < count($result); $i++) {
			$newres[$i] = get_object_vars($result[$i]);
		}
		$data['chatter'] = $newres;
		$result = $this -> app_model -> mob($user);
		if ($result != null) {
			$newres = array();
			for ($i = 0; $i < count($result); $i++) {
				$newres[$i] = get_object_vars($result[$i]);
			}
		}
		$data['mobile'] = $newres;
		
		$result = $this -> app_model -> land($user);
		if ($result != null) {
			$newres = array();
			for ($i = 0; $i < count($result); $i++) {
				$newres[$i] = get_object_vars($result[$i]);
			}
		}
		$data['landline'] = $newres;
		
		$result = $this -> app_model -> child($user);
		if ($result != null) {
			$newres = array();
			for ($i = 0; $i < count($result); $i++) {
				$newres[$i] = get_object_vars($result[$i]);
			}
		}
		$data['children'] = $newres;
		
		$result = $this -> app_model -> email($user);
		if ($result != null) {
			$newres = array();
			for ($i = 0; $i < count($result); $i++) {
				$newres[$i] = get_object_vars($result[$i]);
			}
		}
		$data['emails'] = $newres;
		
		
		$data['username'] = $session_data['username'];
		$this -> load -> view('foundation/dashboard', $data);
	}

	function search() {
		$name = $this -> input -> post('q');
		$result = $this -> app_model -> member($name);
		$newres = array();
		for ($i = 0; $i < count($result); $i++) {
			$newres[$i] = get_object_vars($result[$i]);
		}
		echo json_encode($newres);
	}

	function logout() {
		$this -> app_model -> makeoffline($_SESSION['username']);
		$this -> session -> unset_userdata('logged_in');
		session_destroy();
		redirect('dashboard', 'refresh');
	}

}
?>
