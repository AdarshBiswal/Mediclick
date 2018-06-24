<?php
if(isset($_POST['save'])){
    $path="upload/";
	echo "in php";
    $name = $_FILES['imageupload']['name'];//Name of the File
    $temp = $_FILES['imageupload']['tmp_name'];
    if(move_uploaded_file($temp, $path . $name)){
        echo "success";
    }else{
        echo "failed";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Mediclick | Patient Home</title>
	
	<!--booststrap-->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
	<!--//booststrap end-->

	<!-- font-awesome icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
    

	
	

	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<!-- banner text slider-->
	<!--stylesheets-->
	<link href="css/style.css" rel='stylesheet' type='text/css' media="all">
	<!-- banner text slider-->

	
	<!--//style sheet end here-->
</head>

<body>
	<div class="banner-w3" id="home">
		<div class="w3-agile-logo">
			<div class=" head-wl">
				<div class="agileinfo-social-grids">
					<ul>
						<li><a href="#"><span class="fa fa-facebook"></span></a></li>
						<li><a href="#"><span class="fa fa-twitter"></span></a></li>
						<li><a href="#"><span class="fa fa-rss"></span></a></li>
						<li><a href="#"><span class="fa fa-vk"></span></a></li>
					</ul>
				</div>
				<div class="w3-header-top-right">
					<div class="email-right">
						<p><span class="fa fa-envelope" aria-hidden="true"></span> <a href="mailto:mediclick@gmail.com" class="info">   mediclick@gmail.com</a></p>

					</div>
					<div class="w3-header-top-right-text">

						<p><span class="fa fa-phone" aria-hidden="true"></span> +91 7684971077</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="header-w3layouts">

			<!-- Navigation -->
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
					<h1><a class="navbar-brand " href="index.html">Mediclick</a></h1>
				</div>
				
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav navbar-right">
						<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
						<li class="hidden"><a class="page-scroll" href="#page-top"></a> </li>
						<li><a class="page-scroll" href="#home">Home</a></li>
						<li><a class="page-scroll scroll" href="#about">About</a></li>
						<li><a class="page-scroll scroll" href="#service">Services</a></li>
						
						<li><a class="page-scroll scroll" href="Login/Login.html">Login</a></li>
						<li><a class="page-scroll scroll" href="#contact">Contact</a></li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</nav>
		</div>


		<div class="container">
			<!-- header -->
			<header>
`
				
							<ul>
								<li>
									<div class=" w3l-info">
										<div >
											<h4 align="center">Upload your Medical Report</h4>
										
                                            
                                            <br>
                                            			
                                            <div align="center">
                                            	<form action='' method='POST' >
													<input type='file'  formtarget="_parent" name='userFile' align="center" sstyle="background-color:green"  style="background:#3CC;font-size:20pt;color:black;border:2px solid #336600;padding:3px;<font color='"Red"" size="22px" ><br>
													
                                                    <input type="submit" name='upload_btn' value="upload" style="font-size:20pt;color:white;
background-color:#3CC;border:2px solid #336600;padding:3px;<font color='"Red"'>           
												</form>
                                                </div
                                               
										></div>
									</div>

								</li>
								<li>
								  <div class=" w3l-info">
								    <div>
								     
								      <h4 align="center">View your medical Reports</h4>
								      
							        </div>
								    <div align="center" class="agileits_w3layouts_more"> <a href="Login/Login.html">click here to view</a>
								      
							        </div>
                                    
							      </div>
								</li>
                                
                                <li>
									<div class=" w3l-info">
										<div >
											<h4 align="center">Meet The World 's Best Doctors From Anywhere In The World</h4>
											<div   align="center" class="agileits_w3layouts_more"> <a href="Login/Login.html">Click here to book		</a> </div>
										
										</div>
									</div>

								</li>
                                <br>
                                <br>
                                
							</ul>
						</div>
					</section>
</div>
			</header>
		</div>
		<div class="clearfix"> </div>
	</div>

	


	<!--contact-->
	<div class="contact" id="contact">
		<div class="container">
			<h3 class="title">CONTACT US</h3>

			<div class=" col-md-7 contact-address">
				<h4>Contact Address</h4>
				<div class="para-left">
					<p> For futher information or clarification please contact us.
					</p>
				</div>
				<div class="contact-left">
					<div class="address-contact-left ">
						<h5>Address:</h5>
						<p><span class="fa fa-home"></span> 4/5 Sai Khetra Apartment, Mancheswar,Bhubanewswar, Odisha,India ,751010 </p>
					</div>
					<div class="address-contact-left ">
						<h5>Phones:</h5>
						<p><span class="fa fa-phone"></span> +917684971077</p>
						<p><span class="fa fa-phone"></span> +917008270483</p>
					</div>
					<div class="address-contact-left ">
						<h5>Email:</h5>
						<p><span class="fa fa-envelope"></span> <a href="mailto:info@example.com">mediclick@gmail.com</a></p>
					</div>
				</div>
			</div>
			<div class=" col-md-5 contact-top">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.9503398796587!2d-73.9940307!3d40.719109700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1441710758555"
				 allowfullscreen=""></iframe>
			</div>


			<div class="clearfix"> </div>
			<div class="contact-form">
				<form action="#" method="post">
					<div class="col-md-6 col-sm-6 col-xs-6 form-right form-left">
						<input type="text" name="name" placeholder="Name" required>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6 form-right ">
						<input type="text" name="Last name" placeholder="Last name" required>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6 form-right form-left">
						<input type="email" name="Email" placeholder="Email" required>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6 form-right ">
						<input type="text" name="phone" placeholder="Phone" required>
						<div class="clearfix"> </div>
					</div>
					
					<textarea name="Message" placeholder="Message" required></textarea>
					<input type="submit" value="SUBMIT">
				</form>
		
			</div>

		</div>
	</div>
	<!--//contact-->

	<!--footer-->

	<div class="footer">
		<nav>
			<ul class="nav-buttom">
				<li><a class="page-scroll scroll" href="#home">Home</a></li>
				<li><a class="page-scroll scroll" href="#about">About</a></li>
				<li><a class="page-scroll scroll" href="#service">Service</a></li>
				<li><a class="page-scroll scroll" href="#contact">Contact</a></li>
			</ul>
		</nav>
		<div class="container">
		<div class="colr-row col-md-6  ">
			<div class="col-md-6 col-sm-6 col-xs-6  bottom-head bottm-grid">
				<h2><a href="index.html">Mediclick</a></h2>
				<!--<span class="cap">WE TAKE CARE OF YOUR MEDICAL REPORTS</span>-->
				<div class="clearfix"> </div>
			</div>
			
			<div class="col-md-6 col-sm-6 col-xs-6 copyright bottm-grid">
				<h3>Follow us</h3>
				<div class="icons">
					<ul>
						<li><a href="#"><span class="fa fa-facebook"></span></a></li>
						<li><a href="#"><span class="fa fa-twitter"></span></a></li>
						<li><a href="#"><span class="fa fa-rss"></span></a></li>
						<li><a href="#"><span class="fa fa-vk"></span></a></li>
					</ul>

				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
			</div>
			<div class="colr-row  col-md-6">
			<div class="col-md-6 col-sm-6 col-xs-6 one bottm-grid">
				<h3>About us</h3>
				<p> WE ARE THE FIRST TO KEEP ONLINE MEDICAL REPORTS SAFELY IN VIRUS FREE ENVIRONMENT</p>
                
				<div class="clearfix"></div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-6 three bottm-grid">
				<h3>Contact</h3>
				<div class="addres up-out">
					<p><span class="fa fa-map-marker icons-left" aria-hidden="true"></span>4/5 Sai Khetra Apartment, Mancheswar,Bhubanewswar, Odisha,India ,751010</p>

					<p><span class="fa fa-phone icons-left" aria-hidden="true"></span>Call us:+917684971077</p>

				</div>
				<div class="clearfix"> </div>
			</div>
			<!-- //Copyright -->
			<div class="clearfix"> </div>
		</div>
		</div>
	</div>
	<footer>
		<p>&copy;2018 Mediclick. All Rights Reserved | Design by <a href="#" target="_blank">Team Codex</a></p>
	</footer>
    
    
	<!--menu script-->
	<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
	<script src="js/bootstrap.js"></script>
	<!--//menu script-->
	<!--FlexSlider banner-->

	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	
	
</body>

</html>