<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function login($username,$password)
    {
        $this->db->select('id_user,username,password,level');
        $this->db->from('tabel_user');
        $this->db->where('username', $username);
        $this->db->where('password', MD5($password));
        $query = $this->db->get();
        if($query->num_rows()==1){
            return $query->result();
        }else{
            return false;
        }
    }

    public function insert()
    {
        $password = $this->input->post('password');
        $pass = MD5($password);
        $object=array(
                'nama' => $this->input->post('nama'),
                'organisasi' => $this->input->post('organisasi'),
                'no_hp' => $this->input->post('no_hp'),
                'username' => $this->input->post('username'),
                'password' => $pass,
                'level' => 'Pengguna'
            );
        $this->db->insert('tabel_user',$object);
    }

    public function getNama()
    {
        $this->db->select('username');
    }
}

/* End of file .php */

?>