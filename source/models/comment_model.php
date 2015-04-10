<?php

/**
 * Description of Comment
 *
 * @author sahid
 * @link www.terastekno.net
 * 
 */
class Comment_Model extends TG_Model {
    protected static $table = 'tg_comment';

    public function __construct($tableName = self::table) {
        parent::__construct($tableName);
    }

}
