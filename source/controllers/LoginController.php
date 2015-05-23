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
use Monolog\Logger;
use Monolog\Handler\BrowserConsoleHandler;

class LoginController extends CI_Controller {

    private $log;

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('login_model', 'login');
        $this->log = new Logger('login');
        $this->log->pushHandler(new BrowserConsoleHandler(Logger::DEBUG));
    }

    public function index() {
        $this->log->addDebug('Login Page Called');
        $data['message'] = $this->session->flashdata('err_mssg');
        
        if ($this->authorization->isAlien()):
            show_404();
        else:
            if ($this->input->post('submit') == 'Login'):
                $email = $this->input->post('email');

                if ($this->cekLogin()):
                    $this->authorization->setUserCredential($email);
                    redirect('backend');
                else:
                    $message = 'Login Failed Please Check Username Password';

                    $this->authorization->failedLogin($message);
                    redirect('login');
                endif;
            endif;
        endif;

        $this->load->view('login', $data);
    }

    private function cekLogin() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $param = [
            'where' => "email = '" . $email . "'",
        ];

        $vaLogin = $this->login->get($param);

        if (isset($vaLogin)):
            if (crypt($password, $vaLogin->password) == $vaLogin->password):
                return TRUE;
            else:
                return FALSE;
            endif;
        endif;
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }

}
