<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Login extends CI_Controller {
    
        public function index()
        {   
            $this->load->view('loginView');
        }

        public function logout()
        {
            # code...
            $this->session->unset_userdata('logged_in');
            $this->session->sess_destroy();
            redirect('tabel_user','refresh');
        }

        public function cekDb($password)
        {
            # code...
            $this->load->model('User_model');
            $username = $this->input->post('username'); 
            $result = $this->User_model->login($username,$password);
            if($result){
                $session_array = array();
                foreach ($result as $key) {
                    $session_array = array(
                        'id_user'=>$key->id_user,
                        'username'=>$key->username,
                        'level' => $key->level
                    );
                    $this->session->set_userdata('logged_in',$session_array);
                }
                return true;
            }else{
                $this->form_validation->set_message('cekDb',"Kesalahan dalam penulisan Username & Password");
                return false;
            }
        }

        public function cekLogin()
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('username', 'Username', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_cekDb');
            if ($this->form_validation->run() == FALSE) {
                # code...
                $this->load->view('loginView');
            } else {
                $session_data = $this->session->userdata('logged_in');
                $data['username'] = $session_data['username'];
                $data['level'] = $session_data['level'];
                if ($data['level'] == 'Pengguna') {
                    redirect('dashboard','refresh');
                }else{
                    redirect('dataBarang','refresh');
                }
            }
        }

        public function register()
        {
           $this->load->library('form_validation');
            $this->form_validation->set_rules('username', 'Username', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            if ($this->form_validation->run() == FALSE) {
                # code...
                $this->load->view('registerView');
            } else {
                $this->load->model('User_model');
                $this->User_model->insert();
                redirect('Login','refresh');
            }
        }

    }
    
    /* End of file Controllername.php */
    
?>