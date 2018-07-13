<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pinjam extends CI_Controller {

	 public function __construct()
    {
        parent::__construct();
        
    }


	public function add()
	{
		$this->load->library('cart');
		$data = array(
			'id' => $this->input->post('id'),
			'name' => $this->input->post('nama'),
			'price' => '0',
			'qty'=>1
			 );
		$this->cart->insert($data);
		echo '<script>alert("sudah masuk keranjang")</script>';
	 		redirect('Barang','refresh');
	}
	public function delete($rowId){
		$this->load->library('cart');
		$data= array(
			'rowid' => $this->uri->segment(3),
			'qty'=>0);
		$this->cart->update($data);
	}

	
	// public function index()
	// {

	// }
	// public function pinjam2($id){

	// 	//$id2 = ;
		
	// 	if(empty($this->session->userdata('cart'))){
	// 		$_SESSION['cart']=array();
	// 		array_push($_SESSION['cart'],$id );
	// 		$_SESSION['cart'][$id]='1';
	// 		echo '<script>alert("sudah masuk keranjang")</script>';
	// 		redirect('Barang','refresh');
			
	// 	}elseif(isset($_SESSION['cart'][$id]))
	// 	{
	// 		$_SESSION['cart'][$id]+='1';
	// 		echo '<script>alert("sudah masuk keranjang")</script>';
	// 		//$this->load->view('cart');
	// 		//echo $_SESSION['cart'][$id];
	// 		redirect('Barang','refresh');
	// 	}elseif(!isset($_SESSION['cart'][$id])){
	// 		$_SESSION['cart'][$id]='1';
	// 		echo '<script>alert("sudah masuk keranjang")</script>';
	// 		redirect('Barang','refresh');
	// 		//$this->load->view('cart');
	// 	}else{
	// 		echo "zzzzzz";
	// 	}
	// }
	 public function cart(){	
	 	$this->load->library('cart');
		$data['carts'] = $this->cart->contents();
		$this->load->view('cart',$data);
	 
	 }
}