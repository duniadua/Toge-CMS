<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HomeController
 *
 * @author sahid
 */
class HomeController extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('comment_model','comment');
    }

    public function index() {
        $this->load->view('backend_header');
        $this->load->view('backend');
        $this->load->view('backend_footer');
    }

    public function getComposer() {
        $data['title'] = 'Hello COng';

        $this->twig->display('home.html.twig', $data);
    }
    
    public function postTable(){
        $this->comment->add();
    }

}
