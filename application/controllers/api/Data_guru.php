<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Data_guru extends REST_Controller {

	public function __construct($config = 'rest'){
		parent::__construct($config);
		$this->load->database();
	}

	public function index_get()
	{
		$data = $this->db->get('data_guru')->result();
		$this->response($user, 200);
	}
	public function index_post()
	{
		$data = array(
			'npsn' => $this->post('npsn'),
			'thn_ajaran' => $this->post('thn_ajaran'),
			'nbm' => $this->post('nbm'),
			'nama_guru' => $this->post('nama_guru'),
			'bidang' => $this->post('bidang'),
			'nuptk' => $this->post('nuptk'),
			'nip' => $this->post('nip'),
			'tempat_lahir' => $this->post('tempat_lahir'),
			'tgl_lahir' => $this->post('tgl_lahir'),
			'telepon' => $this->post('telepon'),
			'pangakat_golruang' => $this->post('pangakat_golruang'),
			'tgl_pengangkatan' => $this->post('tgl_pengangkatan'),
			'sertifikasi_guru' => $this->post('sertifikasi_guru'),
			'tmt_sertifikasi' => $this->post('tmt_sertifikasi'),
			'jk' => $this->post('jk'),
			'sts_pegawai' => $this->post('sts_pegawai'),
			'organisasi' => $this->post('organisasi'),
			'alamat' => $this->post('alamat'),
			'rt_rw' => $this->post('rt_rw'),
			'kelurahan' => $this->post('kelurahan'),
			'kec' => $this->post('kec'),
			'kab' => $this->post('kab'),
			'prov' => $this->post('prov'),
			'pendidikan' => $this->post('pendidikan'),
			'jurusan' => $this->post('jurusan'),
			'univ' => $this->post('univ'),
			'thn_lulus' => $this->post('thn_lulus')
			);
		$insert = $this->db->insert('data_guru', $data);
		if($insert){
			$this->db->where('nip', $data['nip']);
			$newdata = $this->db->get('data_guru')->result();
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
			'nbm' => $this->post('nbm'),
			'nama_guru' => $this->post('nama_guru'),
			'bidang' => $this->post('bidang'),
			'nuptk' => $this->post('nuptk'),
			'nip' => $this->post('nip'),
			'tempat_lahir' => $this->post('tempat_lahir'),
			'tgl_lahir' => $this->post('tgl_lahir'),
			'telepon' => $this->post('telepon'),
			'pangakat_golruang' => $this->post('pangakat_golruang'),
			'tgl_pengangkatan' => $this->post('tgl_pengangkatan'),
			'sertifikasi_guru' => $this->post('sertifikasi_guru'),
			'tmt_sertifikasi' => $this->post('tmt_sertifikasi'),
			'jk' => $this->post('jk'),
			'sts_pegawai' => $this->post('sts_pegawai'),
			'organisasi' => $this->post('organisasi'),
			'alamat' => $this->post('alamat'),
			'rt_rw' => $this->post('rt_rw'),
			'kelurahan' => $this->post('kelurahan'),
			'kec' => $this->post('kec'),
			'kab' => $this->post('kab'),
			'prov' => $this->post('prov'),
			'pendidikan' => $this->post('pendidikan'),
			'jurusan' => $this->post('jurusan'),
			'univ' => $this->post('univ'),
			'thn_lulus' => $this->post('thn_lulus'),
			);
		$this->db->where('nip', $data['nip']);
		$update = $this->db->update('data_guru', $data);
		if($update){
			$this->db->where('nip', $data['nip']);
			$newupdate = $this->db->get('data_guru')->result();
			$this->response(array('status'=>'succes','data_guru'=>$newupdate), 200);
		}
		else{
			$this->response(array('status' => 'fail'), 502);
		}
	}

	public function index_delete()
	{
		$nip=$this->delete('nip');
		$this->db->where('data_guru', $user);
		$delete = $this->db->delete('data_guru');
		if($delete){
			$this->response(array('status' => 'succes'), 200);
		}
		else{
			$this->response(array('status' => 'fail'), 502);
		}
	}
}