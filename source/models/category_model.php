<?php
include_once FCPATH.'application/core/TG_Model.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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
