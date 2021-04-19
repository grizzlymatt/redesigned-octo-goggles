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
	<h1>Admin Jobs</h1>
	<p>Please choose what action you want to perform</p>
	<ul class="actions">
		<li><a href="adduser.php" class="button">Add Customer</a></li>
		<li><a href="deleteuser.php" class="button">Delete Customer</a></li>
		<li><a href="updateuser.php" class="button">Update Customer</a></li>						
		<li><a href="viewschedule.php" class="button">View Schedule</a></li>
	</ul>
	</p>
	
	<form method="post" action="courseProcessing.php"><br>
		Course number:<input type="text" name="number"><br>
		Course name:<input type="text" name="name"><br>
		Course description:<input type="text" name="description"><br>
		Course prereq:<input type="text" name="prereq"><br>
		<input type="hidden" name="pirateID" value="labashouskym18">
		<input type="submit" name="submit" value="Submit">
	</form>
	
	<?php
		} else {
			echo "<h1>Not a valid login</h1>";
			echo "<p>Please go to the <a href='logIn.php'>login screen</a>.</p>";
		}
	?>
</body>
</html>