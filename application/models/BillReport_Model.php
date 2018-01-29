<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class BillReport_Model extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function getpaymentMode($paymentMode,$startDate,$endDate){         
        if($paymentMode==1){
            $where="paymentMode=1 AND  createdOn BETWEEN '$startDate' AND '$endDate'";
        }
        elseif($paymentMode==2){
             $where="paymentMode=2 AND  createdOn BETWEEN '$startDate' AND '$endDate'";            
        }
        else{
            $where="createdOn BETWEEN '$startDate' AND '$endDate'";
        }
        $query="SELECT  OH.orderHeaderId,OH.totalTaxAmt,OH.totalDiscountAmt,OH.totalItemAmt,OH.grandTotalAmt,date_format(OH.createdOn,'%d-%M-%Y') AS createdOn,PD.orderHeaderId,PD.paymentMode,PD.paymentAmount FROM `pos_order_header` OH INNER JOIN pos_payment_details PD ON OH.orderHeaderId=PD.orderHeaderId WHERE $where";      
        $execute=$this->db->query($query);
        return $execute->result();
    }
}
?>