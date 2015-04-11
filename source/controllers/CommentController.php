<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CommentController
 *
 * @author sahid
 * @link www.terastekno.net
 * 
 */
class CommentController extends CI_Controller {

    private $viewPage = 'menupage';
    private $listPage = 'comment/list';

    public function __construct() {
        parent::__construct();
        $this->load->model('comment_model', 'comment');
    }
   
    public function listPage() {
        $data['pageTitle'] = 'Comment List';
        $data['listPage'] = $this->comment->gets();

        $this->load->view('backend_header');
        $this->load->view($this->listPage, $data);
        $this->load->view('backend_footer');
    }

}
