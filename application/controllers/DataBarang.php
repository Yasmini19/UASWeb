<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataBarang extends CI_Controller {

	public function index()
	{
		$this->load->helper('url','form');
		$this->load->model('DataBarang_model');
		$data['data_list'] = $this->DataBarang_model->getDataBarang();
		$this->load->view('dataBarang', $data);
	}

	public function updateData()
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('')
	}
	public function deleteData($id_barang)
	{
		$this->load->helper("url");
		$this->load->model("DataBarang_model");
		$this->DataBarang_model->delete($id_barang);
		redirect('dataBarang');
	}
}
