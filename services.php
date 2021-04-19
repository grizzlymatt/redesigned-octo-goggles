<?php
session_start();
$conn = $_SESSION['connection'];
$businessNameVar = $_POST['businessname'];
$_SESSION['businessname'] = $businessNameVar;
$firstNameVar = $_POST['firstname'];
$_SESSION['firstname'] = $firstNameVar;
$lastNameVar = $_POST['lastname'];
$_SESSION['lastname'] = $lastNameVar;
$addressVar = $_POST['address'];
$_SESSION['address'] = $addressVar;
$cityVar = $_POST['city'];
$_SESSION['city'] = $cityVar;
$stateVar = $_POST['state'];
$_SESSION['state'] = $stateVar;
$zipCodeVar = $_POST['zipcode'];
$_SESSION['zipcode'] = $zipCodeVar;
$phoneVar = $_POST['phone'];
$_SESSION['phone'] = $phoneVar;
$newEmailVar = $_POST['newemail'];
$_SESSION['newemail'] = $newEmailVar;
if(isset($_SESSION['customerid']))
{ 
 
	$idVar = $_SESSION['customerid'];
	//otherwise update
	$query = "UPDATE customer SET businessName='$businessNameVar', firstName='$firstNameVar', lastName='$lastNameVar', address='$addressVar', city='$cityVar', state='$stateVar', zipCode='$zipCodeVar', phone='$zipCodeVar', email='$newEmailVar' WHERE customerID='$idVar'";
}
else
{	
	$query = "INSERT INTO customer (customerID, businessName, firstName, lastName, address, city, state, zipCode, phone, email) VALUES (NULL, '$businessNameVar', '$firstNameVar', '$lastNameVar', '$addressVar', '$cityVar', '$stateVar', '$zipCodeVar', '$phoneVar', '$newEmailVar')"; 
}

// 1. Connect to the database
								
				$servername = "localhost";
				$username = "id16490316_dduser";
				$password = "]D5GZDcbGogPbNRL";
				$database = "id16490316_ddcleaningservice";
							  
				$conn = mysqli_connect($servername,$username,$password,$database);

$results = mysqli_query($conn,$query);

if(!isset($_SESSION['customerid']))
{
	$results = mysqli_query($conn, "Select customerID FROM customer WHERE email='$newEmailVar'");
	if ($row = $results->fetch_assoc()){
		$idVar = $row['customerID'];
		$_SESSION['customerid']=$idVar; 
	}

}

?>

<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Dirty Deeds Done Dirt Cheap Services</title>
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
								 
		
	<h1>Please Select Services Desired</h1>
	<form method="POST" action="times.php">
		
		<select name="servicetype">
		<option value="1">Residential</option>
		<option value="2">Commercial</option>	
		</select>
		<br>
		
		<h1>Please Select Staff Desired</h1>
	<form method="POST" action="times.php">
		
		<select name="staff">
		<option value="1">Jenny Hunt Batchler</option>
		</select>
		<br>
		
		<h1>Please Select Date Desired</h1>
		<input type="date" name="date">
		<br>
		<br>
		<input type="submit" class="button" value="Continue" name="submit"><br><br>
	
		<a href="contactinfo.php" class="button">Back</a>
	</form>
								
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