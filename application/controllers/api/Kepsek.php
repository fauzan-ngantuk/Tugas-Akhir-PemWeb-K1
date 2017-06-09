<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Kepsek extends REST_Controller {

	public function __construct($config = 'rest'){
		parent::__construct($config);
		$this->load->database();
	}

	public function index_get()
	{
		$data = $this->db->get('kepsek')->result();
		$this->response($data, 200);
	}
	public function index_post()
	{
		$data = array(
			'npsn' => $this->post('npsn'),
			'thn_ajaran' => $this->post('thn_ajaran'),
			'kepala_sekolah' => $this->post('kepala_sekolah'),
			'nbm' => $this->post('nbm'),
			'tgl_lahir' => $this->post('tgl_lahir'),
			'sk_pengankatan' => $this->post('tgl_sk'),
			'asal_sk' => $this->post('asal_sk'),
			'tmt_jabatan' => $this->post('tmt_jabatan'),
			'masa_tugaske' => $this->post('masa_tugaske'),
			'tgl_berahir' => $this->post('tgl_berahir'),
			);
		$insert = $this->db->insert('kepsek', $data);
		if($insert){
			$this->db->where('npsn', $data['npsn']);
			$newdata = $this->db->get('kepsek')->result();
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
			'kepala_sekolah' => $this->post('kepala_sekolah'),
			'nbm' => $this->post('nbm'),
			'tgl_lahir' => $this->post('tgl_lahir'),
			'sk_pengankatan' => $this->post('tgl_sk'),
			'asal_sk' => $this->post('asal_sk'),
			'tmt_jabatan' => $this->post('tmt_jabatan'),
			'masa_tugaske' => $this->post('masa_tugaske'),
			'tgl_berahir' => $this->post('tgl_berahir'),
			);
		$this->db->where('npsn', $data['npsn']);
		$update = $this->db->update('kepsek', $data);
		if($update){
			$this->db->where('npsn', $data['npsn']);
			$newupdate = $this->db->get('kepsek')->result();
			$this->response(array('status'=>'succes','kepsek'=>$newupdate), 200);
		}
		else{
			$this->response(array('status' => 'fail'), 502);
		}
	}

	public function index_delete()
	{
		$npsn=$this->delete('npsn');
		$this->db->where('kepsek', $user);
		$delete = $this->db->delete('kepsek');
		if($delete){
			$this->response(array('status' => 'succes'), 200);
		}
		else{
			$this->response(array('status' => 'fail'), 502);
		}
	}
}