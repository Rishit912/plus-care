<?php
session_start();
	if(!$_SESSION['email']){
		header("location:login2.php");
	}
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
<title>plus care</title>
<!-- for-meta-tags-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Health Plus Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-meta-tags-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
			<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Raleway:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900" rel="stylesheet">
</head>
	
<body>
<div class="main" id="home">
<!-- banner -->
<div class="header_agileinfo">
						<div class="w3_agileits_header_text">
								<ul class="top_agile_w3l_info_icons">
									<li><i class="fa fa-home" aria-hidden="true"></i>
									<a href='login2.php'>Login</a>
								</li>
									<li class="second"><i class="fa fa-phone" aria-hidden="true"></i>(+91)6353726488</li>
									
									<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:maria@example.com">pluscare108@gmail.com</a></li>
								</ul>

						</div>
						<div class="agileinfo_social_icons">
							<ul class="agileits_social_list">
								<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								<li><a href="#" class="w3_agile_rss"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>
			</div>				

		<div class="header-bottom">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <div class="logo">
						<h1><img src="images\logo.jpeg" alt="" height="100" width="200"></h1>
					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
				<?php include("user_menu.php");?>
				</div>
				<!-- /.navbar-collapse -->
			</nav>
	 </div>
</div>
<!-- banner -->
<!-- banner1 -->
	<div class="banner1 jarallax">
		<div class="container">
		</div>
	</div>

	<div class="services-breadcrumb">
		<div class="container">
			<ul>
				<li><a href="index.php">Appointment</a><i>|</i></li>
				<li>Home</li>
			</ul>
		</div>
	</div>
<!-- //banner1 -->
<!-- icons -->
	<div class="banner-bottom" id="about">
		<div class="container">
					<h2 class="w3_heade_tittle_agile">Appointment</h2>
		<?php
		if(isset($_GET['msg']))
		{
			print "<h2 class='w3_heade_tittle_agile'>Thank you from book your Appointment</h2>";
		}
		?>
		
					<div class="book-appointment">
						<h4>Make an appointment</h4>
								<form action="appointment_code.php" method="post">
								<div class="left-agileits-w3layouts same">
								<div class="gaps">
									<p>Patient Name</p>
										<input type="text" name="P_name" placeholder="" required=""/>
								</div>	
									<div class="gaps">	
									<p>Phone Number</p>
										<input type="text" name="P_no" placeholder="" required=""/>
									</div>
									<div class="gaps">
									<p>Age</p>
										<input type="text" min="0" max="100" name="Age" placeholder="" required=""/>
								</div>
								<div class="gaps">
									<p>City</p>
										<input type="text" name="City" placeholder="" required=""/>
								</div>
									<div class="gaps">
									<p>Email</p>
											<input type="email" name="Email" placeholder="" required="" />
									</div>	
								</div>
								<div class="right-agileinfo same">
								<div class="gaps">
									<p>Select Date</p>		
											<input type="date" id="date"   name="date"    required>
								</div>
								<div class="gaps">
									<p>department</p>
										<select class="option" id="country-dropdown" name="Department">
											<?php 
											 include("connect.php");
       									$q="select * from  department";
											$rs=mysqli_query($conn,$q);
											while($row=mysqli_fetch_array($rs))
											{ ?>
											   
											<option value="<?php print $row[1];?>"><?php print $row[0];?></option>
											<?php } ?>
											</select>
								</div>
								<div class="gaps">
<p>doctor</p>
<select class="form-control" id="state-dropdown">
</select>
</div>
								<div class="gaps">
									<p>Gender</p>	
										<select name="Gender" class="option">
											<option>Male</option>
											<option>Female</option>
										</select>
								</div>
								<div class="gaps">
									<p>Time</p>		
										<input type="text" id="timepicker" name="Time" class="timepicker option" value="">	
								</div>
								<div class="gaps">
									<p>Symptoms</p>
											<textarea name="AboutSymptoms" placeholder="" required="" ></textarea>
									</div>
								</div>
								<div class="clearfix"></div>
											  <input type="submit" value="Make an Appointment">	
											  	  
								</form>
							</div>
	</div>
		</div>
	</div>
<!-- icons -->

<!-- footer -->
	<div class="footer">
		<div class="container">
			<h4>Subscribe to <span>Newsletter</span></h4>
			<form action="#" method="post">
				<input type="email" name="Email" placeholder="Enter Your Email..." required="">
				<input type="submit" value="Send">
			</form>
			<div class="agile_footer_copy">
				<div class="w3agile_footer_grids">
					<div class="col-md-4 w3agile_footer_grid">
						<h3>About Us</h3>
						<p>Our hospital give best service to patients<span>hospital, an institution that is built, staffed, and equipped for the diagnosis of disease; 
                            for the treatment, both medical and surgical, of the sick and the injured; and for their housing during this process <span> modern hospital also 
                            often serves as a centre for investigation and for teaching.</span></p>
					</div>
					<div class="col-md-4 w3agile_footer_grid">
						<h3>Contact Info</h3>
						<ul>
							<li><i class="fa fa-map-marker" aria-hidden="true"></i>PMF9+FXH, Nr. Boda Talav, GIDC Area <span>Wadhawan City, Gujarat 363030</span></li>
							<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:info@example.com">pluscare108@gmail.com</a></li>
							<li><i class="fa fa-phone" aria-hidden="true"></i>+916353726488</li>
						</ul>
					</div>
					<div class="col-md-4 w3agile_footer_grid w3agile_footer_grid1">
						<h3>Navigation</h3>
						<ul>
							<li><span class="fa fa-long-arrow-right" aria-hidden="true"></span><a href="gallery.php">Department</a></li>
							<li><span class="fa fa-long-arrow-right" aria-hidden="true"></span><a href="appointment.php">Appointment</a></li>
							<li><span class="fa fa-long-arrow-right" aria-hidden="true"></span><a href="about.php">About</a></li>
							<li><span class="fa fa-long-arrow-right" aria-hidden="true"></span><a href="contact.php">Contact Us</a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="w3_agileits_copy_right_social">
				<div class="col-md-6 agileits_w3layouts_copy_right">
					<p>&copy; plus care. All rights reserved | Design by renish pirani, Rishit dangi, Jainam sanghavi</a></p>
				</div>
				<div class="col-md-6 w3_agile_copy_right">
					<ul class="agileits_social_list">
								<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								<li><a href="#" class="w3_agile_rss"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
							</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //footer -->
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
 <!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="js/wickedpicker.js"></script>
			<script type="text/javascript">
				$('.timepicker').wickedpicker({twentyFour: false});
			</script>
		<!-- Calendar -->
				<script src="js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->

<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
				 Plus care
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<img src="images/g9.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->
<!-- start-smoth-scrolling -->
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
<!-- start-smoth-scrolling -->
			<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
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
			
			var today = new Date();
  var yesterday = new Date(today);
  yesterday.setDate(today.getDate() - 1);
  var formattedDate = yesterday.toISOString().substring(0, 10);
  document.getElementById("date").value = formattedDate;
  </script>
  
<script>
$(document).ready(function() {
$('#country-dropdown').on('change', function() {
var country_id = this.value;
$.ajax({
url: "states-by-country.php",
type: "POST",
data: {
country_id: country_id
},
cache: false,
success: function(result){
$("#state-dropdown").html(result);
$('#city-dropdown').html('<option value="">Select State First</option>'); 
}
});
}); 
})
</script>

<script language="javascript">
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();

        today = yyyy + '-' + mm + '-' + dd;
        $('#date').attr('min',today);
    </script>
<!-- //here ends scrolling icon -->
</body>
</html>