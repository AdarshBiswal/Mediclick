<?php
$host="localhost";
$user="root";
$password="";
$db="doctor_registration";
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
	$department=$_POST['department'];
	$degree=$_POST['degree'];
	
	echo("$aadhar");
	echo("$phone");
	
	$query1 = "INSERT INTO `register1`(`name`, `phone`, `email`, `aadhar`, `date`, `gender`, `location`, `address`, `department`, `degree`) VALUES ('$name','$phone','$email','$aadhar','$date','$gender','$location','$address','$department','$degree')";
	
	
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
<title>Mediclick | Doctor Register</title>

<link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!--fonts--> 
<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
<!--//fonts--> 
</head>


<body>
<!--background-->
<h1> Doctor Registration Form </h1>
    <div class="bg-agile">
	<div class="book-appointment">
	<h2>Register here to get an unique  ID</h2>
			<form action="" method="post">
			<div class="left-agileits-w3layouts same">
			<div class="gaps">
				<p>Name</p>
					<input type="text" name="name" placeholder="Enter your full name" required/>
			</div>	
            
            
				<div class="gaps">	
				<p>Phone Number</p>
					<input type="text" name="phone" placeholder="Enter your Phone Number" required/>
				</div>
				<div class="gaps">
				<p>Email</p>
						<input type="email" name="email" placeholder="Enter your Email" required />
				</div>	
                <div class="gaps">
				<p>Adahar Card</p>
					<input type="text" name="aadhar" placeholder="Enter your Aadhar card Number" required/>
			</div>
            <div class="gaps">
				<p>Department</p>		
						<input type="text" name="department" placeholder="Enter Department" required/>
			</div>
           
				
			
            </div>
			<div class="right-agileinfo same">
			<div class="gaps">
				<p>Date of Birth</p>		
						<input type="text" name="date" placeholder="day/month/year" required/>
			</div>
			
			<div class="gaps">
				<p>Gender</p>	
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
            <div class="gaps">
				<p>Degree</p>		
						<input type="text" name="degree" placeholder="Enter Degree" required/>
			</div>
            
			</div>
			<div class="clear"></div>
						  <input type="submit"  name="submit" value="Register">
                          
                          <div class="copy w3ls">
                          
		       
	        </div>
            
            
                          
			</form>
            <div class="clear"></div>
                          
                          <div class="copy w3ls">
                          <p> Already have an account ? </p>
                          
                          <form action="Login/index.php">
                            <input type="submit"  id="login"name="Login" value="Login">
                          </form>
                          
		       
	        </div>
            
		</div>
        
   </div>
   <!--copyright-->
			<div class="copy w3ls">
		       <p>&copy; 2018. Mediclick All Rights Reserved </p>
	        </div>
		<!--//copyright-->


</body>
</html>