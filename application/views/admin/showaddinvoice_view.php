<link href="<?php echo asset_url();?>customCSS/sweetalert.min.css" rel="stylesheet" type="text/css"/>
<body class="hold-transition skin-blue sidebar-mini">
    <input type="hidden" id="base_url" value="<?php echo base_url();?>">
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>IMAT</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>IMAT</b> Invoice</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo asset_url();?>dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">GK Admin</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo asset_url();?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  GK Admin - Admin
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url()?>admin/changePassword" class="btn btn-default btn-flat">Change Password</a>
                </div>
                <div class="pull-right">
                    <a href="<?php echo base_url()?>home/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo asset_url();?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>IMAT</p>
          <a href="#"><i class="fa fa-circle text-success"></i>Administrator</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">GK ADMIN MENUS</li>        
        <li class="treeview">
          <a href="<?php echo base_url()?>admin/Users">
            <i class="fa fa-user"></i> <span>User Master</span>
          </a>
        </li>  
        <li class="treeview">
          <a href="<?php echo base_url()?>admin/Items">
            <i class="fa fa-table"></i> <span>Product Master</span>
          </a>
        </li> 
        
        <li class="treeview">
          <a href="<?php echo base_url()?>admin/Address">
            <i class="fa fa-map-marker"></i> <span>Address Master</span>
          </a>
        </li> 
        
<!--        <li class="treeview">
          <a href="<?php echo base_url()?>admin/tables">
            <i class="fa fa-table"></i> <span>Add Table</span>
          </a>
        </li>  -->
<!--        <li class="treeview">
          <a href="<?php echo base_url()?>admin/unit">
            <i class="fa fa-balance-scale"></i> <span>Add Unit</span>
          </a>
        </li>-->
        
<!--        <li class="treeview">
          <a href="<?php echo base_url()?>admin/tax">
            <i class="fa fa-bars"></i> <span>Tax Setting</span>
          </a>
        </li>-->
        <li class="active treeview">
          <a href="#">
            <i class="fa  fa-money"></i> <span>Invoice Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li class="active treeview"><a href="<?php echo base_url()?>admin/addinvoice"><i class="fa fa-circle-o"></i> <span>Add Invoice</span></a></li>
            <li class="treeview"><a href="<?php echo base_url()?>admin/InvoiceList"><i class="fa fa-circle-o"></i> <span>Invoice Details</span></a></li>   
            <!--<li class="treeview"><a href="<?php echo base_url()?>admin/menumanagement"><i class="fa fa-circle-o"></i> <span>Add Menu management</span></a></li>-->
          </ul>
        </li>    
<!--        <li class="treeview">
          <a href="#">
             <i class="fa fa-gift"></i> <span>Product Offers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li class="">
              <a href="#"><i class="fa fa-circle-o"></i> Coupon Settings
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu" style="display: none;">
                <li class="treeview"><a href="<?php echo base_url()?>admin/couponType"><i class="fa fa-circle-o"></i> <span>Add Coupons Type</span></a></li>  
                <li class="treeview"><a href="<?php echo base_url()?>admin/coupons"><i class="fa fa-circle-o"></i> <span>Add Coupons</span></a></li>
               </ul>
            </li>
            <li class="">
              <a href="#"><i class="fa fa-circle-o"></i> Discount Settings
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu" style="display: none;">
                <li class="treeview"><a href="<?php echo base_url()?>admin/discountType"><i class="fa fa-circle-o"></i> <span>Add Discount Type</span></a></li>  
                <li class="treeview"><a href="<?php echo base_url()?>admin/discount"><i class="fa fa-circle-o"></i> <span>Add Discount</span></a></li>
               </ul>
            </li>            
           
          </ul>
        </li>        -->
        
<!--        <li class="treeview">
          <a href="#">
            <i class="fa fa-map-marker"></i> <span>Location</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li><a href="<?php echo base_url()?>admin/country"><i class="fa fa-circle-o"></i>Country</a></li>
            <li class=""><a href="<?php echo base_url()?>admin/state"><i class="fa fa-circle-o"></i>State</a></li>
            <li class=""><a href="<?php echo base_url()?>admin/city"><i class="fa fa-circle-o"></i>City</a></li>
          </ul>
        </li>-->
        
<!--        <li class="treeview">
          <a href="<?php echo base_url()?>admin/category">
            <i class="fa fa-bars"></i> <span>Add Category</span>
          </a>
        </li>-->
        
<!--        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder-open"></i> <span>Report</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li><a href="<?php echo base_url()?>admin/SalesReport"><i class="fa fa-circle-o"></i>Sales Report</a></li>
            <li><a href="<?php echo base_url()?>admin/ItemWiseSalesReport"><i class="fa fa-circle-o"></i>Itemwise Sales Report</a></li>
            <li><a href="<?php echo base_url()?>admin/billReport"><i class="fa fa-circle-o"></i>Bill Report</a></li>
          </ul>
        </li>-->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <strong>Add Invoice Details</strong>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <form id="invoice-form" role="form" action="process.php" method="post" novalidate=""> 
                                    
                                       
                                    <div class="col-lg-6">
                                        <label>From Address</label>       
                                        <div class="form-group input-group">                                        
                                            <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                            <!--<input type="text" class="form-control" name="invoicenumber" placeholder="Enter The Invoice Number">-->
                                            <select class="form-control fromAddressName" name="fromAddress" required="required" data-parsley-errors-container="#fromAddress">
                                                                                                
                                            </select>
                                        </div>   
                                        <div id="fromAddress"></div>  
                                    </div>
                                    
                                    <div class="col-lg-6">
                                        <label>To Name</label>       
                                        <div class="form-group input-group">                                        
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <div class="form-group">                                          
                                                <input type="text"  class="form-control" name="toname" placeholder="To Name"  data-parsley-errors-container="#TonameError">
                                            </div> 
                                        </div> 
                                        <div id="TonameError"></div>  
                                    </div>  
                                    
                                    <div class="col-lg-6">
                                        <label>To Address</label>       
                                        <div class="form-group input-group">                                        
                                            <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                            <div class="form-group">                                          
                                                <input type="text"  class="form-control" name="toaddress" placeholder="To Address"  data-parsley-errors-container="#ToaddressError">
                                            </div> 
                                        </div> 
                                        <div id="ToaddressError"></div>  
                                    </div> 
                                    
                                    <div class="col-lg-6">
                                        <label>To Mobile Number</label>       
                                        <div class="form-group input-group">                                        
                                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                            <div class="form-group">                                          
                                                <input type="text"  class="form-control" name="tomobile" placeholder="To Mobile"  data-parsley-errors-container="#TomobileError">
                                            </div> 
                                        </div> 
                                        <div id="TomobileError"></div>  
                                    </div> 
                                    
                                    <div class="row">
                                               <div class="col-md-9">
                                                    <table class="table table-bordered">
                                                         <thead>
                                                           <tr>
                                                             <th>S.Code</th>
                                                             <th>Product<span class="shippmentRequired"></span></th>
                                                             <th>Price<span class="shippmentRequired"></span></th>
                                                             <th>Cgst<span class="shippmentRequired"></span></th>
                                                             <th>Sgst<span class="shippmentRequired"></span></th>
                                                             <th>Qty<span class="shippmentRequired"></span></th> 
                                                             <th>H.Code<span class="shippmentRequired"></span></th>
                                                             <th>Total<span class="shippmentRequired"></span></th>
                                                           </tr>
                                                         </thead>
                                                         <tbody class="index-body">
                                                           <tr>
                                                             <td><input class="piece-control pieces-data numberOnly" type="text" name="shortCode[]" id="shortCode_0" onblur="addFunction(0);" required style="width:100%"></td>
                                                             <td><input class="piece-control weight-data numberOnly" type="text" name="product[]" id="product_0"  required style="width:300px"></td>
                                                             <td><input  class="piece-control length-data numberOnly" type="text" name="price[]" id="price_0"  required style="width:100%"></td>
                                                             <td><input  class="piece-control width-data numberOnly" type="text" name="cgst[]" id="cgst_0"  required style="width:100%"></td>
                                                             <td><input  class="piece-control height-data numberOnly" type="text" name="sgst[]" id="sgst_0"  required style="width:100%"></td>
                                                             <td><input  class="piece-control height-data numberOnly" type="text" name="qty[]" id="qty_0"   onblur="addQty(0);" required style="width:100%"></td>
                                                             <td><input  class="piece-control height-data numberOnly" type="text" name="hcode[]" id="hcode_0"  required style="width:100%"></td>
                                                             <td>
                                                                 <input class="piece-control total" type="text" name="total[]" id="total_0" onClick="enterWeight('+IdCount+');" style="width:74%">
                                                                 <!--<input type="button" class="btn btn-sm btn-primary" id="addItem" value="Add">-->
                                                                 <a id="addItem" href="javascript:void(0)"><i class="fa fa-plus" title="Add"></i></a>
                                                             </td>
                                                           </tr>                                                 
                                                         </tbody>                                                
                                                     </table>
                                                </div>                                        
                                            </div><br>
                              
                                    
                                    <div class="col-lg-6">
<!--                                        <label>Advance Claim</label>       
                                        <div class="form-group input-group">                                        
                                            <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                            <div class="form-group">                                          
                                                <input type="text" value="0.00" class="form-control" name="advance" placeholder="Amount" maxlength="10" data-parsley-pattern="^[0-9.]+$" data-parsley-pattern-message="Enter only Alphabets" data-parsley-trigger="keyup" data-parsley-validation-threshold="1" data-parsley-errors-container="#amtError">
                                            </div>                             
                                        </div>   
                                        <div id="amtError"></div>  -->
                                    </div> 
                                    <div class="col-lg-6">
                                        <label>Sub Total</label>       
                                        <div class="form-group input-group">                                        
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <div class="form-group">                                          
                                                <input type="text" value="0.00" min="0" class="form-control" id="TotalSubAmount" name="totalAmount" placeholder="Total" data-parsley-pattern="^[0-9.]+$" data-parsley-pattern-message="Enter only Alphabets" data-parsley-trigger="keyup" data-parsley-validation-threshold="1" data-parsley-errors-container="#totalAmountError">
                                            </div> 
                                        </div> 
                                        <div id="totalAmountError"></div>  
                                    </div>   
                                    
                                    <div class="col-lg-6">
<!--                                        <label>From Name</label>       
                                        <div class="form-group input-group">                                        
                                            <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                            <div class="form-group">                                          
                                                <input type="text" value="" class="form-control" name="fromname" placeholder="From Name" maxlength="30" data-parsley-trigger="keyup" data-parsley-validation-threshold="1" data-parsley-errors-container="#fromnameError">
                                            </div>                             
                                        </div>   
                                        <div id="fromnameError"></div>  -->
                                    </div>
                                    
                                    <div class="col-lg-6">
                                        <label>Discount</label>       
                                        <div class="form-group input-group">                                        
                                            <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                                            <div class="form-group">                                          
                                                <input type="text" value="" class="form-control" name="discount" placeholder="Discount"  data-parsley-trigger="keyup" data-parsley-validation-threshold="1" data-parsley-errors-container="#discountError">
                                            </div>                             
                                        </div>   
                                        <div id="discountError"></div>  
                                    </div>
                                    
                                    <div class="col-lg-6"></div>
                                    
                                    <div class="col-lg-6">
                                        <label>Grand Total</label>       
                                        <div class="form-group input-group">                                        
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <div class="form-group">                                          
                                                <input type="text" value="" class="form-control" name="grandTotal" placeholder="Grand Total"  data-parsley-trigger="keyup" data-parsley-validation-threshold="1" data-parsley-errors-container="#grandTotalError">
                                            </div>                             
                                        </div>   
                                        <div id="grandTotalError"></div>
                                    </div>
                                    
                                    <div class="col-lg-6"></div>
                                    
                                    <div class="col-lg-6">
                                        <label>Advance Amount</label>       
                                        <div class="form-group input-group">                                        
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <div class="form-group">                                          
                                                <input type="text" value="" class="form-control" name="advanceamount" placeholder="Advance Amount"  data-parsley-trigger="keyup" data-parsley-validation-threshold="1" data-parsley-errors-container="#advanceamountError">
                                            </div>                             
                                        </div>   
                                        <div id="advanceamountError"></div>
                                    </div>
                                    
                                    <div class="col-lg-6"></div>
                                    
                                    <div class="col-lg-6">
                                        <label>Balance</label>       
                                        <div class="form-group input-group">                                        
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <div class="form-group">                                          
                                                <input type="text" value="" class="form-control" name="balance" placeholder="Balance Amount"  data-parsley-trigger="keyup" data-parsley-validation-threshold="1" data-parsley-errors-container="#balanceamountError">
                                            </div>                             
                                        </div>   
                                        <div id="balanceamountError"></div>
                                    </div>
                                    
                                    <div class="col-lg-6"></div>
                                    
                                    <div class="col-lg-6">
                                        <label>Net Amount</label>       
                                        <div class="form-group input-group">                                        
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <div class="form-group">                                          
                                                <input type="text" value="" class="form-control" name="netamount" placeholder="Net Amount"  data-parsley-trigger="keyup" data-parsley-validation-threshold="1" data-parsley-errors-container="#netamountError">
                                            </div>                             
                                        </div>   
                                        <div id="advanceamountError"></div>
                                    </div>
                                    
<!--                                    <div class="col-lg-12">     
                                        <div class="form-group">
                                            <label>Select From Address</label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" id="IndAddress" name="addressid" value="1" data-parsley-multiple="addressid"> India Address
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" id="MalAddress" name="addressid" value="2" data-parsley-multiple="addressid"> Malaysia Address
                                            </label>
                                        </div>                                         
                                        Start-Frome Address
                                        <div id="MalHiddenAddress" style="display: none">1B-15 Block 1B Level 15, _Plaza Sentral, _ JlnStesenSentral 5, _50470 Kuala Lumpur, _Phone: 603 - 92363610, _http://www.zealitech.com</div>
                                        <div id="IndHiddenAddress" style="display: none">
                                            12A, Priya Nagar, _Perur Main Road, _ Telungupalayam Pirivu, _ Coimbatore:641039, _ Phone: 0422-2343007, _ http://www.zealitech.com
                                        </div>                                        
                                        End-Address
                                   
                                        <div class="form-group input-group">                                          
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i>
                                            </span>
                                            <textarea class="form-control" name="fromaddress" rows="5" placeholder="Enter The From Address" id="TxtAddress" required="" data-parsley-errors-container="#fromAddressError"></textarea>
                                        </div>  
                                        <div id="fromAddressError"></div>
                                        <label>To  Address</label>     
                                        <div class="form-group input-group">                                          
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i>
                                            </span>
                                            <textarea class="form-control" name="toaddress" rows="5" placeholder="Enter the To Address" required="" data-parsley-errors-container="#toAddressError"></textarea>
                                        </div>  
                                        <div id="toAddressError"></div>
                                        <div class="form-group">
                                            <label>Select Bank Details</label>
                                                <input type="checkbox" id="IndBankCheck" name="bankAddressId" value="1" data-parsley-multiple="bankAddressId"> India Address
                                            
                                            <label class="checkbox-inline">
                                                <input type="checkbox" id="MalBankCheck" name="bankAddressId" value="2" data-parsley-multiple="bankAddressId"> Malaysia Address
                                            </label>
                                        </div> 
                                        
                                        Start-Bank Details
                                        <div id="IndHiddenBankDetails" style="display: none">
                                            All payments to be made by Cheque in favor of ZEALITECH SOLUTIONS, Bank Name : State Bank of India, Branch : Perur(13442), Account Number : 00000034799260398, IFSC Code : SBIN0013442                                              
                                        </div>
                                        <div id="MalHiddenBankDetails" style="display: none">
                                            All payments to be made by Cheque in favor of ZEALITECH SOLUTIONS SDN BHD., Bank Name : CIMB Bank, Account Number : 8007026994 
                                        </div>                                        
                                        End               
                                        <div class="form-group input-group">                                          
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i>
                                            </span>
                                            <textarea class="form-control" id="TxtBankDetails" name="bankaddress" rows="3" placeholder="Enter the Bank Details" required="" data-parsley-errors-container="#bankAddressError"></textarea>
                                        </div> 
                                        <div id="bankAddressError"></div>
                                        <div class="form-group">
                                            <label>Select Enquiry Address</label>
                                            <input type="checkbox" id="IndEnqCheck" name="enquiryAddressId" value="1" data-parsley-multiple="enquiryAddressId"> India Address
                                            
                                            <label class="checkbox-inline">
                                                <input type="checkbox" id="MalEnqCheck" name="enquiryAddressId" value="2" data-parsley-multiple="enquiryAddressId"> Malaysia Address
                                            </label>
                                        </div>   
                                        Start-Enquiry Details
                                        <div id="IndHiddenEnqDetails" style="display: none">Mrs.Gomathi, Phone # +919894071068, hr@zealitech.com</div>
                                        <div id="MalHiddenEnqDetails" style="display: none">
                                            Mr.Vignes,Phone #+60126988255,vignes@zealitech.com
                                        </div>                                        
                                        End                                 
                                        <div class="form-group input-group">                                          
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i>
                                            </span>
                                            <textarea class="form-control" name="enqAddress" id="TxtEnqDetails" rows="3" placeholder="Enter the Enquiry Address" required="" data-parsley-errors-container="#enqAddressError"></textarea>
                                        </div>  
                                        <div id="enqAddressError"></div>
                                    </div> -->
                                    <div class="col-lg-6">                                      
                                    </div>                                    
                                    <div class="col-lg-6">
                                        <input type='hidden' name='currentDateTime' class="currentDateTime">
                                        <button type="submit" class="btn btn-primary pull-right" name="submit">Submit</button>  
                                    </div>
                                </form><!-- /.col-lg-6 (nested) -->
                            </div>                          
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
      <strong>Developed By <a href="http://www.admin@imat.co.in/">imat © 2017</a>.</strong> 
  </footer>
    <div class="modal fade bs-example-modal-sm" id="myPleaseWait" tabindex="-1"
         role="dialog" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog modal-sm">
            <div class="text-center" style="margin: 230px auto;">
                <img src="<?php echo base_url()?>image/ajax-loader.gif" alt=""/><br><br>
                <span style="color: #fff">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Processing...</span>
            </div>
            
        </div>
    </div>  
       
    </div>      
  
</div>

<!-- jQuery 2.2.3 -->
<script src="<?php echo asset_url();?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo asset_url();?>bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo asset_url();?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo asset_url();?>plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo asset_url();?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo asset_url();?>plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="<?php echo asset_url();?>plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo asset_url();?>dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo asset_url();?>dist/js/demo.js"></script>
<!-- page script -->
<script src="<?php echo asset_url();?>customJs/parsley.min.js" type="text/javascript"></script>
<script src="<?php echo asset_url();?>customJs/js_addinvoice.js" type="text/javascript"></script>
<script src="<?php echo asset_url();?>customJs/sweetalert.min.js" type="text/javascript"></script>



  


