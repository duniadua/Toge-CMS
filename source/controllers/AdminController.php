<?php

/**
 * Description of AdminController
 *
 * @author sahid
 * @link www.terastekno.net
 * 
 */
class AdminController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('comment_model', 'comment');
        $this->load->model('page_model', 'page');
    }

    public function index() {
        $comentParam = ['where' => 'status = 1'];
        $pageParam = ['where' => 'status = 1', 'limit' => 1];

        $data['comment_list'] = $this->comment->gets($comentParam);
        $data['page_list'] = $this->comment->gets($pageParam);

        $this->load->view('backend_header');
        $this->load->view('backend', $data);
        $this->load->view('backend_footer');
    }

}
