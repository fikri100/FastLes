<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History extends CI_Controller {

	
	public function index()
	{
		$this->load->model('GuruModel');
        $data['historyGuru_list'] = $this->GuruModel->getDataTransaksi();
        $this->load->view('historyGuru', $data);
    }

    public function terima($id)
    {
    	$this->load->model('GuruModel');
    	$dat = ['ket'=>'Diterima'];
    	$this->GuruModel->terima($id, $dat);
    	$data['historyGuru_list'] = $this->GuruModel->getDataTransaksi();
    	$this->load->view('historyGuru', $data);
    }

    public function tolak($id)
    {
    	$this->load->model('GuruModel');
    	$dat = ['ket'=>'Ditolak'];
    	$this->GuruModel->terima($id, $dat);
    	$data['historyGuru_list'] = $this->GuruModel->getDataTransaksi();
    	$this->load->view('historyGuru', $data);
    }

    public function terlaksana($id)
    {
    	$this->load->model('GuruModel');
    	$dat = ['ket'=>'Terlaksana'];
    	$this->GuruModel->terima($id, $dat);
    	$data['historyGuru_list'] = $this->GuruModel->getDataTransaksi();
    	$this->load->view('historyGuru', $data);
    }

}

/* End of file rincian.php */
/* Location: ./application/controllers/rincian.php */