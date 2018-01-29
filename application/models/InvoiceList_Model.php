<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class InvoiceList_Model extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    function getinvoice(){
        $query="SELECT * FROM invoice_header";
        $execute=$this->db->query($query);
        return $execute->result();
    }
}
?>