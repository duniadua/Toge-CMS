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
    }

    public function index() {


        $this->load->view('backend_header');
        $this->load->view('backend');
        $this->load->view('backend_footer');
    }

}
