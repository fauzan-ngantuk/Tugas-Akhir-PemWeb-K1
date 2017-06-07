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
		$user = $this->db->get('wakasek')->result();
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