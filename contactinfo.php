<?php
session_start();
?>
<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Dirty Deeds Done Dirt Cheap Contact Info</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	
	
	<body class="is-preload">
		

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1>Dirty Deeds Cleaning Service</h1>
						<p>Cleaning Greenville one room at a time.</p>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Content -->
							<section id="content" class="main">
								<span class="image main"><img src="images/pic04.jpg" alt="" /></span>
								 
								<?php
						// Variable
		  		$email = $_POST['email'];
								
			// 1. Connect to the database
								
				$servername = "localhost";
				$username = "id16490316_dduser";
				$password = "]D5GZDcbGogPbNRL";
				$database = "id16490316_ddcleaningservice";
							  
				$conn = mysqli_connect($servername,$username,$password,$database);
							  
			// 1a. Check connection to database
							  
				if (!$conn){
					//die("Connect failed: ". mysqli_connect_error());
					}
				$_SESSION['connection'] = $conn;			
					//echo "Connected successfully";
							  
			// 2. Send a query to that database
													  
				$query = mysqli_query($conn,"Select * from customer where customer.email='$email'");
								
				if ($row = $query->fetch_assoc()){
					$businessNameVar = $row['businessName'];
					$firstNameVar = $row['firstName'];
					$lastNameVar = $row['lastName'];
					$addressVar = $row['address'];
					$cityVar = $row['city'];
					$stateVar = $row['state'];
					$zipCodeVar = $row['zipCode'];
					$phoneVar = $row['phone'];
					$idVar = $row['customerID'];
				}
				if(!isset($businessNameVar))
				{
					$businessNameVar='';
				}
							
				if(!isset($firstNameVar))
				{
					$firstNameVar='';
				}				
				
				if(!isset($lastNameVar))
				{
					$lastNameVar='';
				}
				if(!isset($addressVar))
				{
					$addressVar='';
				}
				if(!isset($cityVar))
				{
					$cityVar='';
				}
				if(!isset($stateVar))
				{
					$stateVar='';
				}
				if(!isset($zipCodeVar))
				{
					$zipCodeVar='';
				}
				if(!isset($phoneVar))
				{
					$phoneVar='(   )   -    ';
				}				
			// 3. Work with the returned data
				
			// 4. Release the data
							  
			// 5. Close the database connection			  
			
		?>
	<h1>New/Update Customer Information</h1>
	<form method="POST" action="services.php">
		Business Name: <input type="text" name="businessname" value="<?php echo $businessNameVar ?>"><br>
		First Name: <input type="text" name="firstname" value="<?php echo $firstNameVar ?>"><br>
		Last Name: <input type="text" name="lastname" value="<?php echo $lastNameVar ?>"><br>
		Address: <input type="text" name="address" value="<?php echo $addressVar ?>"><br>
		City: <input type="text" name="city" value="<?php echo $cityVar ?>"><br>
		State: <input type="text" name="state" value="<?php echo $stateVar ?>"><br>
		Zip: <input type="text" name="zipcode" value="<?php echo $zipCodeVar ?>"><br>
		Phone: format: (XXX)XXX-XXXX<input id="phone" type="text" name="phone" placeholder="Format: XXX-XXX-XXXX" value="<?php echo $phoneVar ?>"><br>
		Email: <input type="text" name="newemail" value="<?php echo $email ?>"><br>
		<?php 
	if(isset($idVar))
	{
	$_SESSION['customerid'] = $idVar;
	}
	else{
	unset($_SESSION['customerid']);	
	}?>
		<input type="submit" class="button" value="Continue" name="submit"><br><br>
		<a href="book.php" class="button">Back</a>
	</form			
							</section>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<section>
							<h2>Thank you</h2>
							<p>For supporting a small business and making a positive impact on the community</p>
							
						</section>
						<section>
							<h2>Contact Us</h2>
							<dl class="alt">
								<dt>Address</dt>
								<dd>Greenville, NC 27834 • USA</dd>
								<dt>Phone</dt>
								<dd>(252) 378-1770</dd>
								<dt>Email</dt>
								<dd><a href="#">jhbatchler@gmail.com</a></dd>
							</dl>
							<ul class="icons">
								
								<li><a href="https://www.facebook.com/DirtyDeeds62" class="icon brands fa-facebook-f alt"><span class="label">Facebook</span></a></li>
								
								
							</ul>
						</section>
						<p class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>