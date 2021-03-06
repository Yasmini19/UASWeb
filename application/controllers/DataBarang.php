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

	public function create()
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('DataBarang_model');
		$this->form_validation->set_rules('nama_barang', 'Nama Barang', 'trim|required');
		$this->form_validation->set_rules('kondisi', 'Kondisi', 'trim|required');
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'trim|required');
//		$this->form_validation->set_rules('gb_barang', 'Gambar Barang', 'trim|required');
		$this->form_validation->set_rules('status', 'Status', 'trim|required');

		if ($this->form_validation->run()==FALSE)
		{
			$this->load->view('tambah_dataBarang_view');
		}else{
			$config['upload_path']     = './assets/upload';
			$config['allowed_types']  = 'gif|jpg|png';
			$config['max_size']		   = 1000000000;
			$config['max_width']       = 10240;
			$config['max_height']	   = 7680;

			$this->load->library('upload',$config);
			if (! $this->upload->do_upload('gb_barang'))
			{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('tambah_dataBarang_data',$error);
			}
			else
			{
				$this->DataBarang_model->insertDataBarang();
				$this->load->view('tambah_dataBarang_data');
		}
	}
}

	public function updateData($id)
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_barang', 'Nama Barang', 'trim|required');
		$this->form_validation->set_rules('kondisi', 'Kondisi', 'trim|required');
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'trim|required');
		$this->form_validation->set_rules('status', 'Status', 'trim|required');
		$this->load->model('DataBarang_model');
		$data['tabel_barang']= $this->DataBarang_model->getBarang($id);

		if ($this->form_validation->run()==FALSE)
		{
			$this->load->view('edit_dataBarang_view', $data);
		}else{
			$config['upload_path']	= './assets/upload/';
			$config['allowed_types']= 'gif|jpg|png';
			$config['max_size']		= '1000000000';
			$config['max_width']	= '10240';
			$config['max_height']	= '7680';

			$this->load->library('upload', $config);
			if (! $this->upload->do_upload('gb_barang')) {
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('edit_dataBarang_view',$data,$error);
			}else{
				$this->DataBarang_model->updateById($id);
				$this->load->view('edit_dataBarang_sukses');
			}
		}
	}

	public function deleteData($id_barang)
	{
		$this->load->helper("url");
		$this->load->model("DataBarang_model");
		$this->DataBarang_model->delete($id_barang);
		redirect('dataBarang');
	}
}
