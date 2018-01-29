<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Addinvoice extends CI_Controller{
    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('isLogin')){ 
            redirect('Home');    
        } 
        $this->load->database();
        $this->load->model('Addinvoice_Model');
        header("Access-Control-Allow-Origin: *");
    }
    
    public function Index(){
        $this->load->view('template/users_head');
        $this->load->view('admin/showaddinvoice_view');
        $this->load->view('template/closeTag');
    }
    public function loadFromAddress(){
        $data=$this->Addinvoice_Model->getFromAddress();
        echo json_encode($data);
        exit();
    }
    public function loadPriceDetails(){
        $ShortCode=$this->input->post('ShortCode');
        $data=$this->Addinvoice_Model->getLoadPricingDetails($ShortCode);
        echo json_encode($data);
        exit();
    }
    public function addInvoiceProcess(){
        $this->form_validation->set_rules('fromAddress','From Address','required');
        $this->form_validation->set_rules('toname','To Name','required');
        $this->form_validation->set_rules('toaddress','To Address','required');
        $this->form_validation->set_rules('tomobile','To Mobile Number','required');
//        $this->form_validation->set_rules('shortCode','S.Code','required');
//        $this->form_validation->set_rules('qty','Qty','required');
//        $this->form_validation->set_rules('total','Total','required');
        $this->form_validation->set_rules('totalAmount','Sub Total','required');       
        if($this->form_validation->run() == FALSE){
            echo 2;
        }
        else{
            echo $this->Addinvoice_Model->insertInvoice();
        }
    }
    
}
?>