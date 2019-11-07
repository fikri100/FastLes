<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class homeGuru extends CI_Controller {

	public function index()
	{
		$this->load->model('GuruModel');
        $data['historyGuru_list'] = $this->GuruModel->getDataTransaksi();
        $this->load->view('homeGuru', $data);
    }

}

/* End of file homeGuru.php */
/* Location: ./application/controllers/homeGuru.php */