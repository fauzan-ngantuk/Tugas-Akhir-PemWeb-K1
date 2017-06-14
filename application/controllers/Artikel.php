<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	
	public function index()
	{
		// $this->load->view('include/header');
		// $data['artikel'] = $this->my_lib->get_data('berita',array('id'=>$id));
		// $this->load->view('artikel');
		// $this->load->view('include/footer');
	}

	public function publish()
	{
		$this->load->view('include/header');
		$id = $this->uri->segment(3);
		$data['ar'] = $this->my_lib->get_data('berita', array('id'=>$id));
		$this->load->view('artikel', $data);
		$this->load->view('include/footer');
	}	

}