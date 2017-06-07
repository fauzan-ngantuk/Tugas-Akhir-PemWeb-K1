<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class User extends REST_Controller {

	public function __construct($config = 'rest'){
		parent::__construct($config);
		$this->load->database();
	}

	public function index_get()
	{
		$user = $this->db->get('user')->result();
		$this->response($user, 200);
	}

	public function index_post()
	{
		$data = array(
			'username' => $this->post('username'),
			'email' => $this->post('email'),
			'password' => $this->post('password'),
			'nama' => $this->post('nama'),
			'level' => $this->post('level'),
			'foto' => $this->post('foto'),
			);
		$insert = $this->db->insert('user', $data);
		if($insert){
			$this->response(array('status' => 'succes', 200));
		}
		else{
			$this->response(array('status' => 'fail', 502));
		}
	}

	public function index_put()
	{
		$user=$this->put('username');
		$data = array(
			'username' => $this->put('username'),
			'email' => $this->put('email'),
			'password' => $this->put('password'),
			'nama' => $this->put('nama'),
			'level' => $this->put('level'),
			'foto' => $this->put('foto'),
			);
		$this->db->where('username', $user);
		$update = $this->db->update('user', $data);
		if($update){
			$this->response(array('status' => 'succes', 200));
		}
		else{
			$this->response(array('status' => 'fail', 502));
		}
	}

	public function index_delete()
	{
		$user=$this->delete('username');
		$this->db->where('username', $user);
		$delete = $this->db->delete('user');
		if($delete){
			$this->response(array('status' => 'succes', 200));
		}
		else{
			$this->response(array('status' => 'fail', 502));
		}
	}
}