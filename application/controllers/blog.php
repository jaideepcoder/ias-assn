<?php
session_start();

class Blog extends CI_Controller {

	function Blog() {
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
		$data['flashblog'] = "";
		$result = $this -> app_model -> getchatter($session_data['username']);
		$newres = array();
		for ($i = 0; $i < count($result); $i++) {
			$newres[$i] = get_object_vars($result[$i]);
		}
		$data['chatter'] = $newres;
		$result = $this -> app_model -> getallposts();
		$newres = array();
		for ($i = 0; $i < count($result); $i++) {
			$newres[$i] = get_object_vars($result[$i]);
		}
		for ($i = 0; $i < count($newres); $i++) {
			$newres[$i]['taggit'] = str_replace(' ', '', $newres[$i]['taggit']);
			$newres[$i]['taggit'] = "<span class='label'>" . str_replace(',', "</span>&nbsp;<span class='label'>", $newres[$i]['taggit']) . "</span>";
			$newres[$i]['image'] = $newres[$i]['image'] == NULL ? 'http://placehold.it/400x240&text=[img]' : base_url() . 'uploads/' . $newres[$i]['image'];
			$newres[$i]['post'] = '<p>' . substr($newres[$i]['post'], 0, 240) . '... ' .anchor('blog/post/'.$newres[$i]['id'], '<i>Read Full Post.</i>'). '</p>';
		}
		$data['posts'] = $newres;
		$data['username'] = $session_data['username'];
		$this -> load -> view('foundation/blog', $data);
	}

	function another() {
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['encrypt_name'] = TRUE;
		$config['max_width'] = '1920';
		$config['max_height'] = '1080';
		$this -> load -> library('upload', $config);
		if (!$this -> upload -> do_upload()) {
			$this -> session -> set_flashdata('flashblog', $this -> upload -> display_errors());

		} else {
			$image = $this -> upload -> data();
			$data['image'] = $image['raw_name'];
		}
		$data['username'] = $this -> input -> post('username');
		$data['title'] = $this -> input -> post('title');
		$data['date'] = $this -> input -> post('date');
		$data['post'] = $this -> input -> post('content');
		$data['taggit'] = $this -> input -> post('taggit');

		$post = $this -> app_model -> setpost($data);
		redirect('blog', 'refresh');

	}

	function blogger($author) {
		$session_data = $this -> session -> userdata('logged_in');
		$_SESSION['username'] = $session_data['username'];
		$data['username'] = $session_data['username'];
		$data['flashblog'] = "";
		$result = $this -> app_model -> getchatter($session_data['username']);
		$newres = array();
		for ($i = 0; $i < count($result); $i++) {
			$newres[$i] = get_object_vars($result[$i]);
		}
		$data['chatter'] = $newres;
		$result = $this -> app_model -> getposts($author, 'author');
		$newres = array();
		for ($i = 0; $i < count($result); $i++) {
			$newres[$i] = get_object_vars($result[$i]);
		}
		for ($i = 0; $i < count($newres); $i++) {
			$newres[$i]['taggit'] = str_replace(' ', '', $newres[$i]['taggit']);
			$newres[$i]['taggit'] = "<span class='label'>" . str_replace(',', "</span>&nbsp;<span class='label'>", $newres[$i]['taggit']) . "</span>";
			$newres[$i]['image'] = $newres[$i]['image'] == NULL ? 'http://placehold.it/400x240&text=[img]' : base_url() . 'uploads/' . $newres[$i]['image'];
			$newres[$i]['post'] = '<p>' . substr($newres[$i]['post'], 0, 240) . '... ' .anchor('blog/post/'.$newres[$i]['id'], '<i>Read Full Post.</i>'). '</p>';
		}
		$data['posts'] = $newres;

		$this -> load -> view('foundation/blog', $data);
	}

	function at($date) {
		$session_data = $this -> session -> userdata('logged_in');
		$_SESSION['username'] = $session_data['username'];
		$data['username'] = $session_data['username'];
		$data['flashblog'] = "";
		$result = $this -> app_model -> getchatter($session_data['username']);
		$newres = array();
		for ($i = 0; $i < count($result); $i++) {
			$newres[$i] = get_object_vars($result[$i]);
		}
		$data['chatter'] = $newres;
		$result = $this -> app_model -> getposts($date, 'date');
		$newres = array();
		for ($i = 0; $i < count($result); $i++) {
			$newres[$i] = get_object_vars($result[$i]);
		}
		for ($i = 0; $i < count($newres); $i++) {
			$newres[$i]['taggit'] = str_replace(' ', '', $newres[$i]['taggit']);
			$newres[$i]['taggit'] = "<span class='label'>" . str_replace(',', "</span>&nbsp;<span class='label'>", $newres[$i]['taggit']) . "</span>";
			
			$newres[$i]['image'] = $newres[$i]['image'] == NULL ? 'http://placehold.it/400x240&text=[img]' : base_url() . 'uploads/' . $newres[$i]['image'];
			$newres[$i]['post'] = '<p>' . substr($newres[$i]['post'], 0, 240) . '... ' .anchor('blog/post/'.$newres[$i]['id'], '<i>Read Full Post.</i>'). '</p>';
		}
		$data['posts'] = $newres;

		$this -> load -> view('foundation/blog', $data);
	}

	function post($id) {
		$session_data = $this -> session -> userdata('logged_in');
		$_SESSION['username'] = $session_data['username'];
		$data['username'] = $session_data['username'];
		$data['flashblog'] = "";
		$result = $this -> app_model -> getchatter($session_data['username']);
		$newres = array();
		for ($i = 0; $i < count($result); $i++) {
			$newres[$i] = get_object_vars($result[$i]);
		}
		$data['chatter'] = $newres;
		$result = $this -> app_model -> getposts($id, 'id');
		$newres = array();
		for ($i = 0; $i < count($result); $i++) {
			$newres[$i] = get_object_vars($result[$i]);
		}
		for ($i = 0; $i < count($newres); $i++) {
			$newres[$i]['taggit'] = str_replace(' ', '', $newres[$i]['taggit']);
			$newres[$i]['taggit'] = "<span class='label'>" . str_replace(',', "</span>&nbsp;<span class='label'>", $newres[$i]['taggit']) . "</span>";
			
			$newres[$i]['image'] = $newres[$i]['image'] == NULL ? 'http://placehold.it/400x240&text=[img]' : base_url() . 'uploads/' . $newres[$i]['image'];
		}
		$data['posts'] = $newres;

		$this -> load -> view('foundation/blog', $data);
	}

	function tags($tag) {
		$session_data = $this -> session -> userdata('logged_in');
		$_SESSION['username'] = $session_data['username'];
		$data['username'] = $session_data['username'];
		$data['flashblog'] = "";
		$result = $this -> app_model -> getchatter($session_data['username']);
		$newres = array();
		for ($i = 0; $i < count($result); $i++) {
			$newres[$i] = get_object_vars($result[$i]);
		}
		$data['chatter'] = $newres;
		$result = $this -> app_model -> getposts($tag, 'tag');
		$newres = array();
		for ($i = 0; $i < count($result); $i++) {
			$newres[$i] = get_object_vars($result[$i]);
		}
		for ($i = 0; $i < count($newres); $i++) {
			$newres[$i]['taggit'] = str_replace(' ', '', $newres[$i]['taggit']);
			$newres[$i]['taggit'] = "<span class='label'>" . str_replace(',', "</span>&nbsp;<span class='label'>", $newres[$i]['taggit']) . "</span>";
			
			$newres[$i]['image'] = $newres[$i]['image'] == NULL ? 'http://placehold.it/400x240&text=[img]' : base_url() . 'uploads/' . $newres[$i]['image'];
			$newres[$i]['post'] = '<p>' . substr($newres[$i]['post'], 0, 240) . '... ' .anchor('blog/post/'.$newres[$i]['id'], '<i>Read Full Post.</i>'). '</p>';
		}
		$data['posts'] = $newres;

		$this -> load -> view('foundation/blog', $data);
	}

}
?>
