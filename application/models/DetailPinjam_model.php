<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailPinjam_model extends CI_Model {

	public function getDetailPinjam($id_pinjam)
	{
		
		$query = $this->db->where('id_pinjam',$id_pinjam)->get('tabel_detail_pinjam');
		//$query = $this->db->order_by('id_pinjam','DESC')->get('tabel_detail_pinjam');
		return $query->result();
	}

	public function getDetail($id)
		{
			$this->db->where('id_pinjam',$id);
			$query = $this->db->get("tabel_detail_pinjam");
			return $query->result();
		}

	public function updateById($id_detail)
		{
		$data = array(
			'id_pinjam' => $this->input->post('id_pinjam'),
			'id_barang' => $this->input->post('id_barang'),
			'jumlah_pinjam' => $this->input->post('jumlah_pinjam'),
			'status' => $this->input->post('status'),
		);

		$this->db->where('id_detail', $id_detail);
		$this->db->update('tabel_detail_pinjam', $data);
		}



}

/* End of file DataPeminjaman_model.php */
/* Location: ./application/models/DataPeminjaman_model.php */