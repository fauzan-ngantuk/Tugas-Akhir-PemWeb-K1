<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Tenkependik extends REST_Controller {

	public function __construct($config = 'rest'){
		parent::__construct($config);
		$this->load->database();
	}

	public function index_get()
	{
		$data = $this->db->get('tenkependik')->result();
		$this->response($user, 200);
	}
	public function index_post()
	{
		$data = array(
			'npsn' => $this->post('npsn'),
			'tahun_ajaran' => $this->post('tahun_ajaran'),
			'nbm' => $this->post('nbm'),
			'jabatan' => $this->post('jabatan'),
			'nama' => $this->post('nama'),
			'nip' => $this->post('nip'),
			'tempat_lhr' => $this->post('tempat_lhr'),
			'tgl_lhr' => $this->post('tgl_lhr'),
			'telepon' => $this->post('telepon'),
			'email' => $this->post('email'),
			'pangkat' => $this->post('pangkat'),
			'tgl_pengangkatan' => $this->post('tgl_pengangkatan'),
			'jk' => $this->post('jk'),
			'status_pegawai' => $this->post('status_pegawai'),
			'organisasi' => $this->post('organisasi'),
			'alamat' => $this->post('alamat'),
			'rt_rw' => $this->post('rt_rw'),
			'kel' => $this->post('kel'),
			'kec' => $this->post('kec'),
			'kab' => $this->post('kab'),
			'prov' => $this->post('prov'),
			'pnd_thr' => $this->post('pnd_thr'),
			);
		$insert = $this->db->insert('tenkependik', $data);
		if($insert){
			$this->db->where('npsn', $data['npsn']);
			$newdata = $this->db->get('tenkependik')->result();
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
		$update = $this->db->update('tenkependik', $data);
		if($update){
			$this->db->where('npsn', $data['npsn']);
			$newupdate = $this->db->get('tenkependik')->result();
			$this->response(array('status'=>'succes','tenkependik'=>$newupdate), 200);
		}
		else{
			$this->response(array('status' => 'fail'), 502);
		}
	}

	public function index_delete()
	{
		$npsn=$this->delete('npsn');
		$this->db->where('tenkependik', $user);
		$delete = $this->db->delete('tenkependik');
		if($delete){
			$this->response(array('status' => 'succes'), 200);
		}
		else{
			$this->response(array('status' => 'fail'), 502);
		}
	}
}