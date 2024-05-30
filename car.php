<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Usama CarBook</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
	
		<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
		<link rel="stylesheet" href="css/animate.css">
		
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/owl.theme.default.min.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
	
		<link rel="stylesheet" href="css/aos.css">
	
		<link rel="stylesheet" href="css/ionicons.min.css">
	
		<link rel="stylesheet" href="css/bootstrap-datepicker.css">
		<link rel="stylesheet" href="css/jquery.timepicker.css">
	
		
		<link rel="stylesheet" href="css/flaticon.css">
		<link rel="stylesheet" href="css/icomoon.css">
		<link rel="stylesheet" href="css/style.css">
	  </head>
	  <body>
		
		  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
			<div class="container">
			  <a class="navbar-brand" href="index.html">Usama<span>CarBook</span></a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			  </button>
	
			  <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="home.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	          <!-- <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
	          <li class="nav-item"><a href="pricing.html" class="nav-link">Pricing</a></li> -->
            
	          <li class="nav-item"><a href="car.php" class="nav-link">Cars</a></li>
            <li class="nav-item"><a href="bike.php" class="nav-link">Bike</a></li>

	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            <ul style="display:  flex; gap: 10px;">
            <li class="button-3 icon-user nav-item" > <a  href="login.php" class="nav-links">Login</a></li>
        
            <li class=" button-3  nav-item" > 
              <span class="ion-ios-cart"></span>
              
              <a  href="blog.html" class="nav-links">Cart</a></li>
          </ul>
            
	        </ul>
	      </div>
			</div>
		  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Cars <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Choose Your Car</h1>
          </div>
        </div>
      </div>
    </section>
			
		<section class="ftco-section bg-light">
    	
		
		<div class="container">
    		<div class="row">
			<?php
include 'dbconfig.php';
$sql = "SELECT * FROM `image`";
$result = $conn->query($sql);
if($result->num_rows > 0)
{
  while ($row = $result->fetch_assoc()) 
  {
					
?>
			<div class="col-md-4">			
    				<div class="car-wrap rounded ftco-animate">						
    					<div class="img rounded d-flex align-items-end" style="background-image: url('./image/<?php echo $row['imagename']; ?>');">
    					</div>
    					<div class="text">
    						<h2 class="mb-0"><a href="car-single.html"><?php echo $row['name']; ?></a></h2>
    						<div class="d-flex mb-3">
	    						<p class="price ml-auto">$<?php echo $row['price']; ?> <span>/day</span></p>
    						</div>
    						<p class="d-flex mb-0 d-block"><a href="cardetail.php?id=<?php echo $row['image_id']; ?>" class="btn btn-primary py-2 mr-1">View More</a> </p>
    					</div>
    				</div>
    			</div>   
				<?php
                }
              }
          ?> 			
    		</div>
			
		</div>
		
	</section>
    
	

	<footer class="ftco-footer ftco-bg-dark ftco-section">
		<div class="container">
		  <div class="row mb-5">
			<div class="col-md">
			  <div class="ftco-footer-widget mb-4">
				<h2 class="ftco-heading-2"><a href="#" class="logo">Usama<span>CarBook</span></a></h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
				<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
				  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
				  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
				  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
				</ul>
			  </div>
			</div>
			<div class="col-md">
			  <div class="ftco-footer-widget mb-4 ml-md-5">
				<h2 class="ftco-heading-2">Information</h2>
				<ul class="list-unstyled">
				  <li><a href="about.html" class="py-2 d-block">About</a></li>
				  <li><a href="car.html" class="py-2 d-block">Car</a></li>
				  <li><a href="contact.html" class="py-2 d-block">Contact</a></li>
				  <li><a href="login.html" class="py-2 d-block">Login</a></li>
				  <li><a href="signup.html" class="py-2 d-block">Sign Up</a></li>
				
				</ul>
			  </div>
			</div>
			<!-- <div class="col-md">
			   <div class="ftco-footer-widget mb-4">
				<h2 class="ftco-heading-2">Customer Support</h2>
				<ul class="list-unstyled">
				  <li><a href="#" class="py-2 d-block">FAQ</a></li>
				  <li><a href="#" class="py-2 d-block">Payment Option</a></li>
				  <li><a href="#" class="py-2 d-block">Booking Tips</a></li>
				  <li><a href="#" class="py-2 d-block">How it works</a></li>
				  <li><a href="#" class="py-2 d-block">Contact Us</a></li>
				</ul>
			  </div>
			</div> -->
			<div class="col-md">
			  <div class="ftco-footer-widget mb-4">
				  <h2 class="ftco-heading-2">Have a Questions?</h2>
				  <div class="block-23 mb-3">
					<ul>
					  <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
					  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
					  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
					</ul>
				  </div>
			  </div>
			</div>
		  </div>
		  <div class="row">
			<div class="col-md-12 text-center">
  
			  <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Website is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="#" target="_blank">LJ Boyes</a>
	<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
		  </div>
		</div>
	  </footer>
	  
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>