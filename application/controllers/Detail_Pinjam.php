<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_Pinjam extends CI_Controller {

	public function detail($id)
	{
		$this->load->helper('url','form');
		$this->load->model('DetailPinjam_model');
		$data['detail_list'] = $this->DetailPinjam_model->getDetailPinjam($id);
		$this->load->view('detail_pinjam',$data);
	}


	public function update($id)
	{
		$this->load->helper('url','form');
		$this->load->model('DetailPinjam_model');
		$data['tabel_detail_pinjam'] = $this->DetailPinjam_model->getDetail($id);
		$this->load->view('edit_detailBarang_view',$data);
	}


		public function updateData($id)
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('id_pinjam', 'Id Pinjam', 'trim|required');
		$this->form_validation->set_rules('id_barang', 'Id Barang', 'trim|required');
		$this->form_validation->set_rules('jumlah_pinjam', 'Jumlah Pinjam', 'trim|required');
		$this->form_validation->set_rules('status', 'Status', 'trim|required');
		$this->load->model('DetailPinjam_model');
		$data['tabel_detail_pinjam']= $this->DetailPinjam_model->getDetail($id);

		if ($this->form_validation->run()==FALSE)
		{
			$this->load->view('edit_detailBarang_view', $data);
			}else{
				$this->DetailPinjam_model->updateById($id);
				$this->load->view('edit_detailBarang_sukses');
			}
		}
	}

