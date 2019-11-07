<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MuridCtl extends CI_Controller {

	public function index()
	{
        $this->load->model('AdminModel');
        $data['murid_list'] = $this->AdminModel->getDataMurid();
		$this->load->view('murid', $data);
	}
	public function insert()
	{
		$this->load->view('tambahMurid');
	}
    public function kategoriSD()
    {
        $this->load->model('UserModel');
        $data['guruSD_list'] = $this->UserModel->kategoriSD();
        $this->load->view('kategoriSD', $data);
    }
    public function kategoriSMP()
    {
        $this->load->model('UserModel');
        $data['guruSMP_list'] = $this->UserModel->kategoriSMP();
        $this->load->view('kategoriSMP', $data);
    }
    public function kategoriSMA()
    {
        $this->load->model('UserModel');
        $data['guruSMA_list'] = $this->UserModel->kategoriSMA();
        $this->load->view('kategoriSMA', $data);
    }

    public function history(){
        $this->load->model('UserModel');
        $data['history_list'] = $this->UserModel->history();
        $this->load->view('history', $data);
    }

    public function Pesan()
    {
        $this->load->model('UserModel');
        $this->UserModel->pesanGuru();
        $this->load->view('homeMurid');
    }

    public function ulasanMurid($idGuru)
    {
        $this->load->library('session');
        $this->session->set_userdata('idGuru', $idGuru);
        $this->load->view('ulasanMurid');
    }

    public function ulasan()
    {
        $this->load->model('UserModel');
        $this->UserModel->ulasan();
        $this->load->view('homeMurid');
    }
   
	public function registerMurid()
    {
        $this->load->library('form_validation');
        $this->load->model('UserModel');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $config['upload_path']     = './assets/upload';
        $config['allowed_types']  = 'gif|jpg|png';
        $config['max_size']        = 1000000000;
        $config['max_width']       = 10240;
        $config['max_height']      = 7680;

        $this->load->library('upload',$config);
            if (! $this->upload->do_upload('foto'))
            {
                $error = array('error' => $this->upload->display_errors());
            }
            else
            {
                $this->UserModel->insertMurid();
                redirect('MuridCtl','refresh');
            }
            if ($this->form_validation->run() == FALSE) {
                # code...
                $this->load->view('registerMuridView');
            } else {
                $this->UserModel->insertMurid();
                redirect('MuridCtl','refresh');
            }
    }

    public function updateMurid($idMurid)
    {
        $this->load->library('form_validation');
        $this->load->model('AdminModel');
        $this->form_validation->set_rules('namaMurid', 'Nama Murid', 'trim|required');
        $this->form_validation->set_rules('tglLahir', 'Tangal Lahir', 'trim|required');
        $this->form_validation->set_rules('noTelp', 'No Telp', 'trim|required');
        $this->form_validation->set_rules('jenisKelamin', 'Jenis Kelamin', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('jenjang', 'Jenjang', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
    
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        $data['getData'] = $this->AdminModel->getDataMurid($idMurid)[0];

        if($this->form_validation->run()==FALSE){
            $this->load->view('updateMurid',$data);
        }
        else{
            if ($_FILES['foto']['name'] == "")
            {
                $this->AdminModel->updateData($idMurid);
                $data['murid_list'] = $this->AdminModel->getDataMurid();
                $this->load->view('murid', $data);
            }
            else
            {
                $upload = $this->AdminModel->upload();
                if($upload['result'] == "success"){ 
                    $this->AdminModel->updateData($idMurid,$upload['file']['file_name']);
                    $data['murid_list'] = $this->AdminModel->getDataMurid();
                    $this->load->view('murid', $data);
                }else{ 
                    $data['error_upload'] = $upload['error'];
                    $this->load->view('updateMurid',$data);
                }
            }
        }
    }

    public function delete($idMurid)
    {
        $this->load->model('AdminModel');
        $this->AdminModel->hapusdataMurid($idMurid);
        redirect('muridCtl');
    }
    
}

/* End of file muridCtl.php */
/* Location: ./application/controllers/muridCtl.php */