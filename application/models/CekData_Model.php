<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CekData_Model extends CI_Model {


	public function getData($id)
	{	
		$query =$this->db->query("SELECT * FROM tabel_peminjaman as t inner join tabel_detail_pinjam as d on t.id_pinjam = d.id_pinjam where t.id_user = '$id'  group by t.id_pinjam");
		return $query->result_array();
	}

	public function getStatus($id)
	{	
		$this->db->where('id_pinjam',$id);
		$query = $this->db->get("tabel_detail_pinjam");
		return $query->result_array();
	}

	public function add($id)
	{
		$object = array(
						'id_user' => $id,
						'keperluan' => $this->input->post('keperluan'),
						'tanggal_pinjam' => $this->input->post('tanggal_pinjam'),
						'tanggal_kembali' => $this->input->post('tanggal_kembali')
						);
					$this->db->insert('tabel_peminjaman', $object);

		$query =$this->db->query('SELECT id_pinjam from tabel_peminjaman order by id_pinjam desc limit 1 ');
		$noID  = 0 ;
		foreach ($query->result() as $key) {
			$noID = $key->id_pinjam;
		}

		foreach ($this->cart->contents() as $key) {
			$data = array(
						'id_pinjam' => $noID,
						'id_barang' => $key['id'],
						'jumlah_pinjam' => $key['qty'],
						'status' => 'belum bisa diambil'
						);
					$this->db->insert('tabel_detail_pinjam', $data);
			
		}
	}
		
}