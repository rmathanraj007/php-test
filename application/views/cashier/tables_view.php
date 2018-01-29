<link href="<?php echo asset_url();?>customCSS/main.css" rel="stylesheet" type="text/css"/>
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
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
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
          <a href="<?php echo base_url()?>cashier/Tables_Controller">
            <i class="fa fa-table"></i> <span>View Tables</span>
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
                <h3 class="box-title custom-box-title"><strong>VIEW-TABLES</strong></h3>                
            </div>
              <hr class="custom-hr">
            <!-- /.box-header -->
            <?php
                $count = 0;
                $imageArr=array('table-rnd-org.jpg','table-sqr-org.jpg');
                $splitTables=array_chunk($viewTables,'10');
                $countRows=count($splitTables);
                foreach($splitTables as $splitTable){                   
                    echo'<div class="row table-row">';  
                    foreach ($splitTable as $tableData){  
                        if ($count % 2 == 0){
                            $image=$imageArr[0];
                        }else{
                            $image=$imageArr[1];
                        }
                        //$url="".base_url()."cashier/Dish_Controller/viewDish/".$tableData['id']."";
                        echo '<div class="col-md-2 custom-col-md-2">'
                                .'<div class=" text-center">'
                                        .'<a href="javascript:void(0)" onclick="orderTable('.$tableData['id'].')"><img src="'.base_url().'image/'.$image.'" alt="" class="img-responsive">'
                                    .'<div class="caption">'
                                        .'<p class="txt"><b>'.$tableData['table_name'].'</b></p>'
                                    .'</div></a>'
                                .'</div>'
                            .'</div>';
                    }
                    $count++;
                    echo'</div>';
                }
            ?>

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
<script src="<?php echo asset_url();?>customJs/js_cashierOrderTable.js" type="text/javascript"></script>




  


