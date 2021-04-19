<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		if(isset($_SESSION["status"])){
	?>
	<h1>Customer Delete Form</h1>
	<p>Please enter the customer information</p>
<form method="POST" action="deleteuserprocessing.php"><br>
		<input type="text" name='customerID' hidden="">
		First Name: <input type="text" name="firstName"><br>
		Last Name: <input type="text" name="lastName"><br>
		
  <input type="submit" name="submit" value="Submit">
		</form>
	<?php
		} else {
			echo "<h1>Not a valid login</h1>";
			echo "<p>Please go to the <a href='admin.php'>login screen</a>.</p>";
		}
	?>
</body>
</html>