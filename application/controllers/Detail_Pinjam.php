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
}