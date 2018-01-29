<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Item_Model extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    function getItem($ItemId){
        if($ItemId){
            $where="WHERE id=$ItemId";
        }else{
            $where="";
        }
        $query="SELECT * FROM item_management $where";
        $execute=$this->db->query($query);
        return $execute->result();
    }
    
    function insertItem(){
        $itemName=$this->input->post('itemname');
        $itemCode=$this->input->post('sortCode');
        $originalPrice=$this->input->post('originalPrice');
        $sellingPrice=$this->input->post('sellingPrice');
        $cgst=$this->input->post('cgst');
        $sgst=$this->input->post('sgst');
        $hsncode=$this->input->post('hsncode');  
        $createdon=$this->input->post('currentDateTime');
        $createdBy=$this->session->userdata('userId');
        $itemValues=array(
            "item_name"=>$itemName,
            "short_code"=>$itemCode,
            "original_price"=>$originalPrice,
            "selling_price"=>$sellingPrice,
            "cgst"=>$cgst,
            "sgst"=>$sgst,
            "hsn_code"=>$hsncode,
            "created_on"=>$createdon,
            "created_by"=>$createdBy
        );
        return  $this->db->insert('item_management',$itemValues);
    }
    
    function updateItem(){
        $itemName=$this->input->post('itemname');
        $itemCode=$this->input->post('sortCode');
         $originalPrice=$this->input->post('originalPrice');
        $sellingPrice=$this->input->post('sellingPrice');
        $cgst=$this->input->post('cgst');
        $sgst=$this->input->post('sgst');
        $hsncode=$this->input->post('hsncode');
        $modifiedon=$this->input->post('currentDateTime');
        $modifiedBy=$this->session->userdata('userId');
        $itemId=$this->input->post('ItemId');
        $updateItemValues=array(
            "item_name"=>$itemName,
            "short_code"=>$itemCode,
            "original_price"=>$originalPrice,
            "selling_price"=>$sellingPrice,
            "cgst"=>$cgst,
            "sgst"=>$sgst,
            "hsn_code"=>$hsncode,
            "modified_on"=>$modifiedon,
            "modified_by"=>$modifiedBy
        );
        return $this->db->update('item_management',$updateItemValues,array('id' => $itemId));
    }
    
    function deleteItem(){
        $itemId=$this->input->post('itemId');
        if($this->db->delete('item_management',array('id' => $itemId))){
            return true;
        }
    }
    
    function existsItem($itemCode){
        $itemCount=$this->db->get_where('item_management',array('short_code' => $itemCode))->num_rows();
        return $itemCount;
    }
    
    
}
?>