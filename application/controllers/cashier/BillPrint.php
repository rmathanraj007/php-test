<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class BillPrint extends CI_Controller{
    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('isLogin')){ 
            redirect('Home');    
        }          
        $this->load->database();
        $this->load->model('PrintBill_Model');
        header("Access-Control-Allow-Origin: *");
    }
    public function Index(){
        $filename = time()."_order.pdf";
        $orderId=$this->session->userdata('OrderId');
        $data['billDetails']=$this->PrintBill_Model->getOrderItems($orderId); 
        $html = $this->load->view('cashier/printBill_view',$data,true);
        $this->load->library('M_pdf');
        $this->m_pdf->pdf->WriteHTML($html);
        //download it D save F.
        //$this->m_pdf->pdf->Output("./orderBill/".$filename, "D");
        $this->m_pdf->pdf->Output();
    }    
  
}
?>