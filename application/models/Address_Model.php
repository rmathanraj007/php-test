<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Address_Model extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function loadAddress($addressId){
        if($addressId){
            $where="WHERE id=$addressId";
        }else{
            $where="";
        }
        $query="SELECT * FROM   address $where";
        $execute=$this->db->query($query);
        return $execute->result();
    }
    
    function insertAddress(){
        $addressname=$this->input->post('addressname');
        $address1=$this->input->post('address1');
        $address2=$this->input->post('address2');
        $address3=$this->input->post('address3');
        $pincode=$this->input->post('pincode');
        $mobile=$this->input->post('mobile');
        $currentDateTime=$this->input->post('currentDateTime');
        $createdBy=$this->session->userdata('userId'); 
        $values=array(
            "address_name"=>$addressname,
            "address1"=>$address1,
            "address2"=>$address2,
            "address3"=>$address3,
            "pincode"=>$pincode,
            "mobile_no"=>$mobile,
            "created_on"=>$currentDateTime,
            "created_by"=>$createdBy
        );
         return $this->db->insert('address',$values);
    }
    
    function updateAddress(){
        $addressId=$this->input->post('addressId');
        $addressname=$this->input->post('addressname');
        $address1=$this->input->post('address1');
        $address2=$this->input->post('address2');
        $address3=$this->input->post('address3');
        $pincode=$this->input->post('pincode');
        $mobile=$this->input->post('mobile');
        $modifyDateTime=$this->input->post('currentDateTime');
        $createdBy=$this->session->userdata('userId'); 
        $updatevalues=array(
            "address_name"=>$addressname,
            "address1"=>$address1,
            "address2"=>$address2,
            "address3"=>$address3,
            "pincode"=>$pincode,
            "mobile_no"=>$mobile,
            "modified_on"=>$modifyDateTime,
            "modified_by"=>$createdBy
        );
         return $this->db->update('address',$updatevalues,array('id' => $addressId));
    }
    
    function deleteAddress(){
         $addressId=$this->input->post('addressId');
        if($this->db->delete('address',array('id' => $addressId))){
            return true;
        }
    }
    
    function existsAddress($addressId,$addressname){        
        if($addressId){
            $addressCount = $this->db->get_where('address',array('id !='=>$addressId,'address_name' => $addressname))->num_rows();
        }else{
            $addressCount = $this->db->get_where('address',array('address_name' => $addressname))->num_rows();
        }       
        return $addressCount;
    }
}
?>