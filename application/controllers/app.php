<?php

class App extends CI_Controller {
	
	function App() {
		parent::__construct();
		$this->load->model('app_model');
	}
	
	function index() {
		$data['title'] = 'Welcome to IAS | Made personal for you.';
		$data['description'] = 'An interactive portal for IAS officers.';
		$data['keywords'] = 'ias, portal, news, event';
		$data['heading'] = 'IAS PORTAL';
		$data['results'] = '';
		
		$this->load->view('foundation/index', $data);
	}
}
?>