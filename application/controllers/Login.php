<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {
        $this->load->view('login_view');
        // echo "hallo faisal";
    }

    public function loginUser()
    {
        $this->load->model('Model_user');

        $query = $this->Model_user->cekLogin();
        $username = $query[0]->username;

        $listSession = array(
            'username'=> $username,
            'status' => 'logged in',
        );

        $this->session->set_userdata( $listSession );
        $this->session->set_flashdata('berhasil', 'Selamat datang');
        
        
        redirect('index.php/Home/Utama');
    }

    public function Register()
    {
        $this->load->view('register_view');
    }

    public function logout()
    {
        // unset($_SESSION);
        $this->session->sess_destroy();
        

        redirect('index.php/Login/index');
        
    }
        
}

/* End of file Login.php */

?>