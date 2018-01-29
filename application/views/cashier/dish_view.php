<link href="<?php echo asset_url();?>customCSS/sweetalert.min.css" rel="stylesheet" type="text/css"/>
<style>
.qty-button
{
    width:20px !important;
    height: 20px !important;
    padding: 1px 0 !important;
    
}
.table-qty-width
{
    width:1px;
}
.plus-btn-postion
{
    margin-left: -26px;
}
.glyphi-size
{
    font-size: 8px;
    top:-1px !important;
}

.custom-table tr td{
    border-bottom: 1px solid #ddd !important;
    border-top: none !important;
}
.custom-box-footer{
    text-align: right;
    margin-bottom: 22px;    
}
    
.popup-desc{
    width: 130px !important;
} 
.popup-colon{
    width: 10px !important;
}
.popup-amt{
    width: 100px !important;
    text-align: right;
}
.gender{
        margin-top: 29px;
}
.parsley-required{
    color: red !important;
}
</style>
<body class="skin-blue sidebar-collapse sidebar-mini">
<input type="hidden" id="base_url" value="<?php echo base_url();?>">    
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>P</b>OS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Zeal</b>POS</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button" style="display:none">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url().'profileImages/'.$this->session->userdata('profileImage');?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $this->session->userdata('userName');?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url().'profileImages/'.$this->session->userdata('profileImage');?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $this->session->userdata('userName');?>
                  <small>Cashier</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo base_url()?>cashier/userProfile" class="btn btn-default btn-flat">Profile</a>
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
          <img src="<?php echo base_url().'profileImages/'.$this->session->userdata('profileImage');?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('userName');?></p>
          <a href="#"><i class="fa fa-circle text-success"></i>Cashier</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">POS CASHIER MENUS</li>
        <li class="treeview">
            <a href="<?php echo base_url()?>cashier/Dashboard_Controller">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="active treeview">
          <a href="<?php echo base_url()?>cashier/Dish_Controller">
            <i class="fa fa-money"></i> <span>Sale</span>
          </a>
        </li> 
        <li class="treeview">
          <a href="<?php echo base_url()?>cashier/DailyReports">
            <i class="fa fa-folder-open"></i> <span>Reports</span>
          </a>
        </li> 
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header" id="menutype">
      <h1>Menus</h1>
      <input type="hidden" id="currentDateTime">
        <div class="breadcrumb custom-breadcrumb">
                <div class="input-group custom-input-group category-search-box">
                  <input type="text" name="menuTypeName" id="menuCategoryName" class="form-control" placeholder="Search Category..." style="width: 216px;">
                      <span class="input-group-btn">
                          <button type="submit" name="search" id="searchCategory" class="btn btn-primary"><i class="fa fa-search"></i>
                        </button>
                      </span>
                </div> 
                <div class="input-group custom-input-group item-search-box">
                    <input type="text" name="menuName" id="menuItemName" class="form-control" placeholder="Search Items..." style="width: 216px;">
                      <span class="input-group-btn">
                        <button type="submit" name="search" id="searchItem" class="btn btn-primary"><i class="fa fa-search"></i>    </button>
                      </span>
                </div>            
        </div>
    </section>

        <!-- Main content -->
        <section class="content" id="menuItem">
            <div class="row">
                <div class="col-md-5">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                          <h3 class="box-title">Latest Orders</h3>
                        </div>
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                               <li class="active"><a href="#tab_1" data-toggle="tab">Bill Details</a></li>
                               <li><a href="#tab_2" data-toggle="tab">Order Details</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_1">
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-12" style="padding-right: 0px !important;">
                                                <div class="table-responsive">
                                                    <table class="table table-strisped no-margin">
                                                        <thead>
                                                            <tr>
                                                              <th>Action</th>  
                                                              <th style="width: 130px;">Item Name</th>
                                                              <th>Price</th>
                                                              <th class="table-qty-width"></th>
                                                              <th class="text-right">Qty</th>
                                                              <th></th>
                                                              <th class="text-right">Net Amount</th>                                                             
                                                            </tr>
                                                        </thead>                                                        
                                                    </table>
                                                    <div class="slimScrollItemsDiv">
                                                    <table class="table table-strisped no-margin" id="orderItemTable">
                                                        <tbody id="orderItemBody">
                                                            <tr>
                                                                <td colspan="4" class="text-center">No Item Found</td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                    </div>    
                                                    <table class="table table-strisped no-margin">
                                                        <tfoot>
                                                            <tr>
                                                              <td></td>  
                                                              <td><b>Item Count: <span id="itemCount">0</span></b></td>
                                                              <td></td>
                                                              <td></td>
                                                              <td class="text-right"><!--<span id="itemQtyCount">0</span>--></td>
                                                              <td></td>
                                                              <td class="text-right"><b>Rm. <span id="itemTotalAmt">0.00</span></b></td> 
                                                             
                                                            </tr>
                                                        </tfoot>                                                        
                                                    </table>
                                                </div>
                                            </div>
<!--                                            <div class="col-md-1 custom-button-margin">
                                                <button type="button" class="btn btn-warning btn-circle"><i class="glyphicon glyphicon-minus"></i></button>
                                                <button type="button" class="btn btn-success btn-circle"><i class="glyphicon glyphicon-plus"></i></button>
                                                <button type="button" class="btn btn-danger btn-circle"><i class="glyphicon glyphicon-remove"></i></button>
                                                <button type="button" class="btn btn-primary btn-circle"><i class="glyphicon glyphicon-pause"></i></button>
                                                <button type="button" class="btn btn-info btn-circle"><i class="glyphicon glyphicon-edit"></i></button>
                                                <button type="button" class="btn btn-primary btn-circle"><i class="glyphicon glyphicon-print"></i></button>
                                                <button type="button" class="btn btn-primary btn-circle"><i class="glyphicon glyphicon-backward"></i></button>
                                            </div>-->
                                        </div><hr>
                                        <div class="row">
                                            <div class="col-md-5" style="padding-right: 0px !important;padding-left: 0px !important;">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading"><b>Customer Info</b></div>
                                                        <div class="panel-body">
                                                            <div class="form-group">
                                                                <label>Customer</label>
                                                                <select class="form-control" id="purhaseCustomer">
                                                                    <option value="">Select</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                              <label>Phone</label>
                                                              <input class="form-control" type="text" maxlength="15" onkeyup="this.value=this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1')">
                                                            </div>
                                                            <div class="form-group">
                                                                <button type="button" class="btn btn-success" id="addNewCustomer">New</button>
                                                                <button type="button" class="btn btn-warning">Search</button>
                                                            </div>                                                            
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="table-responsive" style="width:270px;">
                                                    <table class="table no-margin custom-table">
                                                       <tr>
                                                        <td colspan="3"><strong>Gross Amount</strong></td>                    
                                                        <td colspan="2" class="text-right"><span class="grossAmount"><strong>0.00</strong></span></td>
                                                       </tr>
                                                       <tr>
                                                        <td colspan="2"><strong>Discount</strong></td>                    
                                                        <td colspan="2" class="text-right"><span class="discountAmt"><strong>0.00</strong></span></td>
                                                       </tr>  
                                                       <tr>
                                                        <td colspan="2"><strong>Tax</strong></td>                    
                                                        <td colspan="2" class="text-right"><span class="taxAmt"><strong>0.00</strong></span></td>
                                                       </tr> 
                                                       <tr>
                                                        <td colspan="2"><strong>Coupon Code</strong></td>                   
                                                        <td class="text-right"><input type="text" class="form-control"  style="width: 79px;height: 26px;"  id="couponCode" /></td>
                                                        <td class="text-right"><input type="button" class="btn btn-success" value="Apply" style="padding: 2px 12px;" id="addCoupon"></td>
                                                       </tr>
                                                       <tr>
                                                           <td colspan="3" ><strong>Net Amount</strong><input type='hidden' id='paymentMode'></td>                    
                                                        <td class="text-right"><span class="totalAddItemAmount" id="totalAddItemAmount"><strong>0.00</strong></span></td>
                                                       </tr> 
                                                    </table>
                                                </div> 
                                                <div>
                                                    <table class="table">
                                                        <tr>
                                                            <td colspan="4" class="text-center"><button type="button" class="btn btn-info btn-footer btn-lg" id="cashPayment"><i class="fa fa-money" style="margin-top:4px;"></i><p class="glyphicon-text">Cash Bill</p></button> <button type="button" class="btn btn-info btn-footer btn-lg" id='cardPayment'><i class="fa fa-credit-card" style="margin-top:4px;"></i><p class="glyphicon-text">Card Bill</p></button></td>
                                                        </tr>
                                                    </table>
                                                    <table class="table paymentMode" style="display:none"> 
                                                        <tr class="cardDetails">
                                                            <td colspan="2" style="width:50%;padding-top: 15px;"><span><strong>Card Type</strong></span></td>
                                                            <td colspan="2"><input type="text" id='cardType' class="form-control" placeholder="Card Type" required onkeyup="this.value=this.value.replace(/[^aA-zZ]/g, '').replace(/(\..*)\./g, '$1')"/></td>
                                                        </tr>  
                                                        <tr class="cardDetails">
                                                            <td colspan="2" style="width:50%;padding-top: 15px;"><span><strong>Card Number</strong></span></td>
                                                            <td colspan="2"><input type="text" maxlength="4" minlength="4" id='cardNumber' class="form-control" placeholder="last 4 Digit" required onkeyup="this.value=this.value.replace(/[^0-9]/g, '').replace(/(\..*)\./g, '$1')"></td>
                                                        </tr>                                                        
                                                        <tr>
                                                            <td colspan="2" style="width:50%;padding-top: 15px;"><span><strong>Total Amount</strong></span></td>
                                                            <td colspan="2"><input type="text" id='invoiceAmt' class="form-control text-right" placeholder="0.00"     required onkeyup="this.value=this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')"></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2" style="width:50%;padding-top: 15px;"><span><strong>Total Due Amount</strong></span></td>
                                                            <td colspan="2"><input type="text" id="dueAmount" class="form-control text-right" disabled="true" value="0.00" required onkeyup="this.value=this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')"></td>
                                                        </tr>                                                        
                                                    </table>                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.box-body -->
                                    <div class="box-footer clearfix custom-box-footer print-footer" style="display:none">
                                        <button type="button" class="btn btn-success pull-right" style="margin-right: 5px;" id="confirmOrder"><i class="fa fa-print"></i> Save & Print</button>
                                        <button type="button" class="btn btn-default pull-right" style="margin-right: 5px;"><i class="fa fa-times"></i> Cancel</button>                                        
                                    </div>
                                </div>
                                <!-- /.box-footer -->
                                <div class="tab-pane" id="tab_2">                                    
                                    <div class="box-body">
                                        <div id="posOrderDiv" class="table-responsive">

                                        </div>
              <!-- /.table-responsive -->
            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="box box-danger category-box"> 
                    <div class="box-header with-border">
                        <h3 class="box-title">Categories</h3>
                     </div> 
                    <div class="box-body category-body">
                        <h2 class="text-center text-red no-record-class no-record-category">No Record Found</h2>
                        <ul class="users-list category-list clearfix" id="menuCategories"></ul>
                    </div> 
                    <div class="box-footer text-center">
                        <!--<a href="javascript:void(0)" class="uppercase">load more</a>-->
                    </div>    
                    </div>
                    <div class="box box-primary item-box">
                    <div class="box-header with-border">
                        <h3 class="box-title"><a onclick="backCategory()" title="Back"><i class="fa fa-arrow-left"></i></a>&nbsp;&nbsp;&nbsp; Items</h3>
                    </div>

                <div class="box-body no-padding item-body">
                    <h2 class="text-center text-red no-record-class item-no-record-class">No Record Found</h2>
                    <ul class="users-list clearfix" id="menuItems"></ul>
                </div>

                <div class="box-footer text-center">
                  <!--<a href="javascript:void(0)" class="uppercase">load more</a>-->
                </div>

              </div>
                </div>                
            </div>
             <div class="modal fade" id="addCustomerModal"  role="dialog">
        <form id="addcashierCustomerForm" action="" method="post">
            <div class="modal-dialog">
              <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Add Customer</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="">Full Name</label>
                                            <div class="input-group">                                    
                                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                <input type="text" class="form-control" placeholder="Enter The Fullname" name="fullname" required="" data-parsley-pattern="^[a-zA-Z ]+$" data-parsley-pattern-message="Enter only Alphabets" data-parsley-minlength="3" maxlength="20" data-parsley-minlength-message="Please enter atleast 3 characters" data-parsley-trigger="keyup" data-parsley-validation-threshold="1" data-parsley-errors-container="#fullnameError">
                                            </div>
                                        <p id="fullnameError"></p>
                                    </div>
                                </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="">Email</label>
                                    <div class="input-group">                                    
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input type="email" class="form-control" placeholder="Enter The Email"  name="email" required="" data-parsley-trigger="keyup" data-parsley-validation-threshold="1" data-parsley-errors-container="#emailError">
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
                                        <input type="text" id="addUserMobile" class="form-control" required="" placeholder="Enter The Mobile Number"  data-parsley-pattern="^[0-9-+]+$" data-parsley-pattern-message="Enter only digits" name="mobile" data-parsley-minlength="10" maxlength="13" data-parsley-minlength-message="Please enter atleast 10 characters" data-parsley-trigger="keyup" data-parsley-validation-threshold="1" data-parsley-errors-container="#mobileError">
                                    </div>
                                    <div id="mobileError"></div>
                                </div>
                            </div>
                            <div class="col-md-6 gender">
                                <!-- radio -->
                                <div class="form-group ">
                                  <label>
                                      <input type="radio" name="gender" class="minimal" value='1' required="" checked  data-parsley-errors-container="#genderError"> Male
                                  </label>
                                  <label>
                                    <input type="radio" name="gender" class="minimal" value='0' required=""  data-parsley-errors-container="#genderError"> Female
                                  </label>
                                </div> 
                                <div id="genderError"></div>
                            </div>                            
                            
                        </div>  
                        <div class="row">                              
                            
                            <div class="col-md-6">
                                <!-- checkbox -->
                                <div class="form-group ">
                                  <label>
                                    <input type="checkbox" class="minimal" name="status" checked> Active
                                  </label>
                                </div>                                    
                            </div>                             
                        </div>                         
                    </div>
                    <div class="modal-footer">
                        <input type="submit" value="Submit" class="btn btn-primary" id="addCustomerSubmit">
                    </div>
              </div>
            </div>
        </form>    
    </div> 
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
      <strong>Developed By <a href="http://www.zealitech.com/">Zealitech Solutions<a> © 2017</a>.</strong> 
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
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->

<script src="<?php echo asset_url();?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo asset_url();?>bootstrap/js/bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo asset_url();?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo asset_url();?>plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo asset_url();?>dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo asset_url();?>dist/js/demo.js"></script>
<script src="<?php echo asset_url();?>customJs/parsley.min.js" type="text/javascript"></script>
<script src="<?php echo asset_url();?>customJs/js_cashierDishView.js" type="text/javascript"></script>
<script src="<?php echo asset_url();?>customJs/sweetalert.min.js" type="text/javascript"></script>
</body>
</html>
