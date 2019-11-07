<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Login extends CI_Controller {

        public function __construct()
        {
        parent::__construct();
        $this->load->model('UserModel');

        }
    
        public function index()
        {   
            $this->load->view('homeMurid');
        }

        public function login()
        {
            $this->load->view('loginView');
        }

        public function guru(){
            $this->load->view('homeGuru', $data);
        }

        public function transaksi($idGuru)
        {
            $this->load->library('session');
            $this->session->set_userdata('idGuru', $idGuru);
            $this->load->view('transaksi');
        }

        public function logout()
        {
            # code...
            $this->load->library('session');
            $this->session->unset_userdata('logged_in');
            $this->session->sess_destroy();
            session_start();
            unset($_SESSION['cart']);
            session_destroy();
            session_unset();
            redirect('login','refresh');
        }

        public function cekDb($password)
        {
            # code...
            $this->load->library('session');
            $this->load->model('UserModel');
            $username = $this->input->post('username'); 
            $result = $this->UserModel->login($username,$password);
            if($result){
                $session_array = array();
                foreach ($result as $key) {
                    $session_array = array(
                        'id'=>$key->id,
                        'username'=>$key->username,
                        'level' => $key->level,
                        'jenjang' => $key->jenjang
                    );
                    $this->session->set_userdata('logged_in',$session_array);
                }
                return true;
            }else{
                $this->form_validation->set_message('cekDb',"Kesalahan dalam penulisan Username & Password");
                return false;
            }
        }

        public function cekLogin()
        {
            $this->load->library('form_validation');
            $this->load->model('UserModel');
            $this->form_validation->set_rules('username', 'Username', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_cekDb');
            if ($this->form_validation->run() == FALSE) {
                # code...
                $this->load->view('loginView');
            } else {
                $session_data = $this->session->userdata('logged_in');
                $data['username'] = $session_data['username'];
                $data['level'] = $session_data['level'];
                $data['jenjang'] = $session_data['jenjang'];
                if ($data['level'] == '2') {
                    $this->load->view('homeGuru');  
                    $r=$this->UserModel->SelectGuruWhereId($data['username']);
                    foreach ($r as $key) {
                        $this->session->set_userdata('idGuru',$key->idGuru);
                    }
                }else if ($data['level'] == '3') {
                    $r=$this->UserModel->SelectMuridWhereId($data['username']);
                    foreach ($r as $key) {
                        $this->session->set_userdata('idMurid',$key->idMurid);
                    }
                    if ($data['jenjang'] == 'SD') {
                        $this->load->view('homeMuridSD');    
                    }else if ($data['jenjang'] == 'SMP'){
                        $this->load->view('homeMuridSMP'); 
                    }else{
                        $this->load->view('homeMuridSMA');
                    }
                    //$this->load->view('HomeMurid');
                }else {
                    $this->load->view('homeAdmin');
                }
            }
        }

        //public function register()
        //{
           /*$this->load->library('form_validation');
            $this->form_validation->set_rules('username', 'Username', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');*/
           // if (/*$this->form_validation->run() == FALSE) {
                # code...
             //   $this->load->view('registerGuruView');
          //  } else {
              //  $this->load->view('registerMuridView');
                /*$this->load->model('UserModel');
                $this->Usermodel->insert();
                redirect('Login','refresh');
            }*/
        //}

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
                $this->load->view('loginView');
            }
            if ($this->form_validation->run() == FALSE) {
                # code...
                $this->load->view('registerGuruView');
            } else {
                $this->UserModel->insertGuru();
                $this->load->view('loginView');
            }
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
                $this->load->view('loginView');
            }
            if ($this->form_validation->run() == FALSE) {
                # code...
                $this->load->view('registerMuridView');
            } else {
                $this->UserModel->insertMurid();
                $this->load->view('loginView');
            }
        }


    public function pesan($guru,$id)
    {
        $this->load->library('form_validation');
        $this->load->model('UserModel');
        $this->form_validation->set_rules('tanggalPesan', 'Tanggal Pesan', 'trim|required');
        $this->form_validation->set_rules('jam', 'Total Jam', 'trim|required');
        $this->UserModel->pesanGuru();
        $this->load->view('kategoriSD');
    }

    }
    
    /* End of file Controllername.php */
    
?>