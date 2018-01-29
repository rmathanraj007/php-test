<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tables_Controller extends CI_Controller{
    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('isLogin')){ 
            redirect('Home');    
        }          
        $this->load->database();
        $this->load->model('CashierTableView_Model');
        header("Access-Control-Allow-Origin: *");
    }
    
    public function Index(){
       $data=$this->CashierTableView_Model->getTables(); 
       $dataArr['viewTables'] = json_decode(json_encode($data), true);
       $this->load->view('template/users_head');
       $this->load->view('cashier/tables_view',$dataArr);
       $this->load->view('template/closeTag');
    }   
    
    public function addTableNumber(){
        $tableName=$_POST['tableNumber'];
        $this->session->unset_userdata('orderTable');
        $this->session->set_userdata("orderTable",$tableName);
        echo 1;            
    }
    

}
?>