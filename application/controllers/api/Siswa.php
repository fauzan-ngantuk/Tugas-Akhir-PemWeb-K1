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
		$data = $this->db->get('siswa')->result();
		$this->response($data, 200);
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
		$insert = $this->db->insert('siswa', $data);
		if($insert){
			$this->db->where('npsn', $data['npsn']);
			$newdata = $this->db->get('siswa')->result();
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
		$this->db->where('npsn', $data['npsn']);
		$update = $this->db->update('siswa', $data);
		if($update){
			$this->db->where('npsn', $data['npsn']);
			$newupdate = $this->db->get('siswa')->result();
			$this->response(array('status'=>'succes','siswa'=>$newupdate), 200);
		}
		else{
			$this->response(array('status' => 'fail'), 502);
		}
	}

	public function index_delete()
	{
		$npsn=$this->delete('npsn');
		$this->db->where('siswa', $user);
		$delete = $this->db->delete('siswa');
		if($delete){
			$this->response(array('status' => 'succes'), 200);
		}
		else{
			$this->response(array('status' => 'fail'), 502);
		}
	}
}