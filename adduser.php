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
	<h1>Customer Add Form</h1>
	<p>Please enter the customer information</p>
	<form method="POST" action="adduserprocessing.php"><br>
		<input type="hidden" name="customerID">
		Business Name: <input type="text" name="businessName"><br>
		First Name: <input type="text" name="firstName"><br>
		Last Name: <input type="text" name="lastName"><br>
		Address: <input type="text" name="address"><br>
		City: <input type="text" name="city"><br>
		State: <input type="text" name="state"><br>
		Zip: <input type="text" name="zipCode"><br>
		Phone: format: (XXX)XXX-XXXX<input type="text" name="phone" pattern="([0-9]{3})[0-9]{3}[0-9]{4})"><br>
		Email: <input type="text" name="email"><br>
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