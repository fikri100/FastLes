<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GuruCtl extends CI_Controller {

	public function index()
	{
		$this->load->model('AdminModel');
        $data['guru_list'] = $this->AdminModel->getDataGuru();
        $this->load->view('guru', $data);
	}
	public function insert()
	{
		$this->load->view('tambahGuru');
	}
	public function registerGuru()
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
            if (! $this->upload->do_upload('uploadIjazah'))
            {
                $error = array('error' => $this->upload->display_errors());
            }
            else
            {
                $this->UserModel->insertGuru();
                redirect('GuruCtl','refresh');
            }
            if ($this->form_validation->run() == FALSE) {
                # code...
                $this->load->view('registerGuruView');
            } else {
                $this->UserModel->insertGuru();
                redirect('GuruCtl','refresh');
            }
    }

    public function updateGuru($idGuru)
    {
        $this->load->library('form_validation');
        $this->load->model('AdminModel');
        $this->form_validation->set_rules('namaGuru', 'Nama Murid', 'trim|required');
        $this->form_validation->set_rules('tglLahir', 'Tangal Lahir', 'trim|required');
        $this->form_validation->set_rules('noTelp', 'No Telp', 'trim|required');
        $this->form_validation->set_rules('jenisKelamin', 'Jenis Kelamin', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('mapel', 'Mata Pelajaran', 'trim|required');
        $this->form_validation->set_rules('jenjang', 'Jenjang', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
    
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        $data['getData'] = $this->AdminModel->getDataGuru($idGuru)[0];

        if($this->form_validation->run()==FALSE){
            $this->load->view('updateGuru',$data);
        }
        else{
            if ($_FILES['uploadIjazah']['name'] == "")
            {
                $this->AdminModel->updateDataGuru($idGuru);
                $data['guru_list'] = $this->AdminModel->getDataGuru();
                $this->load->view('guru', $data);
            }
            else
            {
                $upload = $this->AdminModel->upload();
                if($upload['result'] == "success"){ 
                    $this->AdminModel->updateDataGuru($idGuru,$upload['fotoIjazah']['file_name']);
                    $data['guru_list'] = $this->AdminModel->getDataGuru();
                    $this->load->view('guru', $data);
                }else{ 
                    $data['error_upload'] = $upload['error'];
                    $this->load->view('updateGuru',$data);
                }
            }
        }
    }


    public function delete($idGuru)
    {
        $this->load->model('AdminModel');
        $this->AdminModel->hapusdataGuru($idGuru);
        redirect('GuruCtl');
    }
}

/* End of file guruCtl.php */
/* Location: ./application/controllers/guruCtl.php */