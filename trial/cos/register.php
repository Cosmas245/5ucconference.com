<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Event Registration Form Widget Flat Responsive Widget Template :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Event Registration Form Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- //custom-theme -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- font-awesome-icons -->
<!-- //font-awesome-icons -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- banner -->
	<div class="center-container">
		<div class="main">
			<h1 class="w3layouts_head">Conference Registration Form</h1>
				<div class="w3layouts_main_grid">
					<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" class="w3_form_post">
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>First Name </label>
								<input type="text" name="fname" placeholder="First Name" required="">
							</span>
						</div>
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Last Name </label>
								<input type="text" name="lname" placeholder="Last Name" required="">
							</span>
						</div>

				<div class="content-w3ls">
					<div class="form-w3ls">						
						<div class="content-wthree2">
						<div class="grid-w3layouts1">
							<label>Select Gender</label>
							<select required name="gender">
									<option>Share Below</option>
									<option value='male'>Male</option>
									<option value='female'>female</option>

							</select>
						</div>
					</div>
				</div>
			</div>		

						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Country </label>
								<input type="text" name="country" placeholder="Country of Residence" required="">
							</span>
						</div>
						

						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Email Address </label>
								<input type="text" name="email" placeholder="Email" required="">
							</span>
						</div>
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Phone Number </label>
								<input type="text" name="phone" placeholder="Phone Number" required="">
								</span>
						</div>
												
					<div class="content-w3ls">
						<div class="form-w3ls">
							<div class="content-wthree2">
								<div class="grid-w3layouts1">
									<div class="w3-agile1">
										<label>Please choose your mode of attendance</label>
										<ul>
											<li>
												<input type="radio" id="a-option" name="selector1">
												<label for="a-option">Physical </label>
												<div class="check"></div>
											</li>
											<li>
												<input type="radio" id="b-option" name="selector1">
												<label for="b-option">Online</label>
												<div class="check"><div class="inside"></div></div>
											</li>
										</ul>
									</div>	
								</div>
								<div class="clear"></div>
							</div>
						</div>
						<div class="form-w3ls-1">
								
						</div>
						<div class="clear"></div>
					</div>
					<div class="w3_main_grid">
						<div class="w3_main_grid_right">
							<input  type="submit" value="Submit">
						</div>
					</div>
				</form>
			</div>
		<!-- Calendar -->
			<link rel="stylesheet" href="css/jquery-ui.css" />
				<script src="js/jquery-ui.js"></script>
					<script>
						$(function() {
							$( "#datepicker" ).datepicker();
						});
					</script>
		<!-- //Calendar -->
			<div class="w3layouts_copy_right">
				<div class="container">
					<p>Copyright © 2024  </p>
				</div>
			</div>
		</div>
	</div>
<!-- //footer -->
</body>
</html>


<?php
		$dbhost ="localhost";
		$dbname = "event";
		$dbuser ="root";
		$dbpass = "Jacob@Jmc";
		$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
		if($_SERVER['REQUEST_METHOD']=== "POST"){
			print_r($_POST);

			$fname = $conn->real_escape_string($_POST['fname']);
			$lname = $conn->real_escape_string($_POST['lname']);
			$gender = $conn->real_escape_string($_POST['gender']);
			$phone = $conn->real_escape_string($_POST['phone']);
			$country = $conn->real_escape_string($_POST['country']);
			$email = $conn->real_escape_string($_POST['email']);
			$selector1 = $conn->real_escape_string($_POST['selector1']);

			$insertSql = "INSERT INTO `participants`(`id`, `fname`, `lname`, `gender`, `email`, `phone`, `country`) VALUES (NULL,'$fname','$lname','$gender','$email','$phone','$country')";
			if($conn->query($insertSql)){
				echo "<script>alert('SUCCESS'); window.location.href='./'</script>";
			}

		}
?>