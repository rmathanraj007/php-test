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
      <span class="logo-lg"><b>IMAT </b>Invoice</span>
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
        <li class="active treeview">
          <a href="<?php echo base_url()?>admin/Items">
            <i class="fa fa-table"></i> <span>Product Master</span>
          </a>
        </li>      
        
        <li class="treeview">
          <a href="<?php echo base_url()?>admin/Address">
            <i class="fa fa-map-marker "></i> <span>Address Master</span>
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
                <h3 class="box-title custom-box-title"><strong>Items</strong></h3>
                <button class="btn btn-primary pull-right" id="addUserBtn"><i class="fa fa-plus"></i> Add Product</button>
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
      <strong>Developed By <a href="http://www.admin@imat.co.in/">imat © 2017 © 2017</a>.</strong> 
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
    <div class="modal fade" id="addItemModal" role="dialog">
        <form id="addItemForm" action="<?php echo base_url()?>items/addItemProcess" method="post"  enctype="multipart/form-data">
            <div class="modal-dialog">
              <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Add Product</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="">Short Code</label>
                                    <div class="input-group">                                    
                                        <span class="input-group-addon"><i class="fa fa-table"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter The Short Code" required="" name="sortCode" data-parsley-trigger="keyup" data-parsley-validation-threshold="1" data-parsley-errors-container="#sortcodeError">
                                    </div>
                                    <div id="sortcodeError"></div>
                                </div>
                            </div>  
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Product Name</label>
                                    <div class="input-group">                                    
                                        <span class="input-group-addon"><i class="fa fa-table"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter The Product Name" required="" name="itemname"  data-parsley-errors-container="#itemnameError">
                                    </div>
                                    <div id="itemnameError"></div>
                                </div>
                            </div>                                                      
                        </div>
                        <div class="row">                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="">Buying Price</label>
                                    <div class="input-group">                                    
                                        <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                        <input type="text"  class="form-control" placeholder="Enter The Original Price" required="" data-parsley-pattern="^[0-9-+]+$" data-parsley-pattern-message="Enter only digits" name="originalPrice"  data-parsley-errors-container="#originalPriceError">
                                    </div>
                                    <div id="originalPriceError"></div>
                                </div>
                            </div>   
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="">Selling Price</label>
                                    <div class="input-group">                                    
                                        <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                        <input type="text"  class="form-control" placeholder="Enter The Selling Price" required="" data-parsley-pattern="^[0-9-+]+$" data-parsley-pattern-message="Enter only digits" name="sellingPrice"  data-parsley-errors-container="#sellingPriceError">
                                    </div>
                                    <div id="sellingPriceError"></div>
                                </div>
                            </div>   
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="">Cgst</label>
                                    <div class="input-group">                                    
                                        <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                                        <input type="text"  class="form-control" placeholder="Enter The Cgst" required="" data-parsley-pattern="^[0-9-+]+$" data-parsley-pattern-message="Enter only digits" name="cgst"  data-parsley-errors-container="#cgstError">
                                    </div>
                                    <div id="cgstError"></div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="">Sgst</label>
                                    <div class="input-group">                                    
                                        <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                                        <input type="text"  class="form-control" placeholder="Enter The Sgst" required="" data-parsley-pattern="^[0-9-+]+$" data-parsley-pattern-message="Enter only digits" name="sgst"  data-parsley-errors-container="#sgstError">
                                    </div>
                                    <div id="sgstError"></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">                                
                                <div class="form-group">
                                    <label class="">HSN Code</label>
                                    <div class="input-group">                                    
                                        <span class="input-group-addon"><i class="fa fa-table"></i></span>
                                        <input type="text"  class="form-control" placeholder="Enter The HSN Code" required=""  name="hsncode"  data-parsley-errors-container="#hsnCodeError">
                                    </div>
                                    <div id="hsnCodeError"></div>
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
<div class="modal fade" id="editItemModal" role="dialog">
        <form id="editItemForm" action="<?php echo base_url()?>items/updateItemProcess" method="post"  enctype="multipart/form-data">
            <div class="modal-dialog">
              <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Edit Product</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="">Short Code</label>
                                    <div class="input-group">                                    
                                        <span class="input-group-addon"><i class="fa fa-table"></i></span>
                                        <input type="text" class="form-control" id="shortCode" placeholder="Enter The Short Code" required="" name="sortCode" data-parsley-trigger="keyup" data-parsley-validation-threshold="1" data-parsley-errors-container="#sortcodeError" readonly="">
                                    </div>
                                    <div id="sortcodeError"></div>
                                </div>
                            </div>  
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Product Name</label>
                                    <div class="input-group">                                    
                                        <span class="input-group-addon"><i class="fa fa-table"></i></span>
                                        <input type="text" class="form-control" id="productName" placeholder="Enter The Product Name" required="" name="itemname"  data-parsley-errors-container="#itemnameError" readonly="">
                                    </div>
                                    <div id="itemnameError"></div>
                                </div>
                            </div>                                                      
                        </div>
                        
                        <div class="row">                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="">Buying Price</label>
                                    <div class="input-group">                                    
                                        <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                        <input type="text"  class="form-control" id="originalPrice" placeholder="Enter The Original Price" required=""  name="originalPrice"  data-parsley-errors-container="#originalPriceError">
                                    </div>
                                    <div id="originalPriceError"></div>
                                </div>
                            </div>   
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="">Selling Price</label>
                                    <div class="input-group">                                    
                                        <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                        <input type="text"  class="form-control" id="sellingPrice" placeholder="Enter The Selling Price" required=""  name="sellingPrice"  data-parsley-errors-container="#sellingPriceError">
                                    </div>
                                    <div id="sellingPriceError"></div>
                                </div>
                            </div>   
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="">Cgst</label>
                                    <div class="input-group">                                    
                                        <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                                        <input type="text"  class="form-control" id="cgst" placeholder="Enter The Cgst" required="" data-parsley-pattern="^[0-9-+]+$" data-parsley-pattern-message="Enter only digits" name="cgst"  data-parsley-errors-container="#cgstError">
                                    </div>
                                    <div id="cgstError"></div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="">Sgst</label>
                                    <div class="input-group">                                    
                                        <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                                        <input type="text"  class="form-control" id="sgst" placeholder="Enter The Sgst" required="" data-parsley-pattern="^[0-9-+]+$" data-parsley-pattern-message="Enter only digits" name="sgst"  data-parsley-errors-container="#sgstError">
                                    </div>
                                    <div id="sgstError"></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">                                
                                <div class="form-group">
                                    <label class="">HSN Code</label>
                                    <div class="input-group">                                    
                                        <span class="input-group-addon"><i class="fa fa-table"></i></span>
                                        <input type="text"  class="form-control" placeholder="Enter The HSN Code" required="" id="hsncode"  name="hsncode"  data-parsley-errors-container="#hsnCodeError" readonly="">
                                    </div>
                                    <div id="hsnCodeError"></div>
                                </div>
                            </div>
                        </div>
                        
                       
                        <div class="modal-footer">
                            <div class="invalid-form-error-message"></div>
                            <input type="submit" value="Update" class="btn btn-primary" id="updateUserSubmit">
                            <input type="hidden" id="hiddenItemId" name="ItemId">
                            <input type='hidden' name='currentDateTime' class="currentDateTime">
                        </div>
                     </div>
                    </div>
                    
              </div>
            </div>
        </form>    
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
<script src="<?php echo asset_url();?>customJs/js_items.js" type="text/javascript"></script>
<script src="<?php echo asset_url();?>customJs/sweetalert.min.js" type="text/javascript"></script>



  


