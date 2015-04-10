<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CekAuthController
 *
 * @author sahid
 * @link www.terastekno.net
 * 
 */
class CekAuthController extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->library('Authorization');
    }

    public function setAuth(){
        Authorization::cekTrue('udin');
    }
  
    public function cekValidAuth() {
        Authorization::setRedirectLogOut('logout');
        $cekAuth = Authorization::cekAuthorization();
        
        if($cekAuth){
            echo 'valid session';
        }
    }
}