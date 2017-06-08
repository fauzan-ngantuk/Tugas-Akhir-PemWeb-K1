<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pencarian extends CI_Controller {

	
	public function index()
	{
		$data['sekolah'] = array();
		if ($this->input->post()) {
			$npsn = $this->input->post('npsn');
			$this->db->where('npsn', $npsn);
			$data['sekolah'] = $this->db->get('profil')->result();
		}

		$this->load->view('include/header');
		$this->load->view('pencarian', $data);
		$this->load->view('include/footer');
	}

}