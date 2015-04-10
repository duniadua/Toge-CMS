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
        
}
