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
            <i class="fa fa-table"></i> <span>Product List Master</span>
          </a>
        </li> 
        
        <li class="active treeview">
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
        <li class="treeview">
          <a href="#">
            <i class="fa  fa-money"></i> <span>Invoice Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li class="treeview"><a href="<?php echo base_url()?>admin/addinvoice"><i class="fa fa-circle-o"></i> <span>Add Invoice</span></a></li>
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
        <div class="col-xs-12">
          <div id="alert_message"></div>      
          <div class="box box-primary">
            <div class="box-header custom-header">
                <h3 class="box-title custom-box-title"><strong>Address</strong></h3>
                <button class="btn btn-primary pull-right" id="addUserBtn"><i class="fa fa-plus"></i> Add Address</button>
            </div>
              <hr class="custom-hr">
            <!-- /.box-header -->
            <div id="PosUsersTableDiv" class="box-body table-responsive">          
            </div>
            <!-- /.box-body -->
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
    <!-- Add user Modal -->
    <div class="modal fade" id="addAddressModal" role="dialog">
        <form id="addAddressForm" action="<?php echo base_url()?>Address/addAddressProcess" method="post"  enctype="multipart/form-data">
            <div class="modal-dialog">
              <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Add Address</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Address Name</label>
                                    <div class="input-group">                                    
                                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                        <input type="text"  class="form-control" placeholder="Enter The Address Name" required="" name="addressname"  data-parsley-errors-container="#addressnameError">
                                    </div>
                                    <div id="addressnameError"></div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="">Address1</label>
                                    <div class="input-group">                                    
                                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter The Address1" required="" name="address1"  data-parsley-errors-container="#address1Error">
                                    </div>
                                    <div id="address1Error"></div>
                                </div>
                            </div>                            
                        </div>
                        <div class="row">                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="">Address2</label>
                                    <div class="input-group">                                    
                                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                        <input type="text"  class="form-control" placeholder="Enter The Address2" required=""  name="address2"  data-parsley-errors-container="#address2Error">
                                    </div>
                                    <div id="address2Error"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="">Address3</label>
                                    <div class="input-group">                                    
                                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter The Address3" required="" name="address3"  data-parsley-errors-container="#address3Error">
                                    </div>
                                    <div id="address3Error"></div>
                                </div>
                            </div> 
                        </div>
                        <div class="row">  
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="">Pincode</label>
                                        <div class="input-group">                                    
                                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                            <input type="text" id="pincode" class="form-control" placeholder="Enter The Pincode" required="" name="pincode" minlength="6" maxlength="6" data-parsley-errors-container="#pincodeError">
                                        </div>
                                       <div id="pincodeError"></div>
                                </div>                                
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="">Mobile Number</label>
                                        <div class="input-group">                                    
                                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                            <input type="text" id="mobile" class="form-control" placeholder="Enter The Mobile Number" required="" name="mobile" minlength="10" maxlength="10" data-parsley-errors-container="#mobileError">
                                        </div>
                                       <div id="mobileError"></div>
                                </div>   
                            </div>
                        </div> 
                    </div>
                    <div class="modal-footer">
                        <input type="submit" value="Submit" class="btn btn-primary" id="addUserSubmit">
                        <input type='hidden' name='currentDateTime' class="currentDateTime">
                    </div>
              </div>
            </div>
        </form>    
    </div>  
    
<!--Edit user modal-->
<div class="modal fade" id="editAddressModal" role="dialog">
        <form id="editAddressForm" action="<?php echo base_url()?>address/updateAddressProcess" method="post"  enctype="multipart/form-data">
            <div class="modal-dialog">
              <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Edit User</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Address Name</label>
                                    <div class="input-group">                                    
                                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                        <input type="text" id="addressname"  class="form-control" placeholder="Enter The Address Name" required="" name="addressname"  data-parsley-errors-container="#editaddressnameError">
                                    </div>
                                    <div id="editaddressnameError"></div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="">Address1</label>
                                    <div class="input-group">                                    
                                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                        <input type="text" id="address1" class="form-control" placeholder="Enter The Address1" required="" name="address1"  data-parsley-errors-container="#editaddress1Error">
                                    </div>
                                    <div id="editaddress1Error"></div>
                                </div>
                            </div>                            
                        </div>
                        <div class="row">                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="">Address2</label>
                                    <div class="input-group">                                    
                                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                        <input type="text" id="address2" class="form-control" placeholder="Enter The Address2" required=""  name="address2"  data-parsley-errors-container="#editaddress2Error">
                                    </div>
                                    <div id="editaddress2Error"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="">Address3</label>
                                    <div class="input-group">                                    
                                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                        <input type="text" id="address3" class="form-control" placeholder="Enter The Address3" required="" name="address3"  data-parsley-errors-container="#editaddress3Error">
                                    </div>
                                    <div id="editaddress3Error"></div>
                                </div>
                            </div> 
                        </div>
                        
                        <div class="row">  
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="">Pincode</label>
                                        <div class="input-group">                                    
                                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                            <input type="text" id="editpincode" class="form-control" placeholder="Enter The Pincode" required="" name="pincode" minlength="6" maxlength="6" data-parsley-errors-container="#editpincodeError">
                                        </div>
                                       <div id="editpincodeError"></div>
                                </div>                                
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="">Mobile Number</label>
                                        <div class="input-group">                                    
                                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                            <input type="text" id="editmobile" class="form-control" placeholder="Enter The Mobile Number" required="" name="mobile" minlength="10" maxlength="10" data-parsley-errors-container="#editmobileError">
                                        </div>
                                       <div id="editmobileError"></div>
                                </div>   
                            </div>
                        </div> 
                       
                        <div class="modal-footer">
                            <div class="invalid-form-error-message"></div>
                            <input type="submit" value="Update" class="btn btn-primary" id="updateUserSubmit">
                            <input type="hidden" id="hiddenAddressId" name="addressId">
                            <input type='hidden' name='currentDateTime' class="currentDateTime">
                        </div>
                     </div>
                    </div>                    
              </div>
             </form> 
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
<script src="<?php echo asset_url();?>customJs/js_address.js" type="text/javascript"></script>
<script src="<?php echo asset_url();?>customJs/sweetalert.min.js" type="text/javascript"></script>



  


