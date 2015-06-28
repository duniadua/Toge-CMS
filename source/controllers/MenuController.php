<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MenuController
 *
 * @author sahid
 * @link www.terastekno.net
 * 
 */
class MenuController extends CI_Controller {

    private $viewPage = 'menupage';
    private $listPage = 'listmenu';

    public function __construct() {
        parent::__construct();
        $this->load->model('category_model', 'cm');
        $this->load->model('page_model', 'pm');
        $this->load->model('menus_model', 'mm');
    }

    public function index() {
        if ($this->input->post()) {
            $this->mm->insert();
//            redirect('page/list');
//            dump($this->input->post());
//            die();
        }
        $parm = array(
            'where' => 'status = 1'
        );
        
        
        $data['pageTitle'] = 'Create Menu';        
        $data['listCM'] = $this->cm->gets($parm);
        $data['listMM'] = $this->mm->gets($parm);
        $data['listPM'] = $this->pm->gets($parm);

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
