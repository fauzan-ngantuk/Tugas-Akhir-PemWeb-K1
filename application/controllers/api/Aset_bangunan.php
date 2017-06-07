<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Aset_bangunan extends REST_Controller {

	public function __construct($config = 'rest'){
		parent::__construct($config);
		$this->load->database();
	}

	public function index_get()
	{
		$user = $this->db->get('aset_bangunan')->result();
		$this->response($user, 200);
	}
	public function index_post()
	{
		$data = array(
			'npsn' => $this->post('npsn'),
			'nama_bangunan' => $this->post('nama_bangunan'),
			'kode_bangunan' => $this->post('kode_bangunan'),
			'register_bangunan' => $this->post('register_bangunan'),
			'kondisi_bangunan' => $this->post('kondisi_bangunan'),
			'konstruksi_bangunan' => $this->post('konstruksi_bangunan'),
			'luas_lantai' => $this->post('luas_lantai'),
			'lokasi' => $this->post('lokasi'),
			'tahun_pembangunan' => $this->post('tahun_pembangunan'),
			'luas_bangunan' => $this->post('luas_bangunan'),
			'biaya_pembangunan' => $this->post('biaya_pembangunan'),
			);
		$insert = $this->db->insert('user', $data);
		if($insert){
			$this->db->where('username', $data['username']);
			$newdata = $this->db->get('user')->result();
			$this->response(array('status' => 'succes', 'newdata' => $newdata), 200);
		}
		else{
			$this->response(array('status' => 'fail'), 502);
		}
	}
	public function index_put()
	{
		$d'npsn' => $this->post('npsn'),
			'nama_bangunan' => $this->post('nama_bangunan'),
			'kode_bangunan' => $this->post('kode_bangunan'),
			'register_bangunan' => $this->post('register_bangunan'),
			'kondisi_bangunan' => $this->post('kondisi_bangunan'),
			'konstruksi_bangunan' => $this->post('konstruksi_bangunan'),
			'luas_lantai' => $this->post('luas_lantai'),
			'lokasi' => $this->post('lokasi'),
			'tahun_pembangunan' => $this->post('tahun_pembangunan'),
			'luas_bangunan' => $this->post('luas_bangunan'),
			'biaya_pembangunan' => $this->post('biaya_pembangunan'),
			);
		$this->db->where('username', $data['username']);
		$update = $this->db->update('user', $data);
		if($update){
			$this->db->where('username', $data['username']);
			$newupdate = $this->db->get('user')->result();
			$this->response(array('status'=>'succes','user'=>$newupdate), 200);
		}
		else{
			$this->response(array('status' => 'fail'), 502);
		}
	}

	public function index_delete()
	{
		$user=$this->delete('username');
		$this->db->where('username', $user);
		$delete = $this->db->delete('user');
		if($delete){
			$this->response(array('status' => 'succes'), 200);
		}
		else{
			$this->response(array('status' => 'fail'), 502);
		}
	}
}