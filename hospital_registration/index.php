<?php

$host="localhost";
$user="root";
$password="";
$db="patient_registration";
try{
$con = mysqli_connect($host,$user,$password,$db);
echo("connected");
} catch(Exception $E)
{
	echo("Not connected");
}

if(isset($_POST['submit']))
{

	echo("inside");
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$date=$_POST['date'];
	$gender=$_POST['gender'];
	$location=$_POST['location'];
	$address=$_POST['address'];
	$aadhar=$_POST['aadhar'];
	
	echo("$aadhar");
	echo("$phone");
	
	$query1 = " INSERT INTO `register`(`name`, `phone`, `email`, `aadhar`, `date`, `gender`, `location`, `address`) VALUES ('$name','$phone','$email','$aadhar','$date','$gender','$location','$address')";
	
	
	
	$result=mysqli_query($con,$query1);
	if($result){
		if(mysqli_affected_rows($con)>0){
			$message = "Successfull";
			echo "<script type='text/javascript'>alert('$message');</script>";
		echo "$message";}
			else
			{ $message = "Wrong credentials TRY AGAIN";
			echo "<script type='text/javascript'>alert('$message');</script>";
		echo "$message";
			}
	}
}





?>

<!DOCTYPE HTML>
<html>
<head>
<title>Mediclick | Patient Register</title>

<link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!--fonts--> 
<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
<!--//fonts--> 
</head>


<body>
<!--background-->
<h1> Hospital Registration Form </h1>
    <div class="bg-agile">
	<div class="book-appointment">
	<h2>Register here to get an unique  ID</h2>
			<form action="" method="post">
			<div class="left-agileits-w3layouts same">
			<div class="gaps">
				<p>Hospital Name</p>
					<input type="text" name="name" placeholder="Enter your full name" required/>
			</div>	
            
            
				<div class="gaps">	
				<p>Phone Number</p>
					<input type="text" name="phone" placeholder="Enter your Phone Number" required/>
				</div>
				<div class="gaps">
				<p>Registerd Email</p>
						<input type="email" name="email" placeholder="Enter your Email" required />
				</div>	
                <div class="gaps">
				<p>Pan Number</p>
					<input type="text" name="pan" placeholder="Enter your Aadhar card Number" required/>
			</div>
				
			
            </div>
			<div class="right-agileinfo same">
			<div class="gaps">
				<p>Hospital Registration Number</p>		
						<input type="text" name="reg" placeholder="day/month/year" required/>
			</div>
			
			<div class="gaps">
				<p>GST Number</p>	
					<!--<select class="form-control">
						<option></option>
						<option>Male</option>
						<option>Female</option>
					</select>-->
                    <input type="text" name="gender" placeholder="Enter gender" required/>
			</div>
			<div class="gaps">
				<p>Location</p>		
                    <input type="text" name="location" placeholder="Enter your current location" required/>	
			</div>
            <div class="gaps">
				<p>Address</p>
					<input type="text" name="address" placeholder="Enter your full Address Address" required/>
			</div>
            
			</div>
			<div class="clear"></div>
						  <input type="submit"  name="submit" value="Register">
                          
                          
                          
			</form>
            
		</div>
        
   </div>
   <!--copyright-->
			<div class="copy w3ls">
		       <p>&copy; 2018. Mediclick All Rights Reserved </p>
	        </div>
		<!--//copyright-->


</body>
</html>