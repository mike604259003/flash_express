<?php
class Tracking extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Tracking_Model','track');
		header('Access-Control-Allow-Origin: *');
		header("Access-Control-Allow-Methods:GET, POST ,OPTIONS, PUT, DELETE");
    }
    
    public function search(){
        $keyword = "";
        
        if(isset($_GET['abw_code'])){
            $keyword = $_GET['abw_code'];
        }

        $result = $this->track->search($keyword);
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($result));
    }
}
?>