<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends CI_Controller{
    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('isLogin')){ 
            redirect('Home');    
        } 
        $this->load->database();
        $this->load->model('Users_Model');
        header("Access-Control-Allow-Origin: *");
    }
    
    public function Index(){
        $this->load->view('template/users_head');
        $this->load->view('admin/showuser_view');
        $this->load->view('template/closeTag');
    }
    
    public function loadUsers(){
        $userId=$this->input->post('userId');          
        $data=$this->Users_Model->getUsers($userId);
        echo json_encode($data);
        exit(); 
    }
    
    public function addUserProcess(){
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('mobile','Phone','required');        
        $this->form_validation->set_rules('password','Password','required');    
        if($this->form_validation->run() == FALSE){
            echo 2;
        }else{
           $email=$this->input->post('email');
           $userId="";
           $rowCount=$this->Users_Model->existsUser($userId,$email); 
           if($rowCount>0){
               echo 3;
           }else{
                echo $this->Users_Model->insertUsers();           
           }
        }
    }
    public function updateUserProcess(){
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('mobile','Phone','required');        
        $this->form_validation->set_rules('password','Password','required');
        if($this->form_validation->run() == FALSE){
           echo 2;
        }else{
           $username=$this->input->post('username'); 
           $userId=$this->input->post('userId');         
           $rowCount=$this->Users_Model->existsUser($username,$userId);            
           if($rowCount>0){
               echo 3;
           }else{
                echo $this->Users_Model->updateUsers();           
           }            
        }        
    }
    
  public function deleteUserProcess(){
       $data=$this->Users_Model->deleteUser();
        echo $data;
        exit();
  }
   
}
?>