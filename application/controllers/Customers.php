<?php
class Customers extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Customer_Model','customer');
    }

    public function fetchAll(){
        $result = $this->customer->fetchAll();
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($result));
    }

}
?>