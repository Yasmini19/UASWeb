<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CekData_Model extends CI_Model {


	public function getData($id)
	{	
		$this->db->where('id_user',$id);
		$query = $this->db->get("tabel_peminjaman");
		return $query->result_array();

		
	}
		
}