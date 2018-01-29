<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Users_Model extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function getUsers($userId){  
        if($userId){
        $where="U.id=$userId AND U.id=UP.userid AND U.id<>1";    
        }else{
        $where="U.id=UP.userid AND U.id<>1";       
        }
        $query="SELECT U.*,U.id AS userid,UP.* FROM users U INNER JOIN user_password UP WHERE $where";       
        $execute=$this->db->query($query);
        return $execute->result();
    }
   
    
    public function insertUsers(){
        $name=$this->input->post('name');        
        $email=$this->input->post('email');
        $mobile=$this->input->post('mobile');        
        $password=$this->input->post('password');
        $created0n=$this->input->post('currentDateTime');
        $createdBy=$this->session->userdata('userId');        
        $values=array(
            "username"=>$email,
            "name"=>$name,
            "email"=>$email,
            "mobile"=>$mobile,
            "password"=>md5($password),
            "created_on"=>$created0n,
            "created_by"=>$createdBy
        );        
         $this->db->insert('users',$values);
         $user_id = $this->db->insert_id();
          $passwordRow_Details=array(
            'userid'=>$user_id,
            'password'=>$password
        );        
        return $this->db->insert('user_password',$passwordRow_Details);
        
    } 
    
    function updateUsers(){      
        $name=$this->input->post('name');        
        $email=$this->input->post('email');
        $mobile=$this->input->post('mobile');        
        $password=$this->input->post('password');
        $created0n=$this->input->post('currentDateTime');
        $createdBy=$this->session->userdata('userId'); 
        $userId=$this->input->post('userId');
         $row_details=array(
            "username"=>$email,
            "name"=>$name,
            "email"=>$email,
            "mobile"=>$mobile,
            "password"=>md5($password),
            "modified_on"=>$created0n,
            "modified_by"=>$createdBy
        );        
         $this->db->update('users',$row_details,array('id' => $userId));
         
         $this->db->delete('user_password',array('userid' => $userId));
         $passwordRow_Details=array(
            'userid'=>$userId,
            'password'=>$password
        );
        return $this->db->insert('user_password',$passwordRow_Details);
    }    
 
    
     function deleteUser(){
        $userId=$this->input->post('userId');
        if( $this->db->delete('users',array('id' => $userId))){
            if($this->db->delete('user_password',array('userid'=>$userId))){
            return true;
            }
        }
    }
    
    function existsUser($userId,$email)
    {
        if($userId){
            $userCount = $this->db->get_where('users',array('id !='=>$userId,'email' => $email))->num_rows();
        }else{
            $userCount = $this->db->get_where('users',array('email' => $email))->num_rows();
        }       
        return $userCount;
    }    
}
?>
