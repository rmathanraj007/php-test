<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Addinvoice_Model extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    function getFromAddress(){
        $query="SELECT * FROM address";       
        $execute=$this->db->query($query);
        return $execute->result();
    }
    function getLoadPricingDetails($ShortCode){
        $where="WHERE short_code='$ShortCode'";
        $query="SELECT * FROM item_management $where";
        $execute=$this->db->query($query);
        return $execute->result();
    }
    function insertInvoice(){        
        $fromAddress=$this->input->post('fromAddress');
        $toname=$this->input->post('toname');
        $toaddress=$this->input->post('toaddress');
        $tomobile=$this->input->post('tomobile');
        $shortCode=$this->input->post('shortCode');
        $product=$this->input->post('product');
        $price=$this->input->post('price');
        $cgst=$this->input->post('cgst');
        $sgst=$this->input->post('sgst');
        $qty=$this->input->post('qty');
        $hcode=$this->input->post('hcode');
        $total=$this->input->post('total');
        $totalAmount=$this->input->post('totalAmount');
        $discount=$this->input->post('discount');
        $grandTotal=$this->input->post('grandTotal');
        $advanceamount=$this->input->post('advanceamount');
        $balance=$this->input->post('balance');
        $netamount=$this->input->post('netamount');
        $createdDate=$this->input->post('currentDateTime');
        $userId=$this->session->userdata('userId');
        $length=count($this->input->post('shortCode'));
        
       $invoiceQuery="SELECT invoice_number FROM invoice_number ORDER BY invoice_id DESC LIMIT 0, 1";       
       $execute=$this->db->query($invoiceQuery);
       $invoiceResult=$execute->result(); 
       foreach ($invoiceResult as $invoiceResultValue){
           $InvoiceNumber=$invoiceResultValue->invoice_number;
       }       
       $InvoiceNumberValues=$InvoiceNumber+1;       
       $InvoiceRow=array(
           "invoice_number"=>$InvoiceNumberValues
       );      
       
       $this->db->insert('invoice_number',$InvoiceRow);
       
       $invoiceHeaderValues=array(
           "invoice_number"=>$InvoiceNumberValues,
           "from_address_id"=>$fromAddress,
           "to_name"=>$toname,
           "to_address"=>$toaddress,
           "to_mobile"=>$tomobile,
           "sub_total"=>$totalAmount,
           "discount"=>$discount,
           "grand_total"=>$grandTotal,
           "advance_amount"=>$advanceamount,
           "balance_amount"=>$balance,
           "net_amount"=>$netamount,
           "created_on"=>$createdDate,
           "created_by"=>$userId
       );
       $this->db->insert('invoice_header',$invoiceHeaderValues); 
       $invoiceHeaderId=$this->db->insert_id();
       
       
               for($i=0;$i<$length;$i++){
            $ProductValues=array(
                "invoice_header_id"=>$invoiceHeaderId,
                "shortcode"=>$shortCode[$i],
                "product_name	"=>$product[$i],
                "price"=>$price[$i],
                "cgst"=>$cgst[$i],
                "sgst"=>$sgst[$i],
                "qty"=>$qty[$i],
                "hcode"=>$hcode[$i],
                "total_amount"=>$total[$i]
            );
         
          return  $this->db->insert('invoice_product_details',$ProductValues); 
        }
    }
    

}
?>