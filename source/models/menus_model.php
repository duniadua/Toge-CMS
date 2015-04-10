<?php
include_once FCPATH.'application/core/TG_Model.php';
/**
 * Description of Account_Model
 *
 * @author sahid
 * @link www.terastekno.net
 * 
 */
class Menus_Model extends TG_Model {
    
    public function __construct($tableName = 'tg_menus' ) {
        parent::__construct($tableName);
    }
        
}
