<?php
include_once FCPATH.'application/core/TG_Model.php';
/**
 * Description of Account_Model
 *
 * @author sahid
 * @link www.terastekno.net
 * 
 */
class Account_Model extends TG_Model {
    
    public function __construct($tableName = 'tg_users' ) {
        parent::__construct($tableName);
    }
    
    public function insertAccount(){
        $salt = mt_rand(10, 100);
        $data = [
            'username' => $this->input->post('username'),
            'password' => crypt($this->input->post('password'),$salt),
            'email' => $this->input->post('email'),
            'registered' => date('Y-m-d H:i:s'),
            'status' => $this->input->post('status')
        ];
        
        $this->db->insert($this->tableName, $data);
    }
    
}
