<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Prestasi extends REST_Controller {

	public function __construct($config = 'rest'){
		parent::__construct($config);
		$this->load->database();
	}

	public function index_get()
	{
		$data = $this->db->get('prestasi')->result();
		$this->response($user, 200);
	}
	public function index_post()
	{
		$data = array(
			'npsn' => $this->post('npsn'),
			'thn_ajaran' => $this->post('thn_ajaran'),
			'jns_prestasi' => $this->post('jns_prestasi'),
			'level' => $this->post('level'),
			'hasil' => $this->post('hasil'),
			'ket' => $this->post('ket'),
			'pemegang' => $this->post('pemegang'),
			'tgl_plaksanaan' => $this->post('tgl_plaksanaan'),
			);
		$insert = $this->db->insert('prestasi', $data);
		if($insert){
			$this->db->where('npsn', $data['npsn']);
			$newdata = $this->db->get('prestasi')->result();
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
			'jns_prestasi' => $this->post('jns_prestasi'),
			'level' => $this->post('level'),
			'hasil' => $this->post('hasil'),
			'ket' => $this->post('ket'),
			'pemegang' => $this->post('pemegang'),
			'tgl_plaksanaan' => $this->post('tgl_plaksanaan'),
			);
		$this->db->where('npsn', $data['npsn']);
		$update = $this->db->update('prestasi', $data);
		if($update){
			$this->db->where('npsn', $data['npsn']);
			$newupdate = $this->db->get('prestasi')->result();
			$this->response(array('status'=>'succes','prestasi'=>$newupdate), 200);
		}
		else{
			$this->response(array('status' => 'fail'), 502);
		}
	}

	public function index_delete()
	{
		$npsn=$this->delete('npsn');
		$this->db->where('prestasi', $user);
		$delete = $this->db->delete('prestasi');
		if($delete){
			$this->response(array('status' => 'succes'), 200);
		}
		else{
			$this->response(array('status' => 'fail'), 502);
		}
	}
}