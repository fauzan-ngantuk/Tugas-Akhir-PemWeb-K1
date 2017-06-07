<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Wakasek extends REST_Controller {

	public function __construct($config = 'rest'){
		parent::__construct($config);
		$this->load->database();
	}

	public function index_get()
	{
		$data = $this->db->get('wakasek')->result();
		$this->response($user, 200);
	}

	public function index_post()
	{
		$data = array(
			'npsn' => $this->post('npsn'),
			'tahun_ajaran' => $this->post('tahun_ajaran'),
			'nbm' => $this->post('nbm'),
			'wakil_kepala' => $this->post('wakil_kepala'),
			'wakil_bidang' => $this->post('wakil_bidang'),
			'sk_pengangkatan' => $this->post('sk_pengangkatan'),
			'tgl_sk'=> $this->post('tgl_sk'),
			'asal_sk' =>$this->post('asal_sk'),
			'tmt_jabatan' =>$this->post('tmt_jabatan'),
			'masa_tugaske' =>$this->post('masa_tugaske'),
			'tgl_habis' =>$this->post('tgl_habis'),
			);
		$insert = $this->db->insert('wakasek', $data);
		if($insert){
			$this->db->where('npsn', $data['npsn']);
			$newdata = $this->db->get('wakasek')->result();
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
			'tahun_ajaran' => $this->post('tahun_ajaran'),
			'nbm' => $this->post('nbm'),
			'wakil_kepala' => $this->post('wakil_kepala'),
			'wakil_bidang' => $this->post('wakil_bidang'),
			'sk_pengangkatan' => $this->post('sk_pengangkatan'),
			'tgl_sk'=> $this->post('tgl_sk'),
			'asal_sk' =>$this->post('asal_sk'),
			'tmt_jabatan' =>$this->post('tmt_jabatan'),
			'masa_tugaske' =>$this->post('masa_tugaske'),
			'tgl_habis' =>$this->post('tgl_habis'),
			);
		$this->db->where('npsn', $data['npsn']);
		$update = $this->db->update('wakasek', $data);
		if($update){
			$this->db->where('npsn', $data['npsn']);
			$newupdate = $this->db->get('wakasek')->result();
			$this->response(array('status'=>'succes','wakasek'=>$newupdate), 200);
		}
		else{
			$this->response(array('status' => 'fail'), 502);
		}
	}

	public function index_delete()
	{
		$npsn=$this->delete('npsn');
		$this->db->where('wakasek', $user);
		$delete = $this->db->delete('wakasek');
		if($delete){
			$this->response(array('status' => 'succes'), 200);
		}
		else{
			$this->response(array('status' => 'fail'), 502);
		}
	}
}