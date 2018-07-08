<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataPeminjaman extends CI_Controller{

	public function index()
	{
		$this->load->model('DataPeminjaman_model');
		$data["peminjaman_list"] = $this->DataPeminjaman_model->getDataPeminjaman();
		$this->load->view('dataPeminjaman',$data);
		//$diti['tabel_peminjaman'] = $this->Detail_model->getDataPeminjaman();
		//$diti['']
	}
	public function detail_pinjam($id_pinjam){
		$this->load->view('detail_pinjam');
	}

	public function datatable()
	{
		$this->load->model('DataPeminjaman_model');
		$data["peminjaman_list"] = $this->DataPeminjaman_model->getDataPeminjaman();
		$this->load->view('dataPeminjaman',$data);
	}
	
}
