<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MuridCtl extends CI_Controller {

	public function index()
	{
		$this->load->view('HomeMurid');
	}
	public function kategoriSD()
	{
		$this->load->model('UserModel');
		$this->UserModel->kategoriSD();
		$this->load->view('kategoriSD');
	}

}

/* End of file kategoriMuridCtl.php */
/* Location: ./application/controllers/kategoriMuridCtl.php */