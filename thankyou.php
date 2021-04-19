<?php
session_start();
    
$headers = 'From: labashousky@gmail.com';

$message = "Thank you for requesting a cleaning. \r\nWe will notify you upon approval of your request.";
	
$message = wordwrap($message, 80, "\r\n");
	
$mailVar = mail(trim($_SESSION['newemail']), 'Dirty Deeds Cleaning Service Request', $message, $headers);
?>
<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Dirty Deeds Done Dirt Cheap Thank You</title>
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
								 
	<h1>Thank You For Your Request</h1>
	
								
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