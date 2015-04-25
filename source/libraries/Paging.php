<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Paging
 *
 * @author sahid
 * @link www.terastekno.net
 * 
 */
class Paging extends CI_Pagination{
    
    public function __construct($params = array()) {
        parent::__construct($params);
    }
    
    public static function setPageUrl($url=""){
        return $url;
    } 
    
    public function initialize($params = array()) {
        parent::initialize($params);
    }
}
