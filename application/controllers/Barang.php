<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function index()
	{
		$this->load->helper('url','form');
		$this->load->model('DataBarang_model');
		$data['data_list'] = $this->DataBarang_model->getDataBarang();
		$this->load->view('barang', $data);
	}
}
