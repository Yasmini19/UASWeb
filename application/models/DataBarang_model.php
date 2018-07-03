<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class DataBarang_model extends CI_Model
	{
		public function getDataBarang()
		{
			$query = $this->db->get("tabel_barang");
			return $query->result_array();
		}

		 public function insertDataBarang()
			{
				$object = array(
						'nama_barang' => $this->input->post('nama_barang'),
						'kondisi' => $this->input->post('kondisi'),
						'jumlah' => $this->input->post('jumlah'),
						'gb_barang' => $this->input->post('gb_barang'),
						'status' => $this->input->post('status')
						);
					$this->db->insert('tabel_barang', $object);
			}
	}
?>