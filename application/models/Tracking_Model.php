<?php
class Tracking_Model extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function search($key){
        $this->db->where('abw_code',$key);
        $result = $this->db->get('orders');

        return $result->result();
    }
}
?>