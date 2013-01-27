<?php

class App_model extends CI_Model {

	function login($username, $password) {
		$this -> db -> select('username, password');
		$this -> db -> from('auth');
		$this -> db -> where('username = ' . "'" . $username . "'");
		$this -> db -> where('password = ' . "'" . MD5($password) . "'");
		$this -> db -> limit(1);

		$query = $this -> db -> get();

		if ($query -> num_rows() == 1) {
			return $query -> result();
		} else {
			return false;
		}
	}

	function addfeedback($commit) {
		$this -> db -> insert($commit);
		return TRUE;
	}

	function usercheck($username) {
		$this -> db -> select('username');
		$this -> db -> from('users');
		$this -> db -> where(array('username' => $username));
		$this -> db -> limit(1);

		$query = $this -> db -> get();

		if ($query -> num_rows() == 1) {
			return FALSE;
		} else {
			return TRUE;
		}
	}

	function adduser($details) {
		return 1;
	}

	function getuser($username) {
		/*
		$this -> db -> select('*');
		$this -> db -> from('users');
		//$this->db->join('mobile', 'mobile.username = users.username');
		//$this->db->join('landline', 'landline.username = users.username');
		$this -> db -> join('address', 'address.username == users.username');
		$this -> db -> join('details', 'details.username = users.username');
		//$this->db->join('emails', 'emails.username  = users.username');
		$this -> db -> join('about', 'about.username = users.username');
		$this -> db -> join('spouse', 'spouse.username = users.username');
		//$this->db->join('children', 'children.username = users.username');
		$this -> db -> join('zipcode', 'address.zip = zipcode.zip');
		$this -> db -> where('users.username', $username);
		$query = $this -> db -> get();*/
		$sql = "SELECT 
    *
FROM
    (`users`)
        left outer JOIN
    `address` ON `address`.`username` = `users`.`username`
        left outer JOIN
    `details` ON `details`.`username` = `users`.`username`
        left outer JOIN
    `about` ON `about`.`username` = `users`.`username`
        left outer JOIN
    `spouse` ON `spouse`.`username` = `users`.`username`
        left outer JOIN
    `zipcode` ON `address`.`zip` = `zipcode`.`zip`
    	left outer JOIN
    `social` ON `social`.`username` = `users`.`username`
WHERE
    `users`.`username` = ?";
		$query = $this->db->query($sql, array($username));
		return $query -> result();
	}
	
	function mob($username) {
		$this->db->select('*');
		$this->db->from('mobile');
		$this -> db -> where('username', $username);
		$query = $this->db->get();
		return $query->result();
	}

function land($username) {
		$this->db->select('*');
		$this->db->from('landline');
		$this -> db -> where('username', $username);
		$query = $this->db->get();
		return $query->result();
	}

function child($username) {
		$this->db->select('*');
		$this->db->from('children');
		$this -> db -> where('username', $username);
		$query = $this->db->get();
		return $query->result();
	}
	
	function email($username) {
		$this->db->select('*');
		$this->db->from('emails');
		$this -> db -> where('username', $username);
		$query = $this->db->get();
		return $query->result();
	}
	
	function member($name) {
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where("concat(concat(fname, ' '), lname) like", $name.'%');
		$query = $this->db->get();
		return $query->result();
	}
	
	function getchatter($username) {
		$this -> db -> select('online.username, users.fname, users.lname');
		$this -> db -> from('online');
		$this -> db -> join('users', 'users.username = online.username');
		$this -> db -> where('users.username <> ', $username);
		$this -> db -> where("online", '1');
		$this -> db -> limit(25);
		$query = $this -> db -> get();
		return $query -> result();
	}

	function setpost($data) {
		$this -> db -> insert('blog', $data);
	}

	function getallposts() {
		$this -> db -> select('*');
		$this -> db -> from('blog');
		$this -> db -> join('users', 'blog.username = users.username');
		$this -> db -> order_by('id', 'desc');
		$query = $this -> db -> get();
		return $query -> result();
	}

	function getposts($data, $type) {
		$this -> db -> select('*');
		$this -> db -> from('blog');
		$this -> db -> join('users', 'blog.username = users.username');
		$this -> db -> order_by('id', 'desc');
		switch ($type) {
			case 'author' :
				$this -> db -> where('blog.username', $data);
				break;
			case 'date' :
				$this -> db -> where('blog.date', $data);
				break;
			case 'id' :
				$this -> db -> where('blog.id', $data);
				break;
			case 'tag' :
				$this -> db -> where('blog.taggit', $data);
		}
		$query = $this -> db -> get();
		return $query -> result();
	}

	function makeonline($username) {
		$this -> db -> set('username', $username);
		$this -> db -> set('online', 1);
		$this -> db -> insert('online');
	}
	
	function makeoffline($username) {
		$this->db->delete('online', array('username'=>$username));
	}
	
	function ip_stat() {
		$this->db->select('count(ip)');
		$this->db->from('stat');
		$query = $this->db->get();
		$r = $query->result();
		$r1 = get_object_vars($r[0]);
		return($r1['count(ip)']);
	}
	
	function addip($ip) {
		$sql = "INSERT IGNORE INTO `stat` (`ip`) VALUES (?);";
		$this->db->query($sql, $ip);
	}

}
?>