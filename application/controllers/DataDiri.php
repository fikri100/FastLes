<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataDiri extends CI_Controller {

	public function index()
	{
		$this->load->model('GuruModel');
        $data['data_list'] = $this->GuruModel->getdataGuru($this->session->userdata('logged_in')['username']);
        $this->load->view('dataDiriGuru', $data);
		
	}

	public function history()
	{
        $this->load->model('UserModel');
        $data['data'] = $this->UserModel->history();
        $this->load->view('history', $data);
    }

    public function getDataGuru()
    {
		 $this->load->model('GuruModel');
        $data['data'] = $this->GuruModel->getdataGuru($this->session->userdata('logged_in')['username']);
        $this->load->view('dataDiriGuru', $data);
    }

    public function updateData($id)
    {
        $this->load->helper('url','form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('idGuru', 'Id Guru', 'trim|required');
        $this->form_validation->set_rules('namaGuru', 'Nama Guru', 'trim|required');
        $this->form_validation->set_rules('tglLahir', 'Tanggal Lahir', 'trim|required');
        $this->form_validation->set_rules('noTelp', 'No Telp', 'trim|required');
        $this->form_validation->set_rules('jenisKelamin', 'Jenis Kelamin', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('mapel', 'Mata Pelajaran', 'trim|required');
        $this->form_validation->set_rules('jenjang', 'Jenjang', 'trim|required');
        $this->load->model('GuruModel');
        $data['guru']= $this->GuruModel->getAllGuru($id);

        if ($this->form_validation->run()==FALSE)
        {
            $this->load->view('edit_guru_view', $data);
        }else{
            $config['upload_path']  = './assets/upload/';
            $config['allowed_types']= 'gif|jpg|png';
            $config['max_size']     = '1000000000';
            $config['max_width']    = '10240';
            $config['max_height']   = '7680';

            $this->load->library('upload', $config);
            if (! $this->upload->do_upload('uploadIjazah')) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('edit_guru_view',$data,$error);
            }else{
                $this->GuruModel->updateById($id);
                $this->load->view('edit_guru_sukses');
            }
        }
    }

}

/* End of file dataDiri.php */
/* Location: ./application/controllers/dataDiri.php */