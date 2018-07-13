<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buatpdf extends CI_Controller {

	public function index()
	{
		
	}

	public function createPdf()
	{
		$this->load->library('pdf');
		$this->load->model('DataBarang_model');
		$data['data_list'] = $this->DataBarang_model->getDataBarang();
		$this->pdf->load_view('pdf',$data);
	}

}

/* End of file buatpdf.php */
/* Location: ./application/controllers/buatpdf.php */