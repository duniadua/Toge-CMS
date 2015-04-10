<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConfigController
 *
 * @author sahid
 * @link www.terastekno.net
 * 
 */
class ConfigController extends CI_Controller {

    private $viewPage = 'config';
    private $listPage = 'listpage';

    public function __construct() {
        parent::__construct();
        $this->load->model('Config_Model', 'cm');
    }

    public function index() {
        if ($this->input->post('submit') == 'Save') {
            $this->cm->insert();
        } elseif ($this->input->post('submit') == 'Update') {
            $this->cm->update('ID','0');
        }

        $param = array(
            'where' => 'ID = 0'
        );

        $data['pageTitle'] = 'Blog Setting';
        $data['rowAcc'] = $this->cm->get($param);

        $this->load->view('backend_header');
        $this->load->view($this->viewPage, $data);
        $this->load->view('backend_footer');
    }

}
