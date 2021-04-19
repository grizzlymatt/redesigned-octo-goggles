<?php
session_start();


$availableTime = $_POST['availableTime'];
$dateVar = $_SESSION['dateVar'];
$staffVar = $_SESSION['staff'];
$serviceTypeVar = $_SESSION['serviceTypeVar'];
$idVar = $_SESSION['customerid'];

$dateTimeVar = "$dateVar".' '."$availableTime".':00';
$_SESSION['datetime'] = $dateTimeVar;
$dateTimeVarComplet = date("Y-m-d H:i:s",strtotime($dateTimeVar));

$query = "INSERT INTO serviceRequest ( requestID, customerID, serviceID, staffID, date, status) VALUES (NULL, '$idVar', '$serviceTypeVar', '$staffVar', '$dateTimeVarComplet','Pending')"; 

$servername = "localhost";
$username = "id16490316_dduser";
$password = "]D5GZDcbGogPbNRL";
$database = "id16490316_ddcleaningservice";

$conn = mysqli_connect($servername,$username,$password,$database);
$resutl = mysqli_query($conn,$query);

?>
<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Dirty Deeds Done Dirt Cheap Confirmation</title>
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
								<h2>Confirmation</h2>
								<form method="POST" action="thankyou.php">
		Business Name: <input type="text" name="businessname" value="<?php echo $_SESSION['businessname'] ?>" readonly><br>
		First Name: <input type="text" name="firstname" value="<?php echo $_SESSION['firstname'] ?>" readonly><br>
		Last Name: <input type="text" name="lastname" value="<?php echo $_SESSION['lastname'] ?>" readonly><br>
		Address: <input type="text" name="address" value="<?php echo $_SESSION['address'] ?>" readonly><br>
		City: <input type="text" name="city" value="<?php echo $_SESSION['city'] ?>" readonly><br>
		State: <input type="text" name="state" value="<?php echo $_SESSION['state'] ?>" readonly><br>
		Zip: <input type="text" name="zipcode" value="<?php echo $_SESSION['zipcode'] ?>" readonly><br>
		Phone: format: (XXX)XXX-XXXX<input type="text" name="phone" pattern="([0-9]{3})[0-9]{3}[0-9]{4})" value="<?php echo $_SESSION['phone'] ?>" readonly><br>
		Email: <input type="text" name="newemail" value="<?php echo $_SESSION['newemail'] ?>" readonly><br>
		Date: <input type="text" name="date" value="<?php echo $dateTimeVar ?>" readonly><br>
		Status: <input type="text" name="status" value="Pending" readonly><br>
		Cost: <input type="text" name="cost" value="<?php echo $serviceCost ?>" readonly>
	
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