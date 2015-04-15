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

    private $viewPage = 'comment/update';
    private $listPage = 'comment/list';

    public function __construct() {
        parent::__construct();
        $this->load->model('comment_model', 'comment');
    }

    public function index() {
        if ($this->input->post()) {
            $this->comment->insert();
        }
    }

    public function listPage() {
        $data['pageTitle'] = 'Comment List';
        $data['listPage'] = $this->comment->gets();

        $this->load->view('backend_header');
        $this->load->view($this->listPage, $data);
        $this->load->view('backend_footer');
    }

    public function update($id) {
        $param = array(
            'where' => 'id =' . $id,
        );

        $data['rowAcc'] = $this->comment->get($param);
        if ($this->input->post()) {
            $this->comment->update('id', $id);
            redirect('comment/list');
        }

        $this->load->view('backend_header');
        $this->load->view($this->viewPage, $data);
        $this->load->view('backend_footer');
    }

    public function delete($id) {
        $this->comment->delete($id);
        redirect('comment/list');
    }

}
