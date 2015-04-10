<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('menus_model', 'mm');
    }

    public function index() {
        $this->load->view('welcome_message');
    }

    public function testIndex() {
        $menuArray = array(
            'where' => ' status = 1',
            'and' => 'parent = 0',
        );
        
        $menuChilArray = array(
            'where' => ' status = 1',            
        );

        $data['menus'] = $this->mm->gets($menuArray);
        $data['menus_child'] = $this->mm->gets($menuChilArray);

        $this->load->view('welcome_message', $data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */