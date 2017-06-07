<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Siswa extends REST_Controller {

	public function __construct($config = 'rest'){
		parent::__construct($config);
		$this->load->database();
	}

	public function index_get()
	{
		$user = $this->db->get('siswa')->result();
		$this->response($user, 200);
	}
	public function index_post()
	{
		$data = array(
			'npsn' => $this->post('npsn'),
			'tahun_ajaran' => $this->post('tahun_ajaran'),
			'kelas' => $this->post('kelas'),
			'jurusan' => $this->post('jurusan'),
			'rombel' => $this->post('rombel'),
			'jumlah_putra' => $this->post('jumlah_putra'),
			'jumlah_putri' => $this->post('jumlah_putri'),
			'kms' => $this->post('kms'),
			'non_kms' => $this->post('non_kms'),
			'jumlah_siswa' => $this->post('jumlah_siswa'),
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
			'kelas' => $this->post('kelas'),
			'jurusan' => $this->post('jurusan'),
			'rombel' => $this->post('rombel'),
			'jumlah_putra' => $this->post('jumlah_putra'),
			'jumlah_putri' => $this->post('jumlah_putri'),
			'kms' => $this->post('kms'),
			'non_kms' => $this->post('non_kms'),
			'jumlah_siswa' => $this->post('jumlah_siswa'),
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