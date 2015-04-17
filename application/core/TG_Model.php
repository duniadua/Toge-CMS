<?php

/**
 * Description of TG_Model
 *
 * @author sahid
 * @link www.terastekno.net
 * 
 */
include_once FCPATH . 'system/core/Model.php';

class TG_Model extends CI_Model {

    public $tableName = "";
    public $field = "";
    public $param = array();

    public function __construct($tableName = '') {
        parent::__construct();
        $this->tableName = $tableName;
    }

    /**
     * Description of Gets Function
     *
     <code>
     * Returning Array Object from table
     * Based on where, and, order by, limit
     </code>
     * @access Public
     * @return Array Object 
     */
    public function gets($param = array()) {
        $sql = "SELECT * FROM " . $this->tableName;

        if (isset($param["where"]))
            $sql .= " WHERE " . $param["where"];
        if (isset($param["and"]))
            $sql .= " AND " . $param["and"];
        if (isset($param["order"]))
            $sql .= " ORDER BY " . $param["order"];
        if (isset($param["limit"]))
            $sql .= " LIMIT " . $param["limit"];

        return $this->db->query($sql)->result();
    }

    /**
     * Description of Get Function
     *
     <code>
     * Returning object from table
     * Based on where, and, order by, limit
     * Query by used as single row
     </code>
     * @access Public
     * @return Object
     * 
     */
    public function get($param = array()) {
        $sql = "SELECT * FROM " . $this->tableName;

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

    /**
     * Description of Insert Function
     *
     <code>     
     * Insert based on tables declared on class
     * Field on form must same with table field    
     </code>
     * @access Public
     * @return	Void
     */
    public function insert() {
        $data = array();
        $post = $this->input->post();
        $fields = $this->db->list_fields($this->tableName);
//        $param = $this->input->post('ld_type');

        foreach ($fields as $myfield):
            if (isset($post[$myfield])):
                $data[$myfield] = $post[$myfield];
            endif;

            if ($myfield == 'ip_address'):
                $data[$myfield] = $this->input->ip_address();
            endif;

            if ($myfield == 'createdt'):
                $data[$myfield] = date('Y-m-d H:i:s');
            endif;

            if ($myfield == 'updatedt'):
                $data[$myfield] = date('Y-m-d H:i:s');
            endif;

            if ($myfield == 'createnm'):
                $data[$myfield] = 'CREATOR';
            endif;
        endforeach;

        $this->db->insert($this->tableName, $data);
    }

    /**
     * 
     *
      <code>
      $this->model_name->update($field, $param)
      </code>
     *
     * @access	public
     * @return	array
     */
    public function update($field, $param) {
        $data = array();
        $post = $this->input->post();
        $fields = $this->db->list_fields($this->tableName);

        foreach ($fields as $myfield):
            if (isset($post[$myfield])):
                $data[$myfield] = $post[$myfield];
            endif;

            if ($myfield == 'ip_address'):
                $data[$myfield] = $this->input->ip_address();
            endif;

            if ($myfield == 'createdt'):
                $data[$myfield] = date('Y-m-d H:i:s');
            endif;

            if ($myfield == 'updatedt'):
                $data[$myfield] = date('Y-m-d H:i:s');
            endif;
        endforeach;

        $this->db->where($field, $param);
        $this->db->update($this->tableName, $data);
    }

    /**
     * 
     *
      <code>
     * Delete Record based on key id      
     * $this->db->delete($this->tableName, array('id' => $id));
      </code>
     *
     * @access	public
     * @return	void
     */
    public function delete($id) {
        $this->db->delete($this->tableName, array('id' => $id));
    }

}
