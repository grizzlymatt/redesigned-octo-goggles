<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dirty Deeds View Schedule</title>
</head>

<body>
	<?php
		if(isset($_SESSION["status"])){
	?>
	<h1>Daily Schedule Form</h1>
<p>Please Select a Date for information</p>
<form method="POST" action="viewscheduleprocessing.php"><br>
		<input type="date" name="date">
		<br>
		<input type="submit" class="button" value="Continue" name="submit"><br>
		</form>
	<?php
		} else {
			echo "<h1>Not a valid login</h1>";
			echo "<p>Please go to the <a href='admin.php'>login screen</a>.</p>";
		}
	?>
</body>
</html>