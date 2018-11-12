<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php  
 
 include '../admin/connection.php';
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Grilling a Hotels and Restaurants Category Flat Bootstrap Responsive website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Grilling Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">  
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" /> 
<link rel="stylesheet" href="css/swipebox.css">
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script> 
<!-- //js -->
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Cinzel+Decorative:400,700,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- //web-fonts -->
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
		
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!-- //end-smooth-scrolling -->	
</head>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="header"><!-- header -->
			<div class="container">		
				<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a  href="#">Restaurant</a></h1>
					</div>
					<!-- navbar-header -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="index.html" class="active">Home</a></li>
							<li><a href="#about" class="scroll">About</a></li>
							<li><a href="#menu" class="scroll">Menu</a></li>
							<li><a href="#team" class="scroll">Team</a></li>
							<li><a href="#gallery" class="scroll">Gallery</a></li>
							<li><a href="#contact" class="scroll">Contact Us</a></li>
						</ul>	
						<div class="clearfix"> </div>	
					</div>
				</nav>
			</div> 
		</div>
		<!-- //header -->
		<!-- banner-text -->
		<div class="banner-text"> 
			<div class="flexslider">
				<ul class="slides">
					<li>
						<h2>AMAZING  </h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipi est Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias phasellus mattis tellus .</p>
						<a href="#" class="more" data-toggle="modal" data-target="#myModal">Book a Table</a>  
					</li>
					<li>
						<h3>GRILLING</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipi est Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias phasellus mattis tellus .</p>
						<a href="#" class="more" data-toggle="modal" data-target="#myModal">Book a Table</a>  
					</li>
					<li>
						<h3>RECIPES </h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipi est Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias phasellus mattis tellus .</p>
						<a href="#" class="more" data-toggle="modal" data-target="#myModal">Book a Table</a>  
					</li>
				</ul>
			</div>  
			<!-- modal -->
            <div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header"> 
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
							<h4 class="modal-title">Make Your Reservation Now</h4>
						</div> 
						<div class="modal-body book-form">
							<form action="#" method="post">
								<div class="phone_email">
									<label>Full Name : </label>
									<div class="form-text">
										<span class="fa fa-user" aria-hidden="true"></span>
										<input type="text" name="Name" placeholder="Name" required="">
									</div> 
								</div>
								<div class="phone_email phone_email1">
									<label>Email : </label>
									<div class="form-text">
										<span class="fa fa-envelope" aria-hidden="true"></span>
										<input type="text" name="email" placeholder="Email" required="">
									</div>
								</div>
								<div class="phone_email">
									<label>Phone Number : </label>
									<div class="form-text">
										<span class="fa fa-phone" aria-hidden="true"></span>
										<input type="text" name="Phone no" placeholder="Phone no" required="">
									</div> 
								</div> 
								<div class="phone_email phone_email1">
									<label>Address : </label>
									<div class="form-text">
										<span class="fa fa-map-marker" aria-hidden="true"></span>
										<input type="text" name="address" placeholder="Your Address" required="">
									</div> 
								</div> 
								<div class="clearfix"></div>
								<div class="agileits_reservation_grid">
									<div class="span1_of_1">
										<label>Date : </label> 
										<div class="book_date"> 
											<span class="fa fa-calendar" aria-hidden="true"></span>
											<input class="date" id="datepicker" type="text" name="date" placeholder="mm/dd/yyyy" required="">
										</div>					
									</div>
									<div class="span1_of_1">
										 
										<!-- start_section_room -->
										<label>Meal : </label>
										<div class="section_room">
											<span class="fa fa-clock-o" aria-hidden="true"></span>
											<select id="country" onchange="" class="frm-field required">
												<option>select meal</option>
												<?php 

                                          $sql="SELECT * FROM meal";
                                          $query=mysqli_query($connection,$sql);
                                          while($row=mysqli_fetch_array($query)){
                                          ?>
												
												<?php echo "<option value='".$row['Meal_Name']."'>". $row['Meal_Name']."</option>";  
                                               }
												?>      
												 
											</select>
										</div>	
									</div>
									<div class="span1_of_1">
										<label>No.of Plate : </label>
										<!-- start_section_room -->
										<div class="section_room">
											<span class="fa fa-users" aria-hidden="true"></span>
											<input type="text" name="Phone no" placeholder="No. Of Plate" required="">
										</div>	
									</div> 
									<div class="clearfix"></div>
								</div> 
								<div class="clearfix"></div>
								<div class="agileits_reservation_grid">
									<div class="span1_of_1">
										<label>Cost : </label> 
										<div class="book_date"> 
											<span class="fa fa-money" aria-hidden="true"></span>
											<input type="text" name="Cost" placeholder="Cost" required=""> 
										</div>					
									</div>
									 
									 <div class="clearfix"></div>
								<input type="submit" value="Book Now" />
							</form>
						</div>
								 
						</div>
						<!-- Calendar -->
						<link rel="stylesheet" href="css/jquery-ui.css" />
						<script src="js/jquery-ui.js"></script>
						<script>
								$(function() {
									$( "#datepicker" ).datepicker();
								});
						</script>
						<!-- //Calendar -->  
					</div>
				</div>
			</div>
			<!-- //modal -->  
			<!-- FlexSlider -->
			<script defer src="js/jquery.flexslider.js"></script>
			<script type="text/javascript">
			$(window).load(function() {
			  $('.flexslider').flexslider({
				animation: "slide",
				controlsContainer: $(".custom-controls-container"),
				customDirectionNav: $(".custom-navigation a")
			  });
			});
			</script>
			<!-- //FlexSlider -->
		</div> 
		<!-- //banner-text --> 
	</div>
	<!-- //banner --> 
	<!-- welcome --> 
	<div id="about" class="welcome"> 
		<div class="container">
			<div class="agile-title">
				<h3> Welcome !</h3>
			</div>
			<div class="w3ls-row">
				<div class="col-md-6 welcome-left">
					<div class="welcome-img">
						<img src="images/img1.jpg" class="img-responsive zoom-img" alt=""/>
					</div>
					<div class="col-md-6 welcome-left-grids">
						<div class="welcome-img">
							<img src="images/img2.jpg" class="img-responsive zoom-img" alt=""/>
						</div>
					</div>
					<div class="col-md-6 welcome-left-grids">
						<div class="welcome-img">
							<img src="images/img3.jpg" class="img-responsive zoom-img" alt=""/>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 welcome-right"> 
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt lorem sed velit fermentum lobortis. Fusce eu semper lacus, eget placerat mauris. Sed lectus tellus, sodales id elit a, feugiat porttitor nulla. Sed porta magna vitae nisl vulputate lacinia. Morbi malesuada sollicitudin tortor, vitae pharetra nunc lacinia eget. Nulla ornare purus nunc, ut dapibus leo sodales adipiscing. Praesent sit amet justo diam. Quisque sagittis egestas sem vitae vestibulum. Quisque nec lacus ornare, volutpat arcu in lacinia dolor Itaque earum rerum hic tenetur a sapiente delectus . </p>
					<div class="open-hours-row">
						<div class="col-md-3 open-hours-left">
							<h4>OPENING HOURS </h4>
						</div>
						<div class="col-md-3 open-hours-left">
							<h6>BREAKFAST</h6>
							<h5>7am - 12am</h5> 
						</div>
						<div class="col-md-3 open-hours-left">
							<h6>MAIN MENU</h6>
							<h5>12am - 12pm</h5> 
						</div>
						<div class="col-md-3 open-hours-left">
							<h6>SPECIALS</h6>
							<h5>8pm - 11pm</h5> 
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div> 
		</div>
	</div>
	<!-- //welcome --> 
	<!-- slid -->
	<div class="slid">
		<div class="container">
			<h4>Today Special</h4>
			<h5>50% <span>Offer</span></h5>
			<p>In malesuada accumsan felis, a imperdiet arcu blandit sed. Ut id faucibus eros. Fusce sed vulputate dui, non consectetur felis. Etiam id enim sem. Suspendisse commodo tempor magna </p>
		</div> 
	</div>
	<!-- //slid -->
	<!-- menu -->
	<div id="menu" class="menu">  
		<div class="container">
			<div class="agile-title">
				<h3> Our Menu</h3>
			</div>
			<ul class="accordion"> 
				<li class="slide-01">
					<div class="menu-left">
						<img src="images/m1.jpg" alt=""/>
						<div class="menu-right">
							<h4>Blandit sed </h4>
							<h5>$20 </h5>
							<p>In malesuada accumsan felis, a imperdiet arcu blandit sed. Ut id faucibus eros. Fusce sed vulputate dui, non consectetur felis </p>
						</div>
					</div>  
				</li> 
				<li class="slide-02">
					<div class="menu-left">
						<img src="images/m2.jpg" alt=""/>
						<div class="menu-right">
							<h4>Faucibus </h4>
							<h5>$15 </h5>
							<p>In malesuada accumsan felis, a imperdiet arcu blandit sed. Ut id faucibus eros. Fusce sed vulputate dui, non consectetur felis </p>
						</div>
					</div>  
				</li> 
				<li class="slide-03">
					<div class="menu-left">
						<img src="images/m3.jpg" alt=""/>
						<div class="menu-right">
							<h4>Vulputate </h4>
							<h5>$50 </h5>
							<p>In malesuada accumsan felis, a imperdiet arcu blandit sed. Ut id faucibus eros. Fusce sed vulputate dui, non consectetur felis </p>
						</div>
					</div>
				</li> 
				<li class="slide-04">
					<div class="menu-left">
						<img src="images/m4.jpg" alt=""/>
						<div class="menu-right">
							<h4>Fusce sed </h4>
							<h5>$60 </h5>
							<p>In malesuada accumsan felis, a imperdiet arcu blandit sed. Ut id faucibus eros. Fusce sed vulputate dui, non consectetur felis </p>
						</div>
					</div>
				</li> 
				<li class="slide-05">
					<div class="menu-left">
						<img src="images/m5.jpg" alt=""/>
						<div class="menu-right">
							<h4>Imperdiet ero</h4>
							<h5>$36 </h5>
							<p>Fusce sed vulputate dui, non consectetur felis In malesuada accumsan felis, a imperdiet arcu blandit sed ut id faucibus. </p>
						</div>
					</div>
				</li> 
			</ul>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //menu -->
	<!-- team -->
	
	<!-- //team -->
	<!-- gallery -->
	 
	<!-- address -->
	<div id="contact" class="address"> 
		<div class="container">
			<div class="agile-title">
				<h3> Contact Us</h3>
			</div>
			<ul>
				<li><i class="fa fa-map-marker" aria-hidden="true"></i>Broome St, Canada, NY 10002, New York</li>
				<li><i class="fa fa-phone" aria-hidden="true"> </i>  +01 111 222 3333</li>
				<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com"> mail@example.com</a></li>
			</ul>
		</div>
	</div>
	<!-- //address -->
	<!-- contact -->
	<div class="contact">
		<div class="col-md-6 contact-left">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57537.641430789925!2d-74.03215321337959!3d40.719122105634035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1456152197129" allowfullscreen=""></iframe>
		</div>
		<div class="col-md-6 contact-right">
			<div class="wthree-contact-row">
				<h4>Get In TOuch</h4> 
				<form action="#" method="post">
					<input type="text" name="Name" placeholder="Name" required="">
					<input class="email" type="text" name="Email" placeholder="Email" required="">
					<textarea placeholder="Message" name="Message" required=""></textarea>
					<input type="submit" value="SUBMIT">
				</form>  
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!-- //contact -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="social-icon">
				<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
				<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
				<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a> 
				<a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a>
				<a href="#" class="social-button skype"><i class="fa fa-skype"></i></a>
			</div>
			<p>© 2016 Grilling. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
		</div>
	</div>
	<!-- //footer -->	 
	<!-- swipe box js -->
	<script src="js/jquery.swipebox.min.js"></script> 
	<script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
	</script>
	<!-- //swipe box js --> 
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->  
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>