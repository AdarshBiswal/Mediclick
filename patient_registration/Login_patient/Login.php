<?php
$host="localhost";
$user="root";
$password="";
$db="patient_registration";

$con=mysqli_connect($host,$user,$password,$db);
//mysql_select_db("$db");

if(isset($_POST['email']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$sql ="select * from users where username='".$username."'AND password='".$password."' limit 1";
	$result=mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result);
	if($row['username'] == $username && $row['password'] == $password)
	{
	echo "Login successfull welcome ".$row['username'];
	
	header('Location:patient/index.html');
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
<title>MEDICLICK | PATIENT LOGIN</title>



<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">

<link rel="stylesheet" href="css/font-awesome.css"> 

<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700"			   type="text/css" media="all">


</head>
<body>

	<h1>PATIENT LOGIN</h1>

	<div class="containerw3layouts-agileits">

		<div class="w3imageaits">
			<div class="header-social wthree">
				<ul>
					<li><img src="images/g6.jpg" height="195"></li>
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
						<a class="w3_play_icon1" href="#small-dialog1">Register Now</a>
					</li>
					<li class="label1" >
						<a href="#">Forgot Password?</a>
					</li>
				</ul>
			</form>
		</div>

		<div class="clear"></div>

	</div>

	
	
	
	<div class="w3lsfooteragileits">
		<p> &copy; 2018 Mediclick. All Rights Reserved | Design by <a href="#" target="=_blank">Team Codex</a></p>
	</div>
	

</body>
</html>