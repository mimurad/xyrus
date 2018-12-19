<?php

//To Handle Session Variables on This Page
session_start();

$_SESSION['url'] = $_SERVER['REQUEST_URI'];
//Including Database Connection From db.php file to avoid rewriting in all files
require_once("db.php");
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/justifiedGallery.min.css">
	<link rel="stylesheet" href="assets/gallery/style.css">
	<link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
	<link rel="stylesheet" href="assets/bootstrap/css/job/bootstrap.min.css">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>XYRUS</title>
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
  <!-- Custom -->
  <link rel="stylesheet" href="css/custom.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index.php" class="logo ">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b></b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>XYRUS</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
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



  <div class="content-wrapper" style="margin-left: 0px; ">

  <?php
  
    $sql = "SELECT * FROM photographers  WHERE id_company='$_GET[id]'";
    $result = $conn->query($sql);
    if($result->num_rows > 0) 
    {
      while($row = $result->fetch_assoc()) 
      {
  ?>

    <section id="candidates" class="content-header">
      <div class="container">
        <div class="row">          
          <div class="col-md-9 bg-white padding-2">
            <div class="pull-left">
              <h2><b><i><?php echo $row['name']; ?></i></b></h2>
            </div>
            <div class="pull-right">
              <a href="photographers.php" class="btn btn-default btn-lg btn-flat margin-top-20"><i class="fa fa-arrow-circle-left"></i> Back</a>
            </div>
            <div class="clearfix"></div>
            <hr>
            <div>
              <p><span class="margin-right-10"><i class="fa fa-location-arrow text-green"></i> <?php echo $row['city']; ?></span> <i class="fa fa-calendar text-green"></i> <?php echo date("d-M-Y", strtotime($row['createdAt'])); ?></p>              
            </div>
            <div>
              <?php echo stripcslashes($row['companyname']); ?>
            </div>
            <?php 
            if(isset($_SESSION["id_user"]) && empty($_SESSION['companyLogged'])) { ?>
            <div>
              <a href="apply.php?id=<?php echo $row['id_company']; ?>" class="btn btn-success btn-flat margin-top-50">HIRE</a>
            </div>
            <?php } ?>
            
            <section class="mbr-gallery mbr-slider-carousel cid-qJNjOL92xj" id="gallery3-x">

    

    <div><div><!-- Filter --><!-- Gallery -->
		<div id="mygallery">
				  <?php
$files = glob("uploads/photos/$_GET[id]/*.*");
for ($i = 0; $i < count($files); $i++) {
?>
		<div href="#lb-gallery3-x" data-slide-to="<?php echo $i;?>" data-toggle="modal">
		<?php
    $image = $files[$i];
	
	 // show only image name if you want to show full path then use this code // echo $image."<br />";
    echo '<a href="' . $image . '" class="swipeboxExampleImg"><img src="' . $image . '" alt=" " /></a>';
	?>
			</div>
			<?php

}
?>
		</div><!-- Lightbox --><div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery3-x"><div class="modal-dialog"><div class="modal-content"><div class="modal-body"><div class="carousel-inner"><?php $files = glob("uploads/photos/$_GET[id]/*.*");?>
	
		<div class="carousel-item active"><?php echo '<img src="' . $files[0] . '" alt="Random image" />' . "<br /><br />";?></div>
		
<?php for ($i = 1; $i < count($files); $i++) {
?>
		<div class="carousel-item"><a class="carousel-control carousel-control-next" role="button" data-slide="next" href="#lb-gallery3-x"><span class="mbri-right mbr-iconfont" aria-hidden="true"></span><span class="sr-only">Next</span></a>
		<?php
    $image = $files[$i];
	 // show only image name if you want to show full path then use this code // echo $image."<br />";
    echo '<img src="' . $image . '" alt="Random image" />' . "<br /><br />";
	?>
			</div>
			<?php

}?></div><a class="close" href="#" role="button" data-dismiss="modal"><span class="sr-only">Close</span></a></div></div></div></div></div>
    </div>
				
			

</section>
			  
				  
			  
          </div>
          <div class="col-md-3">
            <div class="thumbnail">
              <img src="uploads/logo/<?php echo $row['logo']; ?>" alt="companylogo">
              <div class="caption text-center">
                <h3><?php echo $row['companyname']; ?></h3>
                <p><a href="#" class="btn btn-primary btn-flat" role="button">GALLARY</a>
                <hr>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php 
      }
    }
    ?>

    

  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer" style="margin-left: 0px;">
    <div class="text-center">
      <strong>Copyright &copy; 2017-2018 <a href="">Job Portal</a>.</strong> All rights
    reserved.
    </div>
  </footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
	
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>

<script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/masonry/masonry.pkgd.min.js"></script>
  <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/gallery/player.min.js"></script>
  <script src="assets/gallery/script.js"></script>
  <script src="assets/slidervideo/script.js"></script>
<script src="js/jquery.justifiedGallery.min.js"></script>
	<script>
		
		$("#mygallery").justifiedGallery({
			rowHeight : 140,
    		margins : 2
		});
	</script>

</body>
</html>
