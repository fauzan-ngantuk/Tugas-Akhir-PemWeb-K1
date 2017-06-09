<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Sarpras extends REST_Controller {

	public function __construct($config = 'rest'){
		parent::__construct($config);
		$this->load->database();
	}

	public function index_get()
	{
		$data = $this->db->get('sarpras')->result();
		$this->response($data, 200);
	}
	public function index_post()
	{
		$data = array(
			'npsn' => $this->post('npsn'),
			'nama_prasarana' => $this->post('nama_prasarana'),
			'jumlah' => $this->post('jumlah'),
			'kondisi_baik' => $this->post('kondisi_baik'),
			'kondisi_rusakringan' => $this->post('kondisi_rusakringan'),
			'kondisi_rusaksedang' => $this->post('kondisi_rusaksedang'),
			'kondisi_rusakberat' => $this->post('kondisi_rusakberat'),
			'kondisi_sarpras' => $this->post('kondisi_sarpras'),
			'status_kepemilikan' => $this->post('status_kepemilikan'),
			'tahun_pengadaan' => $this->post('tahun_pengadaan'),
			);
		$insert = $this->db->insert('sarpras', $data);
		if($insert){
			$this->db->where('npsn', $data['npsn']);
			$newdata = $this->db->get('sarpras')->result();
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
			'nama_prasarana' => $this->post('nama_prasarana'),
			'jumlah' => $this->post('jumlah'),
			'kondisi_baik' => $this->post('kondisi_baik'),
			'kondisi_rusakringan' => $this->post('kondisi_rusakringan'),
			'kondisi_rusaksedang' => $this->post('kondisi_rusaksedang'),
			'kondisi_rusakberat' => $this->post('kondisi_rusakberat'),
			'kondisi_sarpras' => $this->post('kondisi_sarpras'),
			'status_kepemilikan' => $this->post('status_kepemilikan'),
			'tahun_pengadaan' => $this->post('tahun_pengadaan'),
			);
		$this->db->where('npsn', $data['npsn']);
		$update = $this->db->update('sarpras', $data);
		if($update){
			$this->db->where('npsn', $data['npsn']);
			$newupdate = $this->db->get('sarpras')->result();
			$this->response(array('status'=>'succes','sarpras'=>$newupdate), 200);
		}
		else{
			$this->response(array('status' => 'fail'), 502);
		}
	}

	public function index_delete()
	{
		$npsn=$this->delete('npsn');
		$this->db->where('sarpras', $user);
		$delete = $this->db->delete('sarpras');
		if($delete){
			$this->response(array('status' => 'succes'), 200);
		}
		else{
			$this->response(array('status' => 'fail'), 502);
		}
	}
}