<link href="<?php echo asset_url();?>customCSS/sweetalert.min.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo asset_url();?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo asset_url();?>bootstrap/js/bootstrap.min.js"></script>
<style>
.genderradio{
    margin-top: 6px;
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
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
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
                <img src="<?php echo base_url().'profileImages/'.$this->session->userdata('profileImage');?>" alt="User Image">

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
      <li class="treeview">
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
    <!-- Main content -->
    <section class="content-header">
      <h1>
        User Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>
    
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url().'profileImages/'.$this->session->userdata('profileImage');?>">

              <h3 class="profile-username text-center"><?php echo $this->session->userdata('userName');?></h3>

              <p class="text-muted text-center">Cashier</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Email</b> <a class="pull-right" id="cashierEmail"></a>
                </li>
                <li class="list-group-item">
                  <b>Phone</b> <a class="pull-right" id="cashierPhone"></a>
                </li>
                <li class="list-group-item">
                  <b>Gender</b> <a class="pull-right" id="gender"></a>
                </li>
              </ul>

              <a href="#" class="btn btn-primary btn-block"><b>Basic Info</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">              
              <li class="active"><a href="#timeline" data-toggle="tab" aria-expanded="false">Personal Details</a></li>
              <li class=""><a href="#settings" data-toggle="tab" aria-expanded="false">Change Password</a></li>
            </ul>
            <div class="tab-content">             
              <!-- /.tab-pane -->
               <div class="tab-pane active" id="timeline">
                <form class="form-horizontal" id="profileUpdate" method="post"  enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="firstName" class="col-sm-2 control-label">First Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="firstName" name="firstname" placeholder="First Name">
                    </div>
                  </div>
                    <div class="form-group">
                    <label for="lastName" class="col-sm-2 control-label">Last Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="lastName" name="lastname" placeholder="Last Name">
                    </div>
                  </div> 
                  <div class="form-group">
                    <label for="Email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="Email" name="email" placeholder="Email">
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <label for="phone" class="col-sm-2 control-label">Phone</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="phone" name="mobile" placeholder="Phone">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="gender" class="col-sm-2 control-label">Gender</label>
                    <div class="col-sm-10 genderradio">
                      <input type="radio" name="gender" value='1'> Male
                      <input type="radio" name="gender" value='0'> Female
                    </div>
                  </div>  
                   <div class="form-group">
                         <label for="gender" class="col-sm-2 control-label">Profile Picture</label>
                        <div class="col-sm-10">                                  
                            <input type="file" class="form-control" name="profileImage" id="inputEmail3">
                        </div>                       
                   </div> 
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type="hidden" name="userId" id="userId" value="<?php echo $this->session->userdata('pos_userId'); ?>"> 
                      <button type="submit" class="btn btn-primary" name="Update" value="Update">Update</button>
                    </div>                      
                  </div>
                    <input type="hidden" name="username" id="username">
                </form>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                <form class="form-horizontal" id="changePassword"  method="post">
                  <div class="form-group">
                    <label for="OldPassword" class="col-sm-4 control-label">Old Password</label>

                    <div class="col-sm-6">
                      <input type="password" name="oldPassword" class="form-control" id="OldPassword" placeholder="Old Password">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="NewPassword" class="col-sm-4 control-label">New Password</label>

                    <div class="col-sm-6">
                      <input type="password" class="form-control" id="newPassword" name="newPassword" placeholder="New Password">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="ConfirmPassword" class="col-sm-4 control-label">Confirm Password</label>

                    <div class="col-sm-6">
                      <input type="password" class="form-control" id="ConfirmPassword" name="cPassword" placeholder="Confirm Password">
                    </div>
                  </div>                 
                  <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-6">
                       <input type="hidden" name="userId"  value="<?php echo $this->session->userdata('pos_userId'); ?>"> 
                      <button type="submit" class="btn btn-primary" name="changePassword">Change</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
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
      <strong>Developed By <a href="http://www.zealitech.com/">Zealitech Solutions<a> © 2017</a>.</strong> 
  </footer>

</div>
<!-- jQuery 2.2.3 -->

<!-- DataTables -->


<!-- SlimScroll -->
<script src="<?php echo asset_url();?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo asset_url();?>plugins/daterangepicker/daterangepicker.js"></script>
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
<script src="<?php echo asset_url();?>customJs/js_Profile.js" type="text/javascript"></script>
<script src="<?php echo asset_url();?>customJs/sweetalert.min.js" type="text/javascript"></script>




  




