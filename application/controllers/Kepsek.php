<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kepsek extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$data['kab'] = $this->my_lib->get_data('kabupaten');
		$this->load->view('page/kepsek',$data);
		$this->load->view('footer');
	}

	public function perkecamatan()
	{
		$this->load->view('header');
		$kab = $this->uri->segment(3);
		$data['keca'] = $this->my_lib->get_data('kecamatan',array('kode_kab'=>$kab));
		$this->load->view('page/kepsek_keca',$data);
		$this->load->view('footer');
	}
}