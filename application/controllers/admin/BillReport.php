<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class BillReport extends CI_Controller{
    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('isLogin')){ 
            redirect('Home');    
        }
         $this->load->database();
         $this->load->model('BillReport_Model');
         header("Access-Control-Allow-Origin: *");
    }
      public function Index(){
       $this->load->view('template/sales_head');
       $this->load->view('admin/showbillreport_view');
       $this->load->view('template/closeTag');
    }
    public function loadBillReport(){
        $paymentMode=$this->input->post('paymentmode');        
        $billDate=$this->input->post('billdate');
        $splitDate=explode('-',$billDate);
        $startDate=date('Y-m-d',strtotime($splitDate[0]));       
        $endDate=date('Y-m-d',strtotime($splitDate[1]."+1 days"));
        $data=$this->BillReport_Model->getpaymentMode($paymentMode,$startDate,$endDate);         
        echo json_encode($data);
        exit();
    }
}
?>