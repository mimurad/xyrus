<?php

//To Handle Session Variables on This Page
session_start();

//Including Database Connection From db.php file to avoid rewriting in all files
require_once("db.php");

?>

<!DOCTYPE html>
<html>
<head>
	
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/xyrus-fb-dp-1000x1000.png" type="image/x-icon">
  <meta name="description" content="">
  <title>XYRUS</title>
	
	<!--css stylesheets -->
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
 <link rel="stylesheet" href="css/mrdcss.css" type="text/css">
	
</head>
	
	
<body>
	  <section class="menu cid-qJ03x6vbJv" once="menu" id="menu1-e">

    <!-- Navigation bar-->

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.php">
                         <img src="assets/images/xyrus-fb-dp-1000x1000.png" alt="XYRUS" title="" style="height: 3.8rem;">
                    </a>
                </span>
                
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-white display-4" href="photographers.php">
                        Find Photographers</a>
                </li>
				<li class="nav-item"><a class="nav-link link text-white display-4" href="#HIW">
                        How It Works</a></li>
				<li class="nav-item"><a class="nav-link link text-white display-4" href="#about"> About Us</a></li>
				
				<!-- Only visible if logged in -->
				
				<?php if(empty($_SESSION['id_user']) && empty($_SESSION['id_company'])) { ?>
          
            <li class="nav-item"><a class="nav-link link text-white display-4" href="login.php">
                        Log In</a></li>
          
          <li class="nav-item"><a class="nav-link link text-white display-4" href="sign-up.php">
                        Sign Up</a></li></ul> 
          <?php } else { 

            if(isset($_SESSION['id_user'])) { 
          ?> 
			<!-- Only visible if user is logged in  --> 
			
			<li class="nav-item"><a class="nav-link link text-white display-4" href="user/index.php">
                        Dashboard</a></li>
          
          <?php
          } else if(isset($_SESSION['id_company'])) { 
          ?>
			<!--only visible if photographer logged in-->
			
			<li class="nav-item"><a class="nav-link link text-white display-4" href="photographers/index.php">
                        Dashboard</a></li>
          
          <?php } ?>
		<li class="nav-item"><a class="nav-link link text-white display-4" href="logout.php">
                        Logout</a></li>
          
          <?php } ?>
				
            
        </div>
    </nav>
</section>

	<!--Cover container -->
	
<section class="cid-qJ03xejNfX mbr-fullscreen mbr-parallax-background" id="header2-f">

    

    

    <div class="container align-center">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1"><span style="font-weight: normal;">
                    All</span> Photographers <span style="font-weight: normal;">in One Place</span></h1>
                
                <p class="mbr-text pb-3 mbr-fonts-style display-5">Find Your Nearest Photographers</p>
                <div class="mbr-section-btn" style="opacity:.8"><a class="btn btn-md btn-secondary display-4" href="photographers.php">Search Photographers</a></div>
            </div>
        </div>
    </div>
    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>

<section id="HIW" class="features1 cid-qJ05Z38XGS" id="features1-j"style="opacity:.9">
    
<!--HOW IT WORKS SECTION -->    

    
    <div class="container">
		
		<div class="text-center">
					           <h1>HOW IT WORKS?</h1>
					    </div>
		<br>
        <div class="media-container-row">

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-img pb-3">
                    <span class="mbr-iconfont mbri-search" style="color: rgb(255, 255, 255);"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5">
                        Search                </h4>
                    <p class="mbr-text mbr-fonts-style display-7">The place where you can hire the best professional photographers/ videographers around the world or you can become a successful one.</p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-img pb-3">
                    <span class="mbr-iconfont mbrib-cursor-click" style="color: rgb(255, 255, 255);"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5">Book</h4>
                    <p class="mbr-text mbr-fonts-style display-7">Book photographers/videographers that best suits your taste . You can see their profile their feild of expertise or sample photos to choose the best photographers that your mood demands.</p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-4">
                <div class="card-img pb-3">
                    <span class="mbr-iconfont mbri-smile-face" style="color: rgb(255, 255, 255);"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5">Create Memories</h4>
                    <p class="mbr-text mbr-fonts-style display-7">The rest is our headache. You better rest!!! and create your beautiful . We will take care of what you wish for.</p>
                </div>
            </div>

            

        </div>

    </div>

</section>
	
<!--Recent photogrphers shows last four registered photogrpher -->

<section class="features3 cid-qJ0wyRPXu5" id="features3-w">

    
	<br><br>
	<div class="text-center">
					           <h1>RECENT PHOTOGRAPHERS</h1>
					    </div>
		<br>
	<br><br>
    
    <div class="container">
		
        <div class="media-container-row">
			
			<?php 
          
          $sql = "SELECT * FROM photographers Order By id_company DESC Limit 4";
          $result = $conn->query($sql);
          if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) 
            {
              $sql1 = "SELECT * FROM photographers WHERE id_company='$row[id_company]'";
              $result1 = $conn->query($sql1);
              if($result1->num_rows > 0) {
                while($row1 = $result1->fetch_assoc()) 
                {
             ?>
			
            <div class="card p-5 col-12 col-md-6 col-lg-3">
				
                <div class="card-wrapper">
                    <div class="album-thumbnails">
                        <?php $image=$row['logo'];
					
				echo '<a href="view-job-post.php?id='.$row['id_company'].'"><img  src="uploads/logo/'.$image.'"></a>';
					?>
                    </div>
					<br><br>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-7">
                            <a href="view-job-post.php?id=<?php echo $row['id_company']; ?>"><?php echo $row['name']; ?></a> 
                        </h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                            <?php echo $row['city']; ?> | <?php echo $row1['companyname']; ?> | <?php echo $row1['state']; ?> | <?php echo $row['website']; ?>
                        </p>
                    </div>
                    
                </div>
				
            </div>

          <?php
              }
            }
            }
          }
          ?>  
            
        </div>
    </div>
	<br><br><br><br>
</section>

	
	
<section id="about" class="cid-qJ03xl1f3y" id="footer1-g">

   <!--About section shows some information about us and provides link to our social sites --> 

    

    <div class="container">
        <div class="media-container-row content text-white">
            
            <div class="col-12 col-md-4 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    About</h5>
                <p class="mbr-text">XYRUS is world's very first one stop and on demand solution for hiring best professional photographers/ videographers around the world or you can become a successful one.
<br>
				<br><br><br></p>
            </div>
			<div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3"></h5>
                <p class="mbr-text"></p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Contacts
                </h5>
                <p class="mbr-text">
                    Email: xyrus.ram@gmail.com<br>Phone: +8801912885886        <br><br></p>
            </div>
            
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-sm-6 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">
                        Copyright © 2017-2018 XYRUS. All rights reserved.                     </p>
                </div>
                <div class="col-md-6">
                    <div class="social-list align-right">
                        <div class="soc-item">
                            <a href="https://twitter.com/mobirise" target="_blank">
                                <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                                <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.youtube.com/c/mobirise" target="_blank">
                                <span class="socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://instagram.com/mobirise" target="_blank">
                                <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://plus.google.com/u/0/+Mobirise" target="_blank">
                                <span class="socicon-googleplus socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.behance.net/Mobirise" target="_blank">
                                <span class="socicon-behance socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--javascript code to select photos natural size and makes thumbnail according the natural size -->
<script>
	document.addEventListener("DOMContentLoaded", function(event) {

		var addImageOrientationClass = function(img) {
			if (img.naturalHeight > img.naturalWidth) {
				img.classList.add("portrait");
			}
			else if(img.naturalHeight == img.naturalWidth){
				img.classList.add("square");
			}
		}

		// Add "portrait" class to thumbnail images that are portrait orientation
		var images = document.querySelectorAll(".album-thumbnails img");
		for (var i = 0; i < images.length; i++) {
			if (images[i].complete) {
				addImageOrientationClass(images[i]);
			} else {
				images[i].addEventListener("load", function(evt) {
					addImageOrientationClass(evt.target);
				});
			}
		}

	});
</script>
	
	<!--This javascripts are for page beautification -->
  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/ytplayer/jquery.mb.ytplayer.min.js"></script>
  <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/slidervideo/script.js"></script>
  
</body>
</html>
