<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Profil extends REST_Controller {

	public function __construct($config = 'rest'){
		parent::__construct($config);
		$this->load->database();
	}

	public function index_get()
	{
		$user = $this->db->get('profil')->result();
		$this->response($user, 200);
	}
	public function index_post()
	{
		$data = array(
			'jenjang' => $this->post('jenjang'),
			'nama_sekolah' => $this->post('nama_sekolah'),
			'npsn' => $this->post('npsn'),
			'sk_pendirian' => $this->post('sk_pendirian'),
			'tgl_pendirian' => $this->post('tgl_pendirian'),
			'alamat' => $this->post('alamat'),
			'kel' => $this->post('kel'),
			'kec' => $this->post('kec'),
			'kab' => $this->post('kab'),
			'telepon' => $this->post('telepon'),
			'email' => $this->post('emali'),
			'web' => $this->post('web'),
			'akreditasi' => $this->post('akreditasi'),
			'sk_akreditasi' => $this->post('sk_akreditasi'),
			'kurikulum' => $this->post('kurikulum'),
			'visi' => $this->post('visi'),
			'misi' => $this->post('misi'),
			'tujuan' => $this->post('tujuan'),
			'moto' => $this->post('moto'),
			'koordinat_long' => $this->post('koordinat_long'),
			'koordinat_lat' => $this->post('koordinat_lat'),
			'listrik' => $this->post('listrik'),
			'akses_internet' => $this->post('akses_internet'),
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
		$data = array(
			'jenjang' => $this->post('jenjang'),
			'nama_sekolah' => $this->post('nama_sekolah'),
			'npsn' => $this->post('npsn'),
			'sk_pendirian' => $this->post('sk_pendirian'),
			'tgl_pendirian' => $this->post('tgl_pendirian'),
			'alamat' => $this->post('alamat'),
			'kel' => $this->post('kel'),
			'kec' => $this->post('kec'),
			'kab' => $this->post('kab'),
			'telepon' => $this->post('telepon'),
			'email' => $this->post('emali'),
			'web' => $this->post('web'),
			'akreditasi' => $this->post('akreditasi'),
			'sk_akreditasi' => $this->post('sk_akreditasi'),
			'kurikulum' => $this->post('kurikulum'),
			'visi' => $this->post('visi'),
			'misi' => $this->post('misi'),
			'tujuan' => $this->post('tujuan'),
			'moto' => $this->post('moto'),
			'koordinat_long' => $this->post('koordinat_long'),
			'koordinat_lat' => $this->post('koordinat_lat'),
			'listrik' => $this->post('listrik'),
			'akses_internet' => $this->post('akses_internet'),
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