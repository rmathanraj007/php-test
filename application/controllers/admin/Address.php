<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Address extends CI_Controller{
    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('isLogin')){ 
            redirect('Home');    
        } 
        $this->load->database();
        $this->load->model('Address_Model');
        header("Access-Control-Allow-Origin: *");
    }
    
    public function Index(){
        $this->load->view('template/users_head');
        $this->load->view('admin/showaddress_view');
        $this->load->view('template/closeTag');
    }
    public function loadAddress(){
        $addressId=$this->input->post('addressId');
        $data=$this->Address_Model->loadAddress($addressId);
        echo json_encode($data);
        exit();
    }

    public function addAddressProcess(){
        $this->form_validation->set_rules('addressname','Address Name','required');
        $this->form_validation->set_rules('address1','Address1','required');
        $this->form_validation->set_rules('address2','Address2','required');
        $this->form_validation->set_rules('address3','Address3','required');
        $this->form_validation->set_rules('pincode','Pincode','required');
        $this->form_validation->set_rules('mobile','Mobile Number','required');
        if($this->form_validation->run() == FALSE){
            echo 2;
        }else{
           $addressname=$this->input->post('addressname');
           $addressId="";
           $rowCount=$this->Address_Model->existsAddress($addressId,$addressname); 
           if($rowCount>0){
               echo 3;
           }else{
                echo $this->Address_Model->insertAddress();           
           }
        }
    }
    
    public function updateAddressProcess(){
        $this->form_validation->set_rules('addressname','Address Name','required');
        $this->form_validation->set_rules('address1','Address1','required');
        $this->form_validation->set_rules('address2','Address2','required');
        $this->form_validation->set_rules('address3','Address3','required');
        $this->form_validation->set_rules('pincode','Pincode','required');
        $this->form_validation->set_rules('mobile','Mobile Number','required');
        if($this->form_validation->run() ==  FALSE){
            echo 2;
        }else{
           $addressname=$this->input->post('addressname');
           $addressId=$this->input->post('addressId');
           $rowCount=$this->Address_Model->existsAddress($addressId,$addressname); 
           if($rowCount>0){
               echo 3;
           }else{
                echo $this->Address_Model->updateAddress();           
           }  
        }
    }
    public function  deleteAddressProcess(){
        $data=$this->Address_Model->deleteAddress();
        echo $data;
        exit();
    }
}
?>