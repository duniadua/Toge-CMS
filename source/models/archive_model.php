<?php

include_once FCPATH . 'application/core/TG_Model.php';

/**
 * Description of Account_Model
 *
 * @author sahid
 * @link www.terastekno.net
 * 
 */
class Archive_Model extends TG_Model {

    public function __construct($tableName = 'tg_posts') {
        parent::__construct($tableName);
    }

    public function getByMonthYear() {
        $sql = "SELECT YEAR(createdt) AS tahun, MONTH(createdt) "
                . "AS bulan FROM tg_posts GROUP BY YEAR(createdt) "
                . "AND MONTH(createdt)";

        return $this->db->query($sql)->result();
    }

}
