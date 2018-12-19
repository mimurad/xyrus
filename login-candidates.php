<?php
session_start();
	

if(isset($_SESSION['id_user']) || isset($_SESSION['id_company'])) { 
  header("Location: index.php");
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Xyrus</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/AdminLTE.min.css">
	<link rel="stylesheet" href="css/_all-skins.min.css">
	<link rel="stylesheet" href="css/custom.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
	
	
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index.php" class="logo ">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>X</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>XYRUS</b> </span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li>
            <a href="photographers.php">Photographers</a>
          </li>
          <?php if(empty($_SESSION['id_user']) && empty($_SESSION['id_company'])) { ?>
          <li>
            <a href="login.php">Login</a>
          </li>
          <li>
            <a href="sign-up.php">Sign Up</a>
          </li>  
          <?php } else { 

            if(isset($_SESSION['id_user'])) { 
          ?>        
          <li>
            <a href="user/index.php">Dashboard</a>
          </li>
          <?php
          } else if(isset($_SESSION['id_company'])) { 
          ?>        
          <li>
            <a href="photographers/index.php">Dashboard</a>
          </li>
          <?php } ?>
          <li>
            <a href="logout.php">Logout</a>
          </li>
          <?php } ?>          
        </ul>
      </div>
    </nav>
  </header>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-left: 0px;">

    <section class="content-header">
      <div class="container">
        <div class="row latest-job margin-top-50 margin-bottom-20">
         
          <div class="login-box" style="opacity:.8">
  <div class="login-logo">
    <a href="index.php" style="background: -webkit-linear-gradient(#e12126, #e4373c);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent"><b>XYRUS</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">User Login</p>

    <form method="post" action="checklogin.php">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <a href="#">I forgot my password</a>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <br>

    <?php 
    //If User have successfully registered then show them this success message
    //Todo: Remove Success Message without reload?
    if(isset($_SESSION['registerCompleted'])) {
      ?>
      <div>
        <p id="successMessage" class="text-center">Check your email!</p>
      </div>
    <?php
     unset($_SESSION['registerCompleted']); }
    ?>   
    <?php 
    //If User Failed To log in then show error message.
    if(isset($_SESSION['loginError'])) {
      ?>
      <div>
        <p class="text-center">Invalid Email/Password! Try Again!</p>
      </div>
    <?php
     unset($_SESSION['loginError']); }
    ?>      

    <?php 
    //If User Failed To log in then show error message.
    if(isset($_SESSION['userActivated'])) {
      ?>
      <div>
        <p class="text-center">Your Account Is Active. You Can Login</p>
      </div>
    <?php
     unset($_SESSION['userActivated']); }
    ?>    

     <?php 
    //If User Failed To log in then show error message.
    if(isset($_SESSION['loginActiveError'])) {
      ?>
      <div>
        <p class="text-center"><?php echo $_SESSION['loginActiveError']; ?></p>
      </div>
    <?php
     unset($_SESSION['loginActiveError']); }
    ?>   

  </div>
  <!-- /.login-box-body -->
</div>
          
        </div>
      </div>
    </section>

    

  </div>
  <!-- /.content-wrapper -->

   <footer class="main-footer" style="margin-left: 0px;">
    <div class="text-center">
      <strong>Copyright &copy; 2017-2018 <a href="">XYRUS</a>.</strong> All rights
    reserved.
    </div>
  </footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
</body>
</html>
