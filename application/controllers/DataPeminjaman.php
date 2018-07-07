<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataPeminjaman extends CI_Controller{

	public function index()
	{
		$this->load->model('DataPeminjaman_model');
		$data["peminjaman_list"] = $this->DataPeminjaman_model->getDataPeminjaman();
		$this->load->view('dataPeminjaman',$data);
	}

	public function datatable()
	{
		$this->load->model('DataPeminjaman_model');
		$data["peminjaman_list"] = $this->DataPeminjaman_model->getDataPeminjaman();
		$this->load->view('dataPeminjaman',$data);
	}
}
