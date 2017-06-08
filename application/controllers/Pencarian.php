<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pencarian extends CI_Controller {

	
	public function index()
	{
		$this->load->view('include/header');
		$this->load->view('pencarian');
		$this->load->view('include/footer');
	}

}