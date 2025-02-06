<?php 
include("connect.php");
if(isset($_GET['Sc_id']))
{
    $Sc_id=$_GET['Sc_id'];
    $qd="delete from schedule where Sc_id='$Sc_id'";
    mysqli_query($conn,$qd);
}
?>
<?php 
	include ("admin_header.php");
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
	
		<h1 style="color:white;text-align: center;">View review</h1>
		</div>
	</div><hr>

	<div class="container">

	<div class="services-breadcrumb">
		<div class="container">
			<ul>
					</ul>
		</div>
	</div>
	</div>
   <table class="table table-bordered" >

<!-- //banner1 -->
	
        <tr>
            <th>Name</th>
            <th>U_id</th>
            <th>Email_id</th>
            <th>Message</th>
            <th>D_id</th>
			
            <th>OPTION</th>
        </tr>
        <?php 
        include("connect.php");
        $q="select * from gallery";
        $rs=mysqli_query($conn,$q);
        while($row=mysqli_fetch_array($rs))
        { ?>
		 <tr>
           <td>
			<?php print $row['Name'];?></td>
            <td><?php print $row['U_id'];?></td>
            <td><?php print $row['E-mail_id'];?></td>
            <td><?php print $row['Massage'];?></td>
            <td><?php print $row['D_id'];?></td>
            <td><a href="Review_view_admin.php?S_id=">delete</a></td> 
        </tr>
        <?php } ?> 
    </table>
	




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