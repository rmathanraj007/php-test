<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class PrintBill_Model extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function getOrderItems($orderId){        
        $amountDetails=array();
        $itemDetails=array();
        $quantityDetails=array();
        $paymentDetails=array();
        $dateTimeDetails=array();
        $where="WHERE OH.orderHeaderId=$orderId";
        $query="SELECT OH.totalItemAmt as grossAmt,OH.totalDiscountAmt AS discount,OH.totalTaxAmt AS tax,OH.grandTotalAmt AS total,CONCAT(PU.first_name,' ',PU.last_name) AS cashier FROM pos_order_header AS OH INNER JOIN pos_payment_details As OP ON OH.orderHeaderId=OP.orderHeaderId INNER JOIN pos_users AS PU ON OH.OrderBy=PU.id $where";
        $result1=$this->db->query($query);
        $amountDetails['amountDetails']= json_decode(json_encode($result1->result()),true);
        
        $itemInfoQuery="SELECT PM.menu_name,PO.quantity,PO.unitPrice,po.extendedPrice FROM pos_order_details AS PO INNER JOIN pos_menumanagement AS PM on PO.itemId=PM.id WHERE PO.orderHeaderId=$orderId";
        $itemInfoResult=$this->db->query($itemInfoQuery);
        $itemDetails['itemDetails']=json_decode(json_encode($itemInfoResult->result()),true);
        
        $quantityInfoQuery="SELECT COUNT(orderDetailId) as todalIteams,SUM(quantity) as totalQty FROM `pos_order_details` WHERE orderHeaderId=$orderId";  
        $quantityInfoResult=$this->db->query($quantityInfoQuery);
        $quantityDetails['quantityDetails']=json_decode(json_encode($quantityInfoResult->result()),true);
        
        $paymentDetailQuery="SELECT C.fullname As customerName,PD.paymentMode FROM `pos_payment_details` AS PD INNER JOIN customer_basicinfo C ON PD.customerId=C.id WHERE PD.orderHeaderId=$orderId";
        $paymentInfoResult=$this->db->query($paymentDetailQuery);
        $paymentDetails['paymentDetails']=json_decode(json_encode($paymentInfoResult->result()),true);
        $dateTimeDetails['dateTimeDetails']=$this->session->userdata('currentDateTime');
        
         
        $billInfo=array($amountDetails,$itemDetails,$quantityDetails,$paymentDetails,$dateTimeDetails);
        return $billInfo;
    }  
}

?>
