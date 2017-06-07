<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Aset_tanah extends REST_Controller {

	public function __construct($config = 'rest'){
		parent::__construct($config);
		$this->load->database();
	}

	public function index_get()
	{
		$data = $this->db->get('aset_tanah')->result();
		$this->response($data, 200);
	}
	public function index_post()
	{
		$data = array(
			'npsn' => $this->post('npsn'),
			'no_persil' => $this->post('no_persil'),
			'kepemilikan' => $this->post('kepemilikan'),
			'atasnama_sertifikat' => $this->post('atasnama_sertifikat'),
			'status_tanah' => $this->post('status_tanah'),
			'luas_tanah' => $this->post('luas_tanah'),
			'no_sertifikat' => $this->post('no_sertifikat'),
			'tgl_sertifikat' => $this->post('tgl_sertifikat'),
			'thn_perolehan' => $this->post('thn_perolehan'),
			'harga_perolehan' => $this->post('harga_perolehan'),
			'asal_usul' => $this->post('asal_usul'),
			'letak' => $this->post('letak'),
			'peruntukan' => $this->post('perntukan'),
			);
		$insert = $this->db->insert('aset_tanah', $data);
		if($insert){
			$this->db->where('npsn', $data['npsn']);
			$newdata = $this->db->get('aset_tanah')->result();
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
			'no_persil' => $this->post('no_persil'),
			'kepemilikan' => $this->post('kepemilikan'),
			'atasnama_sertifikat' => $this->post('atasnama_sertifikat'),
			'status_tanah' => $this->post('status_tanah'),
			'luas_tanah' => $this->post('luas_tanah'),
			'no_sertifikat' => $this->post('no_sertifikat'),
			'tgl_sertifikat' => $this->post('tgl_sertifikat'),
			'thn_perolehan' => $this->post('thn_perolehan'),
			'harga_perolehan' => $this->post('harga_perolehan'),
			'asal_usul' => $this->post('asal_usul'),
			'letak' => $this->post('letak'),
			'peruntukan' => $this->post('peruntukan'),
			);
		$this->db->where('npsn', $data['npsn']);
		$update = $this->db->update('aset_tanah', $data);
		if($update){
			$this->db->where('npsn', $data['npsn']);
			$newupdate = $this->db->get('aset_tanah')->result();
			$this->response(array('status'=>'succes','aset_tanah'=>$newupdate), 200);
		}
		else{
			$this->response(array('status' => 'fail'), 502);
		}
	}

	public function index_delete()
	{
		$npsn=$this->delete('npsn');
		$this->db->where('aset_tanah', $user);
		$delete = $this->db->delete('aset_tanah');
		if($delete){
			$this->response(array('status' => 'succes'), 200);
		}
		else{
			$this->response(array('status' => 'fail'), 502);
		}
	}
}