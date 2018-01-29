<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class UserProfile extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('isLogin')){ 
            redirect('Home');    
        }         
        $this->load->database();
        $this->load->model('UserProfile_Model');
        header("Access-Control-Allow-Origin: *");
    }
    public function index()
    {
         $this->load->view('template/dashboard_head');
         $this->load->view('cashier/showprofile_view');
         $this->load->view('template/closeTag');
    }
    public function changePassword(){ 
        $this->form_validation->set_rules('oldPassword','Old Password','required');
        $this->form_validation->set_rules('newPassword','New Password','required');
        $this->form_validation->set_rules('cPassword','Confirm Password','required');
        if($this->UserProfile_Model->changeoldPassword()){
            echo 1;
        }else{
            echo 2;
        }
    }
    
}
?>