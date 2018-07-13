<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CekData extends CI_Controller {
	public function index()
	{
		$session_data = $this->session->userdata('logged_in');
		$id = $session_data['id_user'];
		$this->load->helper('url','form');
		$this->load->model('CekData_Model');
		$data['cekData'] = $this->CekData_Model->getData($id);
		$this->load->view('cekData',$data);
	}

}