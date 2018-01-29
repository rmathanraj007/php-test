<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Invoice | Log-In</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo asset_url();?>bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo asset_url();?>dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo asset_url();?>plugins/iCheck/square/blue.css">
  <link href="<?php echo asset_url();?>customCSS/parsley.css" rel="stylesheet" type="text/css"/>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="<?php base_url();?>"><b>IMAT</b> | Invoice</a>
    </div> 
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
    <p class="parsley-required text-center no-users-error" style="margin-top: 0px !important; display: none">username or password incorrect<br></p>
    <form id="loginForm" action="<?php echo base_url()?>home/loginProcess" method="post">
      <div class="form-group has-feedback">
          <input type="text" name="username" id='username' class="form-control" placeholder="username" required="" data-parsley-errors-container="#usernameError">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
        <div id="usernameError"></div>
      <div class="form-group has-feedback">
          <input type="password" name="password" id='password' class="form-control" placeholder="Password" required="" data-parsley-errors-container="#passwordError">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div id="passwordError"></div>
      <div class="row">
        <!-- /.col -->
        <div class=" col-xs-offset-8 col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" id="loginSubmit">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<script src="<?php echo asset_url();?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="<?php echo asset_url();?>bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo asset_url();?>customJs/parsley.min.js" type="text/javascript"></script>
<script src="<?php echo asset_url();?>customJs/js_login.js" type="text/javascript"></script>

</body>
</html>
