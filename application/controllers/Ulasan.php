<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ulasan extends CI_Controller {

	public function index()
	{
		$this->load->model('GuruModel');
        $data['ulasanGuru_list'] = $this->GuruModel->getDataUlasan();
		$this->load->view('ulasanGuru', $data);
	}

}

/* End of file ulasan.php */
/* Location: ./application/controllers/ulasan.php */