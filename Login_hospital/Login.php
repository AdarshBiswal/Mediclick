<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title>Mediclick | Hospital Login</title>
<!-- Meta-Tags -->

<!-- //Meta-Tags -->

<!-- Custom-Style-Sheet -->
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- Index-Page-CSS --> <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<!-- //Custom-Style-Sheet -->

<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->

<!-- Fonts -->

<!-- //Fonts -->

</head>
<!-- //Head -->

<!-- Body -->
<body>

	<h1>Hospital Login</h1>

	<div class="containerw3layouts-agileits">

		<div class="w3imageaits">
			<div class="header-social wthree">
				<ul>
					<li>
                    <img src="images/g6.jpg" height="190"> 
                    </li>
				</ul>
			</div>
		</div>

		<div class="aitsloginwthree w3layouts agileits">
			<h2>Login With Email</h2>
			<form action="#" method="post">
				<div class="mail">
					<i class="fa fa-envelope" aria-hidden="true"></i>
					<input type="email" Name="Userame" placeholder="Email" required>
				</div>
				<div class="password">
					<i class="fa fa-unlock" aria-hidden="true"></i>
					<input type="password" Name="Password" placeholder="Password" required>
				</div>
				<div class="send-button wthree agileits">
					<input type="submit" value="Log In">
				</div>
				
				<ul class="tick w3layouts agileinfo">
					<li>
						<a class="w3_play_icon1" href="#small-dialog1">Signup Now</a>
					</li>
					<li class="label1" >
						<a href="#">Forgot Password?</a>
					</li>
				</ul>
			</form>
		</div>

		<div class="clear"></div>

	</div>

	
	<!-- for register popup -->
	<div id="small-dialog1" class="mfp-hide">
		<div class="contact-form1">
			<div class="contact-w3-agileits w3layouts">
				<h3>Signup Here</h3>
				<form action="#" method="post">
						<div class="user">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input type="text" Name="Userame" placeholder="First Name" required>
						</div>
						<div class="user">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input type="text" Name="Userame" placeholder="Last Name" required>
						</div>
						<div class="mail">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input type="email" Name="Userame" placeholder="Email" required>
						</div>
						<div class="password psw1">
							<i class="fa fa-unlock" aria-hidden="true"></i>
							<input type="password" Name="Password" placeholder="Password" required>
						</div>
						<div class="password">
							<i class="fa fa-unlock" aria-hidden="true"></i>
							<input type="password" Name="Password" placeholder="Confirm Password" required>
						</div>
					<div class="login-check">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked="">I Accept Terms &amp; Conditions</label>
					</div>
					<div class="submit-w3l">
						<input type="submit" value="Sign up">
					</div>
				</form>
			</div>
		</div>	
	</div>
	<!-- //for register popup -->
	
	<div class="w3lsfooteragileits">
		<p> &copy; 2017 Brave Login Form. All Rights Reserved | Design by <a href="http://w3layouts.com" target="=_blank">W3layouts</a></p>
	</div>

	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

	<!-- pop-up-box-js-file -->  
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!--//pop-up-box-js-file -->
	<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
	</script>

</body>
<!-- //Body -->

</html>