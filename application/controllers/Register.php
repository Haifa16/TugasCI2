<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Register extends CI_Controller {
    
        public function registerUser()
        {
            $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
            $this->form_validation->set_rules('fname', 'Full Name', 'required');
            $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');
            $this->form_validation->set_rules('contact', 'Contact', 'required');
            $this->form_validation->set_rules('nis', 'NIS', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|matches[password]');

            if ($this->form_validation->run()==TRUE) {
                // load model ke db
                $this->load->model('Model_user');
                $this->Model_user->insertUser();
                
                $this->session->set_flashdata('succeses','you are registered');
                
                redirect('Login/index');
                
            } else {
                $this->load->view('register_view');
            }
            
        }
    
    }
    
    /* End of file Register.php */
    
?>