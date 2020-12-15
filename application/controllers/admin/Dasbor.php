<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//proteksi halaman
		$this->simple_login->cek_login();
	}

	public function index()
	{
		$site = $this->konfigurasi_model->listing();
		$data = array(	'title'		=> 	'Halamana Administrator',
						'site' 		=> $site,
						'isi'		=>	'admin/dasbor/list');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

}

/* End of file Dasbor.php */
/* Location: ./application/controllers/admin/Dasbor.php */