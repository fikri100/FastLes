<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailCtl extends CI_Controller {

	public function index()
	{
		$this->load->model('AdminModel');
        $data['transaksi_list'] = $this->AdminModel->getDataDetail();
		$this->load->view('detail', $data);
	}

	public function delete($id)
    {
        $this->load->model('AdminModel');
        $this->AdminModel->hapusDataDetail($id);
        redirect('detailCtl');
    }
    
}

/* End of file detailCtl.php */
/* Location: ./application/controllers/detailCtl.php */