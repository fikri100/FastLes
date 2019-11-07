<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MapelCtl extends CI_Controller {

	public function index()
	{
		$this->load->view('mapel');
	}
	public function insert()
	{
		$this->load->view('tambahMapel');
	}

}

/* End of file mapelCtl.php */
/* Location: ./application/controllers/mapelCtl.php */