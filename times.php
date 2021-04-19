<?php
session_start();

$serviceTypeVar = $_POST['servicetype'];
$_SESSION['serviceTypeVar'] = $serviceTypeVar;
$dateVar = $_POST['date'];
$staffVar = $_POST['staff'];
$_SESSION['dateVar'] = $dateVar;
$_SESSION['staff'] = $staffVar;
$idVar = $_SESSION['customerid'];
$query = "SELECT * FROM `serviceRequest` WHERE date LIKE '$dateVar %' AND NOT status='Declined'";

$servername = "localhost";
$username = "id16490316_dduser";
$password = "]D5GZDcbGogPbNRL";
$database = "id16490316_ddcleaningservice";

$conn = mysqli_connect($servername,$username,$password,$database);

$results = mysqli_query($conn,$query);
$times = array('08','09','10','11','12','13','14','15','16','17');
while ($row = $results->fetch_assoc()){
	$each = $row['date'];
	$hour = date('H', strtotime($each));
	if(($key = array_search($hour, $times)) != false)
	{
		unset($times[$key]);
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
		<title>Dirty Deeds Done Dirt Cheap Times</title>
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
								 
	
	<h1>Please Choose Your Desired Time</h1>
	<form method="POST" action="confirmation.php">
		
		<select name="availableTime">
		<?php
			foreach($times as $key => $value):
				echo '<option value-"'.$key.'">'.$value.':00</option>';
			endforeach;
		?>
		</select>
		
		<br>
		<input type="submit" class="button" value="Continue" name="submit"><br><br>
		<a href="services.php" class="button">Back</a>
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