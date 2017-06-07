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
		$user = $this->db->get('aset_tanah')->result();
		$this->response($user, 200);
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