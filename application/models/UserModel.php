<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function login($username,$password)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('user.username', $username);
        $this->db->where('user.password', MD5($password));
        $query = $this->db->get();
        if($query->num_rows()==1){
            return $query->result();
        }else{
            return false;
        }
    }

    public function selectGuruWhereId($username){
        $this->db->select('*');
        $this->db->from('guru');
        $this->db->join('user', 'user.username = guru.username');
        $this->db->where('guru.username', $username);
        $query = $this->db->get();
        if($query->num_rows()==1){
            return $query->result();
        }else{
            return false;
        }
    }

    public function selectMuridWhereId($username){
        $this->db->select('*');
        $this->db->from('murid');
        $this->db->join('user', 'user.username = murid.username');
        $this->db->where('murid.username', $username);
        $query = $this->db->get();
        if($query->num_rows()==1){
            return $query->result();
        }else{
            return false;
        }
    }

    public function insertGuru()
    {
        $password = $this->input->post('password');
        $pass = MD5($password);
        $object=array(
                'namaGuru' => $this->input->post('namaGuru'),
                'tglLahir' => $this->input->post('tglLahir'),
                'noTelp' => $this->input->post('noTelp'),
                'jenisKelamin' => $this->input->post('jenisKelamin'),
                'alamat' => $this->input->post('alamat'),
                'mapel' => $this->input->post('mapel'),
                'jenjang' => $this->input->post('jenjang'),
                'uploadIjazah' => $this->upload->data('file_name'),
                'username' => $this->input->post('username'),
                'password' => $pass
            );
        $object1 = array(
                    'username' => $this->input->post('username'),
                    'password' => $pass,
                    'level'    => '2'
                );
        $this->db->insert('guru',$object);
        $this->db->insert('user',$object1);
    }

    public function insertMurid()
    {
        $password = $this->input->post('password');
        $pass = MD5($password);
        $object=array(
                'namaMurid' => $this->input->post('namaMurid'),
                'tglLahir' => $this->input->post('tglLahir'),
                'noTelp' => $this->input->post('noTelp'),
                'jenisKelamin' => $this->input->post('jenisKelamin'),
                'alamat' => $this->input->post('alamat'),
                'jenjang' => $this->input->post('jenjang'),
                'foto' => $this->upload->data('file_name'),
                'username' => $this->input->post('username'),
                'password' => $pass
            );
        $object1 = array(
                    'username' => $this->input->post('username'),
                    'password' => $pass,
                    'level'    => '3',
                    'jenjang' => $this->input->post('jenjang')

                 );
        $this->db->insert('murid',$object);
        $this->db->insert('user',$object1);
    }

    public function getNama()
    {
        $this->db->select('username');
    }

    public function kategoriSD()
    {
        $this->db->select('*');
        $this->db->from("guru");
        $this->db->where('jenjang', $jenjang='SD');
        return $this->db->get()->result_array();
        //$this->db->select('namaGuru, noTelp, jenisKelamin, alamat, mapel');
        //$this->db->from('guru');
        //$this->db->where('jenjang', $jenjang='SD');

    }
    public function kategoriSMP()
    {
        $this->db->select('*');
        $this->db->from("guru");
        $this->db->where('jenjang', $jenjang='SMP');
        return $this->db->get()->result_array();
        //$this->db->select('namaGuru, noTelp, jenisKelamin, alamat, mapel');
        //$this->db->from('guru');
        //$this->db->where('jenjang', $jenjang='SD');

    }
    public function kategoriSMA()
    {
        $this->db->select('*');
        $this->db->from("guru");
        $this->db->where('jenjang', $jenjang='SMA');
        return $this->db->get()->result_array();
        //$this->db->select('namaGuru, noTelp, jenisKelamin, alamat, mapel');
        //$this->db->from('guru');
        //$this->db->where('jenjang', $jenjang='SD');

    }

    public function history()
    {
        $this->db->select('*');
        $this->db->from("transaksi");
        $this->db->join('guru', 'guru.idGuru = transaksi.fk_id_guru');
        $this->db->where('fk_id_murid', $this->session->userdata('idMurid'));
        return $this->db->get()->result_array();
    }
    
    public function pesanGuru()
    {
         $object=array(
                'fk_id_guru' => $this->session->userdata('idGuru'),
                'fk_id_murid' => $this->session->userdata('idMurid'),
                'tanggalPesan' => $this->input->post('tanggalPesan'),
                'jam' => $this->input->post('jam'),
                'ket' => 'Tunggu'
            );
         $this->db->insert('transaksi',$object);
    }

    public function ulasan()
    {
        $object=array(
                'fk_id_guru' => $this->session->userdata('idGuru'),
                'fk_id_murid' => $this->session->userdata('idMurid'),
                'ulasan' => $this->input->post('ulasan')
            );
         $this->db->insert('ulasan',$object);   
    }

    public function getdataMurid()
    {
        $this->db->where('username' , $this->session->userdata('logged_in')['username']);
        return $this->db->get('murid')->result_array();
    }

    public function getAllMurid($id)
    {
        $this->db->where('idMurid' ,$id);
        $query=$this->db->get('murid');
        return $query->result();
    }

    public function updateById($idMurid)
    {
        $data = array(
            'idMurid' => $this->input->post('idMurid'),
            'namaMurid' => $this->input->post('namaMurid'),
            'tglLahir' => $this->input->post('tglLahir'),
            'noTelp' => $this->input->post('noTelp'),
            'jenisKelamin' => $this->input->post('jenisKelamin'),
            'alamat' => $this->input->post('alamat'),
            'jenjang' => $this->input->post('jenjang'),
            'foto' => $this->upload->data('file_name')
        );

        $this->db->where('idMurid', $idMurid);
        $this->db->update('murid', $data);
    }                                        

}

/* End of file .php */

?>