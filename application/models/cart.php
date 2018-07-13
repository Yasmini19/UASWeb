<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cart extends CI_Model {

	public function getData()
	{	

		foreach ($_SESSION['cart'] as $key => $value) {
			
			$this->db->where('id_barang', $key);
		}
		
		$query = $this->db->get('tabel_barang');
		return $query->result();
	}
		
	

}
