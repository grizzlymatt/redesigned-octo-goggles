<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require $_SERVER['DOCUMENT_ROOT'] . '/mail/Exception.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'] . '/mail/SMTP.php';

$mail = new PHPMailer;
$mail->isSMTP(); 
$mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
$mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
$mail->Port = 587; // TLS only
$mail->SMTPSecure = 'tls'; // ssl is deprecated
$mail->SMTPAuth = true;
$mail->Username = 'labashousky@gmail.com'; // email
$mail->Password = 'ye'; // password
$mail->setFrom('labashousky@gmail.com', 'Dirty Deeds Cleaning Service'); // From email and name
$mail->addAddress('labashouskym18@students.ecu.edu', 'Mr. Labashousky'); // to email and name
$mail->Subject = 'Dirty Deeds Cleaning Service Appointment';
$mail->msgHTML("Thank you for requesting a cleaning. If you need to cancel please do so at least 24 hours in advance of appointment."); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
$mail->AltBody = 'HTML messaging not supported'; // If html emails is not supported by the receiver, show this body
// $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file
$mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
// if(!$mail->send()){
    // echo "Mailer Error: " . $mail->ErrorInfo;
// }else
	//{
    echo "Message sent!";
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