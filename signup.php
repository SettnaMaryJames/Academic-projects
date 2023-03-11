<?php
	
	include 'database/connect.php';

	if(isset($_POST['sub']))
 	{
 		$college_name=$_POST['college'];
 		$name=$_POST['name'];
 		$email=$_POST['email'];
 		$username=$_POST['username'];
 		$password=$_POST['password'];
 		$cpass=$_POST['confirm_password'];
 		$phone=$_POST['phone'];
 		$address=$_POST['address'];
 		$course=$_POST['course'];
 		$gender=$_POST['gender'];
 		$role="Student";
 		$interest=$_POST['interest'];
 		
 		if ($password==$cpass)
 		{

 			$data="SELECT * FROM login_tb where username='$username'";
 			$exe1=mysqli_query($con,$data);
 			$array=mysqli_num_rows($exe1);

 			if ($array==0) 
 			{
 				 			

		 		$log="INSERT INTO login_tb(username,password,role) values('$username','$password','$role')";
		 		$exec=mysqli_query($con,$log);
		 		
		 		$logid=mysqli_insert_id($con);;
		 		
		 		

		 		$college="INSERT INTO user_tb(name, email, phone, username, password, address, gender, col_id, course_id, log_id,interest) values('$name',
		 		'$email','$phone','$username','$password','$address','$gender','$college_name','$course','$logid','$interest')";
		 		$query=mysqli_query($con,$college);

		 		if ($query)
		 		{
		 			echo "<script>alert('Added Successfully');window.location.href='login.php'</script>";
		 		}
		 		else
		 		{
		 			echo "<script>alert('Try Again');window.location.href='signup.php'</script>";
		 		}

	 		}

	 		else
	 		{
	 			echo "<script>alert('Choose another username');window.location.href='signup.php'</script>";

	 		}

 		}

 		else
 		{
 			echo "<script>alert('Mismatch In Password');window.location.href='signup.php'</script>";
 		}
 	}


?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Sign Up</title>
<!-- meta data -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Register Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //meta data -->
<link href="//fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200,300,400,700&amp;subset=cyrillic,latin-ext,vietnamese" rel="stylesheet">
<!-- css files -->
<link href="css1/style.css" type="text/css" rel="stylesheet" media="all">   
<!-- //css files -->
<style type="text/css">
	input[type="submit"]
	{
		background-color: #9a28d7;
	}
	.register select
	{
		font-size: 1em;
	    color: #8c8c8c;
	    padding: 0.5em 1em;
	    border: 0;
	    width: 90%;
	    border-bottom: 1px solid #dcdcdc;
	    background: none;
	    -webkit-appearance: none;
	    outline: none;
	    font-size: .9em;
	    font-weight: 400;
	    line-height: 2em;


	}

	.register-left {
    background: #009688;
    height: 920px;
}




/*.styled-input select {
    color: #8c8c8c;
    padding: 0.5em .9em;
    position: absolute;
    top: 0;
    left: 0;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
    pointer-events: none;
    font-weight: 400;
    font-size: .9em;
    display: block;
    line-height: 1em;
}*/
</style>
</head>
<!-- body starts -->
<body>
<!-- section -->
<section class="register">
	<div class="register-full">
		<div class="register-left" style="background-color: #9a28d7;">
			<div class="register-in" style="color: white;">
				<h1>Modern Register Form</h1>
				<p>Donec ipsum lorem, sodales a sagittis ut, convallis non nibh. Integer vitae cursus nunc, et vestibulum augue. Donec lacinia tristique purus. Aenean in est pretium lectus euismod facilisis.</p>
				<p>Donec ipsum lorem, sodales a sagittis ut, convallis non nibh. Integer vitae cursus nunc, et vestibulum augue. Donec lacinia tristique purus. Aenean in est pretium lectus euismod facilisis.</p>
				<div class="link">
					<a href="login.php">Already have an account</a>
					<a href="index.php">HOME</a>
				</div>
			</div>
		</div>
		<div class="register-right">
			<div class="register-in">
				<h2>SignUp here</h2>
				<div class="register-form">
					<form action="#" method="post">
						<div class="fields-grid">
							<div class="styled-input agile-styled-input-top">
								<input type="text" name="name" required=""> 
								<label>Name</label>
								<span></span>
							</div>
							
							
							<div class="styled-input">
								<input type="email" name="email" required="">
								<label>Email</label>
								<span></span>
							</div>
							
							<div class="styled-input">
								<input type="text" name="username" required=""> 
								<label>Username</label>
								<span></span>
							</div> 
							<div class="styled-input">
								<input type="password" name="password" required="">
								<label>Password</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="password" name="confirm_password" required="">
								<label> Confirm password</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="text" name="phone" required=""> 
								<label>Phone</label>
								<span></span>
							</div>
							<div class="styled-input">
								<input type="text" name="address" required=""> 
								<label>Address</label>
								<span></span>
							</div>
							<div class="styled-input">
								<select name="gender">
									<option value="">Choose Gender</option>
									<option>Female</option>
									<option>Male</option>
									<option>Other</option>
								</select>
								<span></span>
							</div>
							<div class="styled-input">
								<select name="college">
									<option value="">Choose College</option>
									<?php
										$sel="SELECT * FROM college_tb";
										$query=mysqli_query($con,$sel);
										while($fetch=mysqli_fetch_array($query))
										{

									?>
									<option value="<?php echo $fetch['col_id'];?>"><?php echo $fetch['college_name'];?></option>
									<?php
										}
									?>
								</select>
								<span></span>
							</div>
							<div class="styled-input">
								<select name="interest">
									<option value="">Pick Your Interest</option>
									<?php
										$sel="SELECT DISTINCT(event_name),even_id from event_tb";
										$query=mysqli_query($con,$sel);
										while($fetch=mysqli_fetch_array($query))
										{

									?>
									<option value="<?php echo $fetch['even_id'];?>"><?php echo $fetch['event_name'];?></option>
									<?php
										}
									?>
								</select>
								<span></span>
							</div>
							<div class="styled-input">
								<select name="course">

									<option value="">Choose Course</option>
									<?php
										$sel1="SELECT * FROM course_tb";
										$query1=mysqli_query($con,$sel1);
										while($fetch1=mysqli_fetch_array($query1))
										{

									?>
									<option value="<?php echo $fetch1['course_id'];?>"><?php echo $fetch1['course'];?></option>
									<?php
										}
									?>
								</select>
								<span></span>
							</div>
							<div class="clear"> </div>
							<!--  <label class="checkbox"><input type="checkbox" name="checkbox" checked><i></i>I agree to the <a href="#">Terms and Conditions</a></label> -->
						</div>
						<input type="submit" value="Register" name="sub">
					</form>
				</div>
			</div>

			<div class="clear"> </div>
		</div>
	<div class="clear"> </div>
	</div>
	<!-- copyright -->
	<p class="agile-copyright">FEST MANAGEMENT <a href="#"></a></p>
	<!-- //copyright -->
</section>
<!-- //section -->
</body>	
<!-- //body ends -->
</html>