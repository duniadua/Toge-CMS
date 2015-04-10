<?php

include_once FCPATH . 'application/core/TG_Model.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of images_model
 *
 * @author sahid
 * @link www.terastekno.net
 * 
 */
class Images_Model extends TG_Model {

    public function __construct($tableName = 'tg_images') {
        parent::__construct($tableName);
    }

    public function insertImage($data) {
        $this->db->set('filename', $data); 
        $this->db->insert($this->tableName);
    }

}
