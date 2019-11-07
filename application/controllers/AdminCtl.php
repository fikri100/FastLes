<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminCtl extends CI_Controller {

	public function index()
	{
		$this->load->view('homeAdmin');
	}

}

/* End of file adminCtl.php */
/* Location: ./application/controllers/adminCtl.php */