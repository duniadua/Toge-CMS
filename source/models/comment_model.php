<?php
include_once FCPATH.'application/core/TG_Model.php';
/**
 * Description of Comment
 *
 * @author sahid
 * @link www.terastekno.net
 * 
 */
class Comment_Model extends TG_Model {
    
    public function __construct($tableName = 'tg_comment') {
        parent::__construct($tableName);
    }

}
