<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Kabupaten extends REST_Controller {

	public function __construct($config = 'rest'){
		parent::__construct($config);
		$this->load->database();
	}

	public function index_get()
	{
		$data = $this->db->get('kabupaten')->result();
		$this->response($user, 200);
	}
	public function index_put()
	{
		$data = array(
			'id' => $this->post('id'),
			'kabupaten' => $this->post('kabupaten'),
			);
		$this->db->where('id', $data['id']);
		$update = $this->db->update('kabupaten', $data);
		if($update){
			$this->db->where('id', $data['id']);
			$newupdate = $this->db->get('kabupaten')->result();
			$this->response(array('status'=>'succes','kabupaten'=>$newupdate), 200);
		}
		else{
			$this->response(array('status' => 'fail'), 502);
		}
	}

	public function index_delete()
	{
		$id=$this->delete('id');
		$this->db->where('kabupaten', $user);
		$delete = $this->db->delete('kabupaten');
		if($delete){
			$this->response(array('status' => 'succes'), 200);
		}
		else{
			$this->response(array('status' => 'fail'), 502);
		}
	}
}