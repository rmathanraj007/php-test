<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class InvoiceList extends CI_Controller{
    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('isLogin')){ 
            redirect('Home');    
        } 
        $this->load->database();
        $this->load->model('InvoiceList_Model');
        header("Access-Control-Allow-Origin: *");
    }
    
    public function Index(){
        $this->load->view('template/users_head');
        $this->load->view('admin/showinvoicelist_view');
        $this->load->view('template/closeTag');
    }
    public function loadInvoice(){
        $data=$this->InvoiceList_Model->getinvoice();
        echo json_encode($data);
        exit();
    }
}
?>