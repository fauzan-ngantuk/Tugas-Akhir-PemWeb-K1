<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Jurusan extends REST_Controller {

	public function __construct($config = 'rest'){
		parent::__construct($config);
		$this->load->database();
	}

	public function index_get()
	{
		$data = $this->db->get('jurusan')->result();
		$this->response($data, 200);
	}
	public function index_post()
	{
		$data = array(
			'npsn' => $this->post('npsn'),
			'thn_ajaran' => $this->post('thn_ajaran'),
			'jurusan' => $this->post('jurusan'),
			'akreditasi' => $this->post('akreditasi'),
			'sk_akreditasi' => $this->post('sk_akreditasi'),
			'tglsk_akreditasi' => $this->post('tglsk_akreditasi'),
			'tgl_habis' => $this->post('tgl_habis'),
			);
		$insert = $this->db->insert('jurusan', $data);
		if($insert){
			$this->db->where('npsn', $data['npsn']);
			$newdata = $this->db->get('jurusan')->result();
			$this->response(array('status' => 'succes', 'newdata' => $newdata), 200);
		}
		else{
			$this->response(array('status' => 'fail'), 502);
		}
	}

	public function index_put()
	{
		$data = array(
			'npsn' => $this->post('npsn'),
			'thn_ajaran' => $this->post('thn_ajaran'),
			'jurusan' => $this->post('jurusan'),
			'akreditasi' => $this->post('akreditasi'),
			'sk_akreditasi' => $this->post('sk_akreditasi'),
			'tglsk_akreditasi' => $this->post('tglsk_akreditasi'),
			'tgl_habis' => $this->post('tgl_habis'),
			);
		$this->db->where('npsn', $data['npsn']);
		$update = $this->db->update('jurusan', $data);
		if($update){
			$this->db->where('npsn', $data['npsn']);
			$newupdate = $this->db->get('jurusan')->result();
			$this->response(array('status'=>'succes','jurusan'=>$newupdate), 200);
		}
		else{
			$this->response(array('status' => 'fail'), 502);
		}
	}

	public function index_delete()
	{
		$npsn=$this->delete('npsn');
		$this->db->where('jurusan', $user);
		$delete = $this->db->delete('jurusan');
		if($delete){
			$this->response(array('status' => 'succes'), 200);
		}
		else{
			$this->response(array('status' => 'fail'), 502);
		}
	}
}