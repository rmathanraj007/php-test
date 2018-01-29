<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login_Model extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    function userData($username){
        return $this->db->get_where('users',array('username'=>$username))->row();
    }    
    function checkUser(){
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $userData=$this->userData($username);
        if(!empty($userData)){
            if($userData->username == $username && $userData->password == md5($password)){
                return true;
            }else{
                return false;   
            }
        }else{
            return false;
        }
    }
}

?>