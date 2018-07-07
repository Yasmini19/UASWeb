<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataPeminjaman_model extends CI_Model {

	public function getDataPeminjaman()
	{

		$query = $this->db->order_by('id_pinjam','DESC')->get('tabel_peminjaman');
		return $query->result();
	}

}

/* End of file DataPeminjaman_model.php */
/* Location: ./application/models/DataPeminjaman_model.php */