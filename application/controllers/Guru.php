<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

	
	public function index()
	{
		$this->load->view('header');
		$data['kab'] = $this->my_lib->get_data('kabupaten');
		$this->load->view('page/guru',$data);
		$this->load->view('footer');
	}

	
}
