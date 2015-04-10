<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PageCategoryController
 *
 * @author sahid
 * @link www.terastekno.net
 * 
 */
class PageCategoryController extends CI_Controller {

    private $viewPage = 'category';
    private $listPage = 'listcategory';

    public function __construct() {
        parent::__construct();
        $this->load->model('category_model', 'cm');
    }

    public function index() {
        if ($this->input->post()) {
            $this->cm->insert();
//            redirect('page/list');
        }
        $data['pageTitle'] = 'Create Category Page';

        $this->load->view('backend_header');
        $this->load->view($this->viewPage, $data);
        $this->load->view('backend_footer');
    }

    public function listPage() {
        $data['pageTitle'] = 'Category List';
        $data['listPage'] = $this->cm->gets();

        $this->load->view('backend_header');
        $this->load->view($this->listPage, $data);
        $this->load->view('backend_footer');
    }

    public function update($id) {
        $data['pageTitle'] = 'Category Update';
        $param = array(
            'where' => 'id =' . $id,
        );

        $data['rowAcc'] = $this->cm->get($param);
        if ($this->input->post()) {
            $this->page->update('id', $id);
            redirect('category/list');
        }

        $this->load->view('backend_header');
        $this->load->view($this->viewPage, $data);
        $this->load->view('backend_footer');
    }

    public function delete($id) {
        $this->cm->delete($id);
        redirect('category/list');
    }

}
