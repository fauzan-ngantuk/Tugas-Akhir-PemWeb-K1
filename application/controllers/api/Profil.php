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
		$npsn = $this->get('npsn');
		if ($npsn == '') {
			# code...
			$data = $this->db->get('profil')->result();
		}
		else{
			$this->db->where('npsn', $npsn);
			$data = $this->db->get('profil')->result();
		}
		$this->response($data, 200);
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
		$insert = $this->db->insert('profil', $data);
		if($insert){
			$this->db->where('npsn', $data['npsn']);
			$newdata = $this->db->get('profil')->result();
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
		$this->db->where('npsn', $data['npsn']);
		$update = $this->db->update('profil', $data);
		if($update){
			$this->db->where('npsn', $data['npsn']);
			$newupdate = $this->db->get('profil')->result();
			$this->response(array('status'=>'succes','profil'=>$newupdate), 200);
		}
		else{
			$this->response(array('status' => 'fail'), 502);
		}
	}

	public function index_delete()
	{
		$npsn=$this->delete('npsn');
		$this->db->where('profil', $user);
		$delete = $this->db->delete('profil');
		if($delete){
			$this->response(array('status' => 'succes'), 200);
		}
		else{
			$this->response(array('status' => 'fail'), 502);
		}
	}
}