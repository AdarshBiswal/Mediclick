<?php
$host="localhost";
$user="root";
$password="";
$db="patient_registration";

$con=mysqli_connect($host,$user,$password,$db);
//mysql_select_db("$db");

if(isset($_POST['email']))
{
	$email=$_POST['email'];
	$aadhar=$_POST['aadhar'];
	
	$sql ="select * from register where email='".$email."'AND aadhar='".$aadhar."' limit 1";
	$result=mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result);
	if($row['email'] == $email && $row['aadhar'] == $aadhar)
	{$m=$row['name'];
	echo "<h1>Login successfull welcome .$m </h1>";
	header("location:patient/patient_home.html");
	}
	else
	{	$message = "Wrong credentials TRY AGAIN";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "$message";
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<head>

<title>Mediclick |Patient Login</title>

<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" type="text/css" media="all">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700"			   type="text/css" media="all">


</head>
<body>

	<h1>PATIENT LOGIN</h1>

	<div class="containerw3layouts-agileits">

		<div class="w3imageaits">
			<img src="images/g5.png" alt="" height="436">
		</div>

		<div class="aitsloginwthree w3layouts agileits">
			<h2>Log In to enter</h2>
			<form action="#" method="post">
				<input type="text" Name="email" placeholder="Enter your Email ID" required>
                <input type="text" Name="aadhar" placeholder="Enter your aadhar card Number" required>
				<input type="password" Name="password" placeholder="Password" required>
				<ul class="tick w3layouts agileinfo">
					<li>
						<input type="checkbox" id="brand1" value="">
						<label for="brand1"><span></span>Remember me</label>
					</li>
					<li>
						<a href="#">Forgot Password?</a>
					</li>
				</ul>
				<div class="send-button wthree agileits">
					<input type="submit" value="Sign In">
				</div>
			</form>
		</div>

		<div class="clear"></div>

	</div>

	<div class="w3lsfooteragileits">
		<p> &copy; 2018 Mediclick. All Rights Reserved | Design by <a href="#" target="=_blank">Team Codex</a></p>
	</div>



</body>
<!-- //Body -->



</html>