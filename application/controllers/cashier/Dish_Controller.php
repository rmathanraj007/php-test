<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dish_Controller extends CI_Controller{
    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('isLogin')){ 
            redirect('Home');    
        }          
        $this->load->database();
        $this->load->model('CashierDishView_Model');
        header("Access-Control-Allow-Origin: *");
    }
    public function Index(){
        $this->load->view('template/head_dish');
        $this->load->view('cashier/dish_view');
        $this->load->view('template/closeTag');         
    }    
    public function getCategoryProcess(){
        $categoryId= $this->input->post('categoryId');
        $categoryName= $this->input->post('categoryName');
        $data=array();
        $CategoryData=$this->CashierDishView_Model->getCategory($categoryId,$categoryName);        
        $categories=json_decode(json_encode($CategoryData), true);
         foreach($categories as $categorie){            
            $menuItemCountData=$this->CashierDishView_Model->getItemCount($categorie['id']); 
            $menuItemCounts=json_decode(json_encode($menuItemCountData), true);
            foreach($menuItemCounts as $menuItemCount){
                $categorie['itemCount']=$menuItemCount['itemCount'];
            }
            $data[]=$categorie;
        }        
        echo json_encode($data,true);
        exit();        
    }    
    public function getItemProcess(){
        $itemId= $this->input->post('itemId');
        $itemName= $this->input->post('itemName');
        $data=$this->CashierDishView_Model->getItemsBasedCategory($itemId,$itemName);        
        echo json_encode($data,true);
        exit();        
    }
    
    public function addItemProcess(){
        $itemId= $this->input->post('itemId');        
        $data=$this->CashierDishView_Model->getItems($itemId);  
        print_r(json_encode($data,true));
        die;
        $this->session->unset_userdata('orderItems');
        if($this->session->set_userdata("orderItems",$tableName)){
            echo 1;
        }else{
            echo 0;
        }   
   
    }
    
    public function insertAddItemProcess(){
        $currentDateTime= date('d-M-Y - h:i A', strtotime($this->input->post('currentDateTime')));
        $data=$this->CashierDishView_Model->insertAddItem(); 
        $this->session->unset_userdata('OrderId');
        $this->session->unset_userdata('currentDateTime');
        $this->session->set_userdata("currentDateTime",$currentDateTime);
        if($this->session->set_userdata("OrderId",$data)){
            echo $data;
        }else{
            echo 0;
        } 
        exit();          
    }
    
    public function verifyCouponCodeProcess(){
        $data=$this->CashierDishView_Model->verifyCouponCode();
        echo json_encode($data,true);
        exit();      
    }
    public function loadOrderDetails(){
        $currentDate=date('Y-m-d',strtotime($this->input->post('currentDate')));        
        $data=$this->CashierDishView_Model->getOrderDetails($currentDate);       
        echo json_encode($data);
        exit();
        
    }
}
?>