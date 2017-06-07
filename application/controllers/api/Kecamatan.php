<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Kecamatan extends REST_Controller {

	public function __construct($config = 'rest'){
		parent::__construct($config);
		$this->load->database();
	}

	public function index_get()
	{
		$data = $this->db->get('kecamatan')->result();
		$this->response($user, 200);
	}
	public function index_post()
	{
		$data = array(
			'kode_kec' => $this->post('kode_kec'),
			'nama_kec' => $this->post('nama_kec'),
			'kode_kab' => $this->post('kode_kab'),
			);
		$insert = $this->db->insert('kecamatan', $data);
		if($insert){
			$this->db->where('kode_kec', $data['kode_kec']);
			$newdata = $this->db->get('kecamatan')->result();
			$this->response(array('status' => 'succes', 'newdata' => $newdata), 200);
		}
		else{
			$this->response(array('status' => 'fail'), 502);
		}
	}

	public function index_put()
	{
		$data = array(
			'kode_kec' => $this->post('kode_kec'),
			'nama_kec' => $this->post('nama_kec'),
			'kode_kab' => $this->post('kode_kab'),
			);
		$this->db->where('kode_kec', $data['kode_kec']);
		$update = $this->db->update('kecamatan', $data);
		if($update){
			$this->db->where('kode_kec', $data['kode_kec']);
			$newupdate = $this->db->get('kecamatan')->result();
			$this->response(array('status'=>'succes','kecamatan'=>$newupdate), 200);
		}
		else{
			$this->response(array('status' => 'fail'), 502);
		}
	}

	public function index_delete()
	{
		$kode_kec=$this->delete('kode_kec');
		$this->db->where('kecamatan', $user);
		$delete = $this->db->delete('kecamatan');
		if($delete){
			$this->response(array('status' => 'succes'), 200);
		}
		else{
			$this->response(array('status' => 'fail'), 502);
		}
	}
}