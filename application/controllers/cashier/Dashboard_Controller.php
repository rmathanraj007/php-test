<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard_Controller extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('isLogin')){ 
            redirect('Home');    
        }         
        $this->load->database();
//        $this->load->model('Login_Model');
        header("Access-Control-Allow-Origin: *");
    }
    public function index()
    {
         $this->load->view('template/dashboard_head');
         $this->load->view('cashier/dashboard_view');
         $this->load->view('template/closeTag');
    }
    
}
?>