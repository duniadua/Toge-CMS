<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoginController
 *
 * @author sahid
 * @link www.terastekno.net
 * 
 */
class LoginController extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('login_model', 'login');
    }

    public function index() {
        $data['message'] = $this->session->flashdata('err_mssg');
        
        if ($this->input->post('submit') == 'Login'):
            $email = $this->input->post('email');
            if ($this->cekUserLogin()):
                $this->authorization->setUserCredential($email);
                redirect('backend');                
            else:
                $message = 'Login Failed Please Check Username Password';           
                $this->authorization->failedLogin($message);
                redirect('login');
            endif;
        endif;

        $this->load->view('login', $data);
    }

    private function cekUserLogin() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        if (isset($email) && isset($password)):

            $sql = array("where" => "email = '" . $email . "'",
                "and" => "password = '" . $password . "'");

            $val = $this->login->cekUser($sql);

            if ($val->valLogin == 1):
                return TRUE;
            else:
                return FALSE;
            endif;
        endif;
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }

}
