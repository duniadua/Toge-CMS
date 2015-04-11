<?php
include_once FCPATH.'application/core/TG_Model.php';
/**
 * Description of page_model
 *
 * @author sahid
 * @link www.terastekno.net
 * 
 */
class Category_Model extends TG_Model {
    //put your code here
    public function __construct($tableName = 'tg_post_category') {
        parent::__construct($tableName);
    }
}
