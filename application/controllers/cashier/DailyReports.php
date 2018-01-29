<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class DailyReports extends CI_Controller{
    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('isLogin')){ 
            redirect('Home');    
        }         
        $this->load->database();
        header("Access-Control-Allow-Origin: *");
    }
     public function Index(){
       $this->load->view('template/sales_head');
       $this->load->view('cashier/daily_Report');
       $this->load->view('template/closeTag');
    }
     public function loadSales(){           
       $data=array();       
       echo json_encode($data);
       exit(); 
    }
}
?>
