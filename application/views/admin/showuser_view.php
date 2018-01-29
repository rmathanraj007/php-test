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
        <li class="active treeview">
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
                <h3 class="box-title custom-box-title"><strong>Users</strong></h3>
                <button class="btn btn-primary pull-right" id="addUserBtn"><i class="fa fa-plus"></i> Add User</button>
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
    <div class="modal fade" id="addUserModal" role="dialog">
        <form id="addUserForm" action="<?php echo base_url()?>users/addUserProcess" method="post"  enctype="multipart/form-data">
            <div class="modal-dialog">
              <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Add User</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <div class="input-group">                                    
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" id="addName" class="form-control" placeholder="Enter The Name" required="" name="name" data-parsley-pattern="^[a-zA-Z ]+$" data-parsley-pattern-message="Enter only Alphabets" data-parsley-minlength="3" maxlength="20" data-parsley-minlength-message="Please enter atleast 3 characters" data-parsley-trigger="keyup" data-parsley-validation-threshold="1" data-parsley-errors-container="#nameError">
                                    </div>
                                    <div id="firstnameError"></div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="">Email</label>
                                    <div class="input-group">                                    
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input type="email" class="form-control" placeholder="Enter The Email" required="" name="email" data-parsley-trigger="keyup" data-parsley-validation-threshold="1" data-parsley-errors-container="#emailError">
                                    </div>
                                    <div id="emailError"></div>
                                </div>
                            </div>                            
                        </div>
                        <div class="row">                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="">Phone</label>
                                    <div class="input-group">                                    
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input type="text" id="addUserMobile" class="form-control" placeholder="Enter The Mobile Number" required="" data-parsley-pattern="^[0-9-+]+$" data-parsley-pattern-message="Enter only digits" name="mobile" data-parsley-minlength="10" maxlength="13" data-parsley-minlength-message="Please enter atleast 10 characters" data-parsley-trigger="keyup" data-parsley-validation-threshold="1" data-parsley-errors-container="#mobileError">
                                    </div>
                                    <div id="mobileError"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="">Password</label>
                                    <div class="input-group">                                    
                                        <span class="input-group-addon"><i class="fa fa-unlock"></i></span>
                                        <input type="password" class="form-control" placeholder="Enter The Password" required="" name="password" data-parsley-minlength="6" data-parsley-minlength-message="Enter atleast minimum 6 characters" data-parsley-trigger="keyup" data-parsley-validation-threshold="1" data-parsley-errors-container="#passwordError">
                                    </div>
                                    <div id="passwordError"></div>
                                </div>
                            </div> 
                        </div>
                        <div class="row">  
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="">Confirm Password</label>
                                        <div class="input-group">                                    
                                            <span class="input-group-addon"><i class="fa fa-unlock"></i></span>
                                            <input type="password" class="form-control" placeholder="Enter The Confirm Password" required="" name="confirmpassword" data-parsley-minlength="6" data-parsley-minlength-message="Enter atleast minimum 6 characters" data-parsley-trigger="keyup" data-parsley-validation-threshold="1" data-parsley-errors-container="#confirmpasswordError">
                                        </div>
                                       <div id="confirmpasswordError"></div>
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
<div class="modal fade" id="editUserModal" role="dialog">
        <form id="editUserForm" action="<?php echo base_url()?>users/updateUserProcess" method="post"  enctype="multipart/form-data">
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
                                    <label>Name</label>
                                    <div class="input-group">                                    
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" id="name" class="form-control" placeholder="Enter The Name" required="" name="name" data-parsley-pattern="^[a-zA-Z ]+$" data-parsley-pattern-message="Enter only Alphabets" data-parsley-minlength="3" maxlength="20" data-parsley-minlength-message="Enter atleast 3 characters" data-parsley-trigger="keyup" data-parsley-validation-threshold="1" data-parsley-errors-container="#firstnameUpdateError">
                                    </div>
                                    <div id="firstnameUpdateError"></div>
                                </div>
                            </div>
                            <div class="col-md-6">                               
                                    <div class="form-group">
                                        <label class="">Email</label>
                                        <div class="input-group">                                    
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            <input type="email" id="email" class="form-control" placeholder="Enter The Email" required="" name="email" data-parsley-trigger="keyup" data-parsley-validation-threshold="1" data-parsley-errors-container="#emailUpdateError">
                                        </div>
                                        <div id="emailUpdateError"></div>
                                    </div>                               
                            </div>
                        </div>
                        <div class="row">                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="">Phone</label>
                                    <div class="input-group">                                    
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input type="text" id="mobile" class="form-control" placeholder="Enter The Mobile Number" name="mobile" data-parsley-pattern="^[0-9-+]+$" data-parsley-pattern-message="Enter only digits" data-parsley-minlength="10" maxlength="13" data-parsley-minlength-message="Please enter atleast 10 characters" required="" data-parsley-trigger="keyup" data-parsley-validation-threshold="1" data-parsley-errors-container="#mobileUpdateError">
                                    </div>
                                    <div id="mobileUpdateError"></div>
                                </div>
                            </div>
                            
                           <div class="col-md-6">
                                <div class="form-group">
                                    <label class="">Password</label>
                                    <div class="input-group">                                    
                                        <span class="input-group-addon"><i class="fa fa-unlock"></i></span>
                                        <input type="text" id="password" class="form-control" placeholder="Enter The Password" required="" name="password" data-parsley-minlength="6" data-parsley-minlength-message="Enter atleast minimum 6 characters" data-parsley-trigger="keyup" data-parsley-validation-threshold="1" data-parsley-errors-container="#passwordUpdateError">
                                    </div>
                                    <div id="passwordUpdateError"></div>
                                </div>
                            </div> 
                        </div>
                       
                        <div class="modal-footer">
                            <div class="invalid-form-error-message"></div>
                            <input type="submit" value="Update" class="btn btn-primary" id="updateUserSubmit">
                            <input type="hidden" id="hiddenUserId" name="userId">
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
<script src="<?php echo asset_url();?>customJs/js_users.js" type="text/javascript"></script>
<script src="<?php echo asset_url();?>customJs/sweetalert.min.js" type="text/javascript"></script>



  


