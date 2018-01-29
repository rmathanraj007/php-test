<link href="<?php echo asset_url();?>customCSS/sweetalert.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.3.1/css/buttons.dataTables.min.css">
<script src="<?php echo asset_url();?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo asset_url();?>bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo asset_url();?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo asset_url();?>plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.flash.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>
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
              <span class="hidden-xs">Zeal Admin</span>
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
          <li class="active treeview">
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
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
            <div id="alert_message"></div>
          <div class="box box-primary">
            <div class="box-header custom-header">
                <h3 class="box-title custom-box-title"><strong>Sales Report</strong></h3>
                <div class="pull-right box-tools SalesReportForm">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-md-4 control-label daterangelabel">Date range</label>
                        <div class="col-md-8">
                            <div class="input-group">   
                              <input type="text" class="form-control pull-right" id="SalesReportrange">
                             </div>
                        </div>
                    </div>
              </div>      
            </div>
              <hr class="custom-hr">
            <!-- /.box-header -->
            <div id="PosSalesTableDiv" class="box-body table-responsive">          
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
<script src="<?php echo asset_url();?>customJs/js_dailyReport.js" type="text/javascript"></script>
<script src="<?php echo asset_url();?>customJs/sweetalert.min.js" type="text/javascript"></script>




  



