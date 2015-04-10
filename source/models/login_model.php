<?php

include_once FCPATH . 'application/core/TG_Model.php';

/**
 * Description of login_model
 *
 * @author sahid
 * @link www.terastekno.net
 * 
 */
class login_model extends TG_Model {

    public function __construct($tableName = 'tg_users') {
        parent::__construct($tableName);
    }

    public function cekUser($param = array()) {
        $sql = "SELECT COUNT(*) as valLogin FROM " . $this->tableName;

        if (isset($param["where"]))
            $sql .= " WHERE " . $param["where"];
        if (isset($param["and"]))
            $sql .= " AND " . $param["and"];
        if (isset($param["order"]))
            $sql .= " ORDER BY " . $param["order"];
        if (isset($param["limit"]))
            $sql .= " LIMIT " . $param["limit"];

        return $this->db->query($sql)->row();
    }

}
