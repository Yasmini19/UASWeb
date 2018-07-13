<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function index()
    {
       $this->load->view('HomeUser');
    }

    public function getUser()
    {
        $this->load->view('dataUser');
    }

    public function getAllUser()
    {
        $this->load->model('DataUser_model');
        $result = $this->DataUser_model->getAllUser(); 
        header("Content-Type: application/json");
        echo json_encode($result);
    }

    public function addUser(){
        $this->load->model('DataUser_model');
        $this->DataUser_model->save();
    }

    public function deleteUser()
    {
        $this->load->model('DataUser_model');
        $id_user = $this->input->post('id_user'); 
        $this->DataUser_model->delete($id_user);
    }
}

?>