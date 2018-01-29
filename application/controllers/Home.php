<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('Login_Model');
        header("Access-Control-Allow-Origin: *");
    }
    
    public function index()
    {
       $this->load->view('login_view');
    }
    
    public function loginProcess(){
        if($this->Login_Model->checkUser() == FALSE){
            echo 0;
        }else{
            $username= $this->input->post('username');
            $userData=$this->Login_Model->userData($username); 
            $session_data=array(
                "userId"=>$userData->id,
                "name"=>$userData->name,
                "isLogin"=>TRUE
            );
            $this->session->set_userdata($session_data);
            if($userData->id == 1){
                echo 1;            
            }else{
                echo 0;  
            }
        }     
    }
    public function logoutProccess(){
     $this->session->sess_destroy();
        redirect(base_url('home'),"refresh");
    }
    

}
