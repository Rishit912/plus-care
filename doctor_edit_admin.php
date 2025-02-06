<?php 
	include ("admin_header.php");
	include ("connect.php");
    $D_id = $_GET['D_id'];
	$q = "select * from doctor";
	$res = mysqli_query($conn,$q);
	$data = mysqli_fetch_assoc($res);
?>
<!-- banner -->
<!-- banner1 -->
	<div class="banner1 jarallax">
	<div class="container">
	<br>
		<br>
		<br>
		<br>	
		<br>
		<br>
	<h1 style="color:white;text-align: center;">Add Doctor</h1>
		</div>
	</div>
	<div class="container">

	<div class="services-breadcrumb">
		<div class="container">
		
			<ul>
			</ul>
		</div>
	</div>
<!-- //banner1 -->
<form action="doctor_edit_admin_code.php" enctype="multipart/form-data" method="post">
<!-- <label for="exampleInputname" class="form-label">D_id </label><br>
<input type="text" name="D_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> -->
<div class="mb-3">
<label for="exampleInputmobilNumber" class="form-label">Doctor Name</label><br>
<input type="text" name="D_name" class="form-control" id="exampleInputEmail1" value="<?php echo $data['D_name'];?>" aria-describedby="emailHelp">
<label for="exampleInputlangvage" class="form-label">Doctor MobileNo</label><br>
<input type="text" name="Doctor_mobileNo" class="form-control" value="<?php echo $data['Doctor_mobileno'];?>" id="exampleInputEmail1" aria-describedby="emailHelp">
     <label for="birthdate">Birthdate</label>
<input type="date" name="birthdate" class="form-control" value="<?php echo $data['Birthdate'];?>" id="birthdate" onchange="calculateAge()">
<label for="age">Age</label>
<input type="text" name="age" class="form-control" value="<?php echo $data['Age'];?>" id="age">
<script>
function calculateAge() {
  var birthdate = new Date(document.getElementById("birthdate").value);
  var today = new Date();
  var age = today.getFullYear() - birthdate.getFullYear();
  var m = today.getMonth() - birthdate.getMonth();
  if (m < 0 || (m === 0 && today.getDate() < birthdate.getDate())) {
    age--;
  }
  document.getElementById("age").value = age;
}
</script>	
<label for="Gender">Gender</label>
<select name="Gender" class="form-control" id="Gender">
  <option value="volvo">male</option>
  <option value="saab">Female</option>
  <option value="mercedes">Outher</option> 
</select></div>
<input type="hidden" name="D_id" value='<?php print $D_id;?>'>
<label for="exampleInputaddharnumber" class="form-label">Language</label><br>
<input type="text" class="form-control" value="<?php echo $data['Language'];?>" name="Language" id="exampleInputEmail1" aria-describedby="emailHelp">
<label for="exampleInputcity" class="form-label">Email</label><br>
<input type="text" class="form-control" name="Email" value="<?php echo $data['Email'];?>" id="exampleInputEmail1" aria-describedby="emailHelp">
<label for="exampleInputpincode" class="form-label">Bloodgroup</label><br>
<input type="text" class="form-control" name="Bloodgroup" value="<?php echo $data['Bloodgroup'];?>" id="exampleInputEmail1" aria-describedby="emailHelp">
<label for="exampleInputaddres" class="form-label">AadhaarCardNo</label><br>
<input type="text" class="form-control" name="AadhaarCardNo" value="<?php echo $data['AadhaarCardno'];?>" id="exampleInputEmail1" aria-describedby="emailHelp">
<label for="exampleInputaddres" class="form-label">City</label>
<input type="text" class="form-control" name="City" id="exampleInputEmail1" value="<?php echo $data['City'];?>" aria-describedby="emailHelp">
<label for="exampleInputspecilization" class="form-label">Pincode</label>
<input type="text" class="form-control" name="Pincode" value="<?php echo $data['PIncode'];?>" id="exampleInputEmail1" aria-describedby="emailHelp">
<label for="exampleInputexperince" class="form-label">Address</label><br>
<input type="text" class="form-control" name="Address" value="<?php echo $data['Address'];?>" id="exampleInputEmail1" aria-describedby="emailHelp">
<!-- <label for="exampleInputspecilization" class="form-label">Department</label><br>
<input type="text" class="form-control" name="Department" id="exampleInputEmail1" aria-describedby="emailHelp"> -->
<label for="exampleInputspecilization" class="form-label">specialization</label><br>
<input type="text" class="form-control" value="<?php echo $data['specilization'];?>" name="specialization" id="exampleInputEmail1" aria-describedby="emailHelp">
<label for="exampleInputspecilization" class="form-label">experience</label><br>
<input type="text" class="form-control" name="experience" value="<?php echo $data['experience'];?>" id="exampleInputEmail1" aria-describedby="emailHelp">
<div class="mb-3">
	  <label for="exampleInputPassword1" class="form-label">image</label>
	  <input type="file" name="photo" class="form-control" id="exampleInputfile">
	</div>
	
		<div class="mb-3">
	<div class="container" align='center'>
  <button>Submit</button>
</div>
	</form>
			  <ul class="agileits_social_list two">
				        <li class="fallow"> Follow Us :</li>
								<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								<li><a href="#" class="w3_agile_rss"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
							</ul>
				         
			   </div>
	    </div>
	</div>

<div class="map_agile">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387142.84010033106!2d-74.25819252532891!3d40.70583163828471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1475140387172" style="border:0"></iframe>


</div>
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
    for the treatment, both medical and surgical, of the sick and the injured; and for their housing during this process. The modern hospital also
    often serves as a centre for investigation and for teaching.</span></p>
					</div>
					<div class="col-md-4 w3agile_footer_grid">
						<h3>Contact Info</h3>
						<ul>
							<li><i class="fa fa-map-marker" aria-hidden="true"></i>PMF9+FXH, Nr. Boda Talav, GIDC Area, <span>Wadhawan City, Gujarat 363030.</span></li>
							<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:info@example.com">pluscare108@gmail.com</a></li>
							<li><i class="fa fa-phone" aria-hidden="true"></i>+91 6353726488</li>
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
                    <p>&copy;Plus care. All rights reserved | Design by Renish pirani, Rishit dangi, Jainam sanghavi</p></div>
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
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>