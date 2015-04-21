<?php

/**
 * Description of AdminController
 *
 * @author sahid
 * @link www.terastekno.net
 * 
 */
use Monolog\Logger;
use Monolog\Handler\BrowserConsoleHandler;

class AdminController extends CI_Controller {
        
    public function __construct() {
        parent::__construct();
        $this->load->model('comment_model', 'comment');
        $this->load->model('page_model', 'page');        
    }

    public function index() {
        $log = new Logger('login');
        $log->pushHandler(new BrowserConsoleHandler(Logger::DEBUG));
        $log->addDebug('Login Success');               
        $cekLogin = $this->authorization->cekAuthorization();        
        
        if ($cekLogin):
            $comentParam = ['where' => 'status = 1', 'limit' => 10, 'order' => 'ID DESC'];
            $pageParam = ['where' => 'status = 1', 'limit' => 1];

            $data['comment_list'] = $this->comment->gets($comentParam);
            $data['page_list'] = $this->page->gets($pageParam);
            $data['page_count'] = $this->page->gets();
            $data['comment_count'] = $this->comment->gets();

            $this->load->view('backend_header');
            $this->load->view('backend', $data);
            $this->load->view('backend_footer');
        else:
            redirect(Authorization::redirectLogOut());
        endif;
    }

}
