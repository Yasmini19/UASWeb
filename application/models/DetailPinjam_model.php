<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailPinjam_model extends CI_Model {

	public function getDetailPinjam($id_pinjam)
	{
		
		$query = $this->db->where('id_pinjam',$id_pinjam)->get('tabel_detail_pinjam');
		//$query = $this->db->order_by('id_pinjam','DESC')->get('tabel_detail_pinjam');
		return $query->result();
	}

}

/* End of file DataPeminjaman_model.php */
/* Location: ./application/models/DataPeminjaman_model.php */