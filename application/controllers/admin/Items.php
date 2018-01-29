<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Items extends CI_Controller{
    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('isLogin')){ 
            redirect('Home');    
        } 
        $this->load->database();
        $this->load->model('Item_Model');
        header("Access-Control-Allow-Origin: *");
    }
    
    public function Index(){
        $this->load->view('template/users_head');
        $this->load->view('admin/showitem_view');
        $this->load->view('template/closeTag');
    }
    public function loadItems(){
        $ItemId=$this->input->post('ItemId');
        $data=$this->Item_Model->getItem($ItemId);
        echo json_encode($data);
        exit();
        
    }
    public function addItemProcess(){
        $this->form_validation->set_rules('itemname','Product Name','required');
        $this->form_validation->set_rules('sortCode','Short Code','required');
        $this->form_validation->set_rules('originalPrice','Original Price','required');
        $this->form_validation->set_rules('sellingPrice','Selling Price','required');
        $this->form_validation->set_rules('cgst','Cgst','required');
        $this->form_validation->set_rules('sgst','Sgst','required');
        $this->form_validation->set_rules('hsncode','HSN Code','required');
        if($this->form_validation->run() == FALSE){
            echo 2;
        }else{
//           $hsncode=$this->input->post('hsncode');
           $itemCode=$this->input->post('sortCode');
           $itemId="";
           $rowCount=$this->Item_Model->existsItem($itemCode); 
           if($rowCount>0){
               echo 3;
           }else{
                echo $this->Item_Model->insertItem();           
           }
        }
    }
    
    public function updateItemProcess(){
        $this->form_validation->set_rules('itemname','Product Name','required');
        $this->form_validation->set_rules('sortCode','Short Code','required');
        $this->form_validation->set_rules('originalPrice','Original Price','required');
        $this->form_validation->set_rules('sellingPrice','Selling Price','required');
        $this->form_validation->set_rules('cgst','Cgst','required');
        $this->form_validation->set_rules('sgst','Sgst','required');
        $this->form_validation->set_rules('hsncode','HSN Code','required');
        if($this->form_validation->run() == FALSE){
            echo 2;
        }else{
          echo $this->Item_Model->updateItem();  
        }
    }
    
    public function deleteItemProcess(){
        $data=$this->Item_Model->deleteItem();
        echo $data;
        exit();
    }
}
?>