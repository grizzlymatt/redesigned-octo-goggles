<?php
session_start();
$username="dirtydeedsadmin";
$password="dirtydeedsadmin1234";

if($_SERVER["REQUEST_METHOD"]=="POST"){
	if($username==$_POST["username"]&&$password==$_POST["password"]){
		$_SESSION["status"]="valid";
	} else {
		unset($_SESSION["status"]);
	}
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login page</title>
</head>

<body>
	<?php
	if(isset($_SESSION["status"])){
		echo "<h1>Login successful</h1>";
		echo "Please proceed to the <a href='adminjobs.php'>Admin Jobs page</a>.";
	} else {
		
		
		?>
	<h1>Login</h1>
	<form method="POST" action="admin.php">
		Username: <input type="text" name="username"><br>
		Password: <input type="password" name="password"><br>
		<input type="submit" value="Submit" name="submit"><br>
	</form>
	<?php
	}
	?>
</body>
</html>