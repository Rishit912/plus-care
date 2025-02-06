
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Plus care</title>
<!-- for-meta-tags-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Health Plus Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-meta-tags-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
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
									<li><i class="fa fa-home" aria-hidden="true"></i>login</li>
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
						<h1><img src="images/logo.jpeg" alt="" height="100" width="200"></h1>
					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--sebastian">
					<ul id="m_nav_list" class="m_nav menu__list">
						<li class="m_nav_item menu__item" id="m_nav_item_1"> <a href="admin_index.php" class="menu__link"> Home </a></li>
						<li class="m_nav_item menu__item" id="moble_nav_item_6"> <a href="logout.php" class="menu__link"> Logout </a> </li>
						
					</ul>
				</nav>

				</div>
				<!-- /.navbar-collapse -->
			</nav>
	 </div>
</div>
<!-- banner -->
<div class="banner1 jarallax">
    <div class="container">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h1 style="color:white;text-align: center;">Select Payment Method</h1>
		
    </div>
</div><hr>
<!-- //banner1 -->
<!DOCTYPE html>
<div class="mb-3"> 
<html>
  <head>
    <meta charset="UTF-8">
    <title>Payment Page</title>
    <style>
      .payment-option {
        display: inline-block;
        margin-right: 10px;
      }
      .payment-fields {
        display: none;
      }
      .payment-fields.show {
        display: block;
      }
    </style>
  </head>
  <body style="align-items: center;">
    <center>

      <form>
        <div class="payment-options" >
          <div class="payment-option">
            <meta charset="UTF-8">
            <input type="radio" id="upi" name="payment_method" value="upi">
            <label for="upi">UPI</label>
          </div>
          <div class="payment-option">
            <input type="radio" id="netbanking" name="payment_method" value="netbanking">
            <label for="netbanking">Net Banking</label>
          </div>
          <div class="payment-option">
            <input type="radio" id="cod" name="payment_method" value="cod">
            <label for="cod">Cash on Delivery</label>
          </div>
        </div>
        
        <div>
          <label for="amount">Amount:</label>
          <input type="number" id="amount" name="amount">
        </div>
        
        <div class="payment-fields" id="upi-fields">
          <h2>UPI Payment:</h2>
          <label for="upi-id">UPI ID:</label>
          <input type="text" id="upi-id" name="upi_id">
        </div>
        
        <div class="payment-fields" id="netbanking-fields">
          <h2>Net Banking Payment:</h2>
          <label for="bank-name">Bank Name:</label>
          <input type="text" id="bank-name" name="bank_name"><br>
          <label for="account-number">Account Number:</label>
          <input type="text" id="account-number" name="account_number"><br>
          <label for="ifsc-code">IFSC Code:</label>
          <input type="text" id="ifsc-code" name="ifsc_code"><br>
        </div>
        
        <div class="payment-fields" id="cod-fields">
          <h2>Cash on Delivery:</h2>
          <p>Cash on delivery will be available soon!</p>
        </div>
        
        <button type="submit">Submit</button>
        <div class="mb-3"> 
          
        </form>
        
      </center>
    <script>
      const paymentOptions = document.querySelectorAll('input[type=radio][name=payment_method]');
      const paymentFields = document.querySelectorAll('.payment-fields');

      function showPaymentFields() {
        paymentFields.forEach((field) => {
          field.classList.remove('show');
        });

        const checkedOption = document.querySelector('input[type=radio][name=payment_method]:checked');
        const optionId = checkedOption ? checkedOption.id : null;

        const fieldsToShow = document.getElementById(`${optionId}-fields`);
        if (fieldsToShow) {
          fieldsToShow.classList.add('show');
        }
      }

      paymentOptions.forEach((option) => {
        option.addEventListener('change', showPaymentFields);
      });

      showPaymentFields();
    </script>
  </body>
</html
</div>
</form>
          <ul class="agileits_social_list two">
                    <li class="fallow"> Follow Us :</li>
                            <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="w3_agile_rss"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                        </ul>
                    <div></div> 
           </div>
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