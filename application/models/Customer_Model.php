<?php
class Customer_Model extends CI_Model{

    public function __construct(){
        parent::__construct();
        //$this->load->database();
    }

    public function fetchAll(){
        $result = $this->db->get('customers');
        return $result->result();
    }
}
?>