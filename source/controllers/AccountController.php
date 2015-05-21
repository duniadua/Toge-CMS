<?php
/**
 * Description of AccountController
 *
 * @author sahid
 * @link www.terastekno.net
 * 
 */
use Monolog\Logger;
use Monolog\Handler\BrowserConsoleHandler;
class AccountController extends CI_Controller {

    //put your code here
    private $viewAccount = 'account';
    private $listAccount = 'listaccount';
    private $log;

    public function __construct() {
        parent::__construct();
        $this->load->model('Account_Model','account');
        $this->log = new Logger('password');
        $this->log->pushHandler(new BrowserConsoleHandler(Logger::DEBUG));
    }

    public function index() {                        
        if($this->input->post()){
            $this->account->insertAccount();
            redirect('account/list');
        }
                 
        $this->load->view('backend_header');
        $this->load->view($this->viewAccount);
        $this->load->view('backend_footer');
    }
    
    public function listAccount(){
        $data['listAccount']= $this->account->gets();
        
        $this->load->view('backend_header');
        $this->load->view($this->listAccount, $data);
        $this->load->view('backend_footer');
    }
    
    public function update($id){
        $param = array(
            'where' => 'id ='.$id,
        );
        
        $data['rowAcc']= $this->account->get($param);
        if($this->input->post()){                        
            $this->account->update('id', $id);
            redirect('account/list');
        }
        
        $this->load->view('backend_header');
        $this->load->view($this->viewAccount, $data);
        $this->load->view('backend_footer');
    }
    
    public function delete($id){                
        $this->account->delete($id);
        redirect('account/list');
    }

}
