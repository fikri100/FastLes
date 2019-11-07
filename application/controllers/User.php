<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function index()
    {
       $this->load->view('HomeUser');
    }

    public function getUser()
    {
        $this->load->model('UserModel');
        $data['data'] = $this->UserModel->getdataMurid($this->session->userdata('logged_in')['username']);
        $this->load->view('dataDiriMurid', $data);
    }

    public function getAllUser()
    {
        $this->load->model('DataUser_model');
        $result = $this->DataUser_model->getAllUser(); 
        header("Content-Type: application/json");
        echo json_encode($result);
    }

    public function addUser(){
        $this->load->model('DataUser_model');
        $this->DataUser_model->save();
    }

    public function deleteUser()
    {
        $this->load->model('DataUser_model');
        $id_user = $this->input->post('id_user'); 
        $this->DataUser_model->delete($id_user);
    }

    public function updateData($id)
    {
        $this->load->helper('url','form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('idMurid', 'Id Murid', 'trim|required');
        $this->form_validation->set_rules('namaMurid', 'Nama Murid', 'trim|required');
        $this->form_validation->set_rules('tglLahir', 'Tanggal Lahir', 'trim|required');
        $this->form_validation->set_rules('noTelp', 'No Telp', 'trim|required');
        $this->form_validation->set_rules('jenisKelamin', 'Jenis Kelamin', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('jenjang', 'Jenjang', 'trim|required');
        $this->load->model('UserModel');
        $data['murid']= $this->UserModel->getAllMurid($id);

        if ($this->form_validation->run()==FALSE)
        {
            $this->load->view('edit_murid_view', $data);
        }else{
            $config['upload_path']  = './assets/upload/';
            $config['allowed_types']= 'gif|jpg|png';
            $config['max_size']     = '1000000000';
            $config['max_width']    = '10240';
            $config['max_height']   = '7680';

            $this->load->library('upload', $config);
            if (! $this->upload->do_upload('foto')) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('edit_murid_view',$data,$error);
            }else{
                $this->UserModel->updateById($id);
                $this->load->view('edit_murid_sukses');
            }
        }
    }
}

?>