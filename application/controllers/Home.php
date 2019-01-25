<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if($_SESSION['status'] != 'logged in'){
            redirect('index.php/Login/index');
        }
    }


    public function Utama()
    {

        $this->load->view('home_view');
        
    }

    public function profil()
    {
        $this->load->view('user_view');
        
    }
    // public function Login()
    // {
    //     $this->load->view('login_view');
    // }

}

/* End of file Home.php */

?>