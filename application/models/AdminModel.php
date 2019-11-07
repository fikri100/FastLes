<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model {

	public function getDataMurid($idMurid='')
	{
		$this->db->select('*');
		$this->db->from("murid");
		if($idMurid!='')
		{ $this->db->where('idMurid',$idMurid); }
		return $this->db->get()->result_array();
	}
	public function getDataGuru($idGuru='')
	{
		$this->db->select('*');
		$this->db->from("guru");
		if($idGuru!='')
		{ $this->db->where('idGuru',$idGuru); }
		return $this->db->get()->result_array();
	}

	public function updateDataGuru($idGuru,$upload_name=null)	
	{
		$data = $this->input->post();
		
		if($upload_name!=null){
			$data['foto'] = $upload_name;
			$this->delete_image($idGuru);
		}
		$this->db->where('idGuru',$idGuru);
		if($this->db->update("guru",$data)){
			return "Berhasil";
		}
	}

	public function getDataDetail($id='')
	{
		$this->db->select('transaksi.*,guru.namaGuru, murid.namaMurid');
		$this->db->from('transaksi');
		$this->db->join('guru','transaksi.fk_id_guru=guru.idGuru');
		$this->db->join('murid','transaksi.fk_id_murid=murid.idMurid');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function updateData($idMurid,$upload_name=null)	
	{
		$data = $this->input->post();
		
		if($upload_name!=null){
			$data['foto'] = $upload_name;
			$this->delete_image($idMurid);
		}
		$this->db->where('idMurid',$idMurid);
		if($this->db->update("murid",$data)){
			return "Berhasil";
		}
	}

	public function upload(){
        $config['upload_path'] = './assets/upload';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '2048';
        $config['remove_space'] = TRUE;
        $this->load->library('upload', $config);
        if($this->upload->do_upload('foto')){
            $return = array('result' => 'success', 'file' => $this->upload->data(),
            'error' => '');
            return $return;
        }else{
            $return = array('result' => 'failed', 'file' => '', 'error' =>
            $this->upload->display_errors());
            return $return;
        }
    }

    public function delete_image($idMurid)
    {
    	$data = $this->db->get_where('murid',array('idMurid'=>$idMurid))->result_array();
		unlink('./assets/upload/'.$data[0]['foto']);
    }


	public function getDataDetailWhereGuru($idGuru) 
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('guru','transaksi.fk_id_guru=guru.idGuru');
		$this->db->join('murid','transaksi.fk_id_murid=murid.idMurid');
		$this->db->where('fk_id_guru',$idGuru);
		$query = $this->db->get();
		return $query->result_array();
	}
	public function getDataDetailWhereMurid($idMurid) 
	{
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('guru','transaksi.fk_id_guru=guru.idGuru');
		$this->db->join('murid','transaksi.fk_id_murid=murid.idMurid');
		$this->db->where('fk_id_guru',$idMurid);
		$query = $this->db->get();
		return $query->result_array();
	}
	public function hapusDataMurid($idMurid)
	{
		$this->db->where('idMurid',$idMurid);
		if($this->db->delete("murid")){
			return "Berhasil";
		}
	}
	public function hapusDataGuru($idGuru)
	{
		$this->db->where('idGuru',$idGuru);
		if($this->db->delete("guru")){
			return "Berhasil";
		}
	}
	public function hapusDataDetail($id)
	{
		$this->db->where('id',$id);
		if($this->db->delete("transaksi")){
			return "Berhasil";
		}
	}
}

/* End of file adminModel.php */
/* Location: ./application/models/adminModel.php */