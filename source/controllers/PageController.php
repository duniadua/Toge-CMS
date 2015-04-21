<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PageController
 *
 * @author sahid
 * @link www.terastekno.net
 * 
 */
class PageController extends CI_Controller {

    private $viewPage = 'page';
    private $listPage = 'listpage';

    public function __construct() {
        parent::__construct();
        $this->load->model('Page_Model', 'page');
        $this->load->model('Category_Model', 'cm');
        $this->load->library('Authorization', '', 'authorize');
        $cekLogin = $this->authorization->cekAuthorization();
    }

    public function index() {        
        if ($cekLogin):
            if ($this->input->post()) {
                $this->page->insert();
//            redirect('page/list');
            }
            $param = array(
                'where' => 'status = 1'
            );

            $data['pageTitle'] = 'Create Page';
            $data['listPage'] = $this->cm->gets($param);

            $this->load->view('backend_header');
            $this->load->view($this->viewPage, $data);
            $this->load->view('backend_footer');
        else:
            redirect(Authorization::redirectLogOut());
        endif;
    }

    public function listPage() {        
        if ($cekLogin):
            $data['pageTitle'] = 'Page List';
            $data['listPage'] = $this->page->gets();

            $this->load->view('backend_header');
            $this->load->view($this->listPage, $data);
            $this->load->view('backend_footer');
        else:
            redirect(Authorization::redirectLogOut());
        endif;
    }

    public function update($id) {        
        if ($cekLogin):
            $data['pageTitle'] = 'Page Update';
            $param = array(
                'where' => 'id =' . $id,
            );

            $data['rowAcc'] = $this->page->get($param);
            if ($this->input->post()) {
                $this->page->update('id', $id);
                redirect('postpage/list');
            }

            $this->load->view('backend_header');
            $this->load->view($this->viewPage, $data);
            $this->load->view('backend_footer');
        else:
            redirect(Authorization::redirectLogOut());
        endif;
    }

    public function delete($id) {
        if ($cekLogin):
            $this->page->delete($id);
            redirect('postpage/list');
        else:
            redirect(Authorization::redirectLogOut());
        endif;
    }

}
