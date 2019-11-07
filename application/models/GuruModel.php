<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GuruModel extends CI_Model {

	public function getDataTransaksi()
	{
        	$this->db->select('*');
                $this->db->from("transaksi");
                $this->db->join('murid', 'murid.idMurid = transaksi.fk_id_murid');
                $this->db->where('fk_id_guru', $this->session->userdata('idGuru'));
                return $this->db->get()->result_array();
	}

	public function getDataUlasan(){
		$this->db->select('*');
                $this->db->from("ulasan");
                $this->db->join('murid', 'murid.idMurid = ulasan.fk_id_murid');
                $this->db->where('fk_id_guru', $this->session->userdata('idGuru'));
                return $this->db->get()->result_array();
	}


        public function getdataGuru()
        {
                $this->db->where('username' , $this->session->userdata('logged_in')['username']);
                return $this->db->get('guru')->result_array();
        }

        public function terima($id, $data) 
        {
                $this->db->where('id',$id); 
                if($this->db->update("transaksi", $data)){ 
                        return "Berhasil";
                }
        }

        public function tolak($id, $data) 
        {
                $this->db->where('id',$id); 
                if($this->db->update("transaksi", $data)){ 
                        return "Berhasil";
                }
        }

        public function terlaksana($id, $data) 
        {
                $this->db->where('id',$id); 
                if($this->db->update("transaksi", $data)){ 
                        return "Berhasil";
                }
        }

        public function getAllGuru($id)
        {
                $this->db->where('idGuru', $id);
                $query=$this->db->get('guru');
                return $query->result();
        }

        public function updateById($idGuru)
        {
        $data = array(
            'idGuru' => $this->input->post('idGuru'),
            'namaGuru' => $this->input->post('namaGuru'),
            'tglLahir' => $this->input->post('tglLahir'),
            'noTelp' => $this->input->post('noTelp'),
            'jenisKelamin' => $this->input->post('jenisKelamin'),
            'alamat' => $this->input->post('alamat'),
            'mapel' => $this->input->post('mapel'),
            'jenjang' => $this->input->post('jenjang'),
            'uploadIjazah' => $this->upload->data('file_name')
        );

        $this->db->where('idGuru', $idGuru);
        $this->db->update('guru', $data);
        }    

}

/* End of file guruModel.php */
/* Location: ./application/models/guruModel.php */