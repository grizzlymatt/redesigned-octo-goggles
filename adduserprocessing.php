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
	<h1>Customer Add Processing</h1>
	<?php
		// Variables
		$idVar = $_POST['customerID'];	
		$businessNameVar = $_POST['businessName'];
		$firstNameVar = $_POST['firstName'];
		$lastNameVar = $_POST['lastName'];
		$addressVar = $_POST['address'];
		$cityVar = $_POST['city'];
		$stateVar = $_POST['state'];
		$zipCodeVar = $_POST['zipCode'];
		$phoneVar = $_POST['phone'];
		$newEmailVar = $_POST['email'];
					
			
		// 1. Connect to the database
								
				$servername = "localhost";
				$username = "id16490316_dduser";
				$password = "]D5GZDcbGogPbNRL";
				$database = "id16490316_ddcleaningservice";
							  
				$con = mysqli_connect($servername,$username,$password,$database);
							  
			// 1a. Check connection to database
							  
				if (mysqli_connect_errno()){
					printf("Connect failed: %s\n", mysqli_connect_error());
				exit();
					}
							  
			// 2. Send a query to that database
							  
				$sql = "INSERT * customer (customerID, businessName, firstName, lastName, address, city, state, zipCode, phone, email) VALUES (NULL, '$businessNameVar', '$firstNameVar', '$lastNameVar', '$addressVar', '$cityVar', '$stateVar', '$zipCodeVar', '$phoneVar', '$newEmailVar')"; 
					
					//"Insert into customer ('customerID', 'businessName', 'firstName', 'lastName', 'address', 'city', 'state', 'zipCode', 'phone', 'email') values (NULL, '$businessName', '$firstName', '$lastName', '$address', '$city', '$state', '$zipCode', '$phone', '$email')";
				mysqli_query($con,$sql);
							  
			// 3. Work with the returned data
				
			// 4. Release the data
							  
			// 5. Close the database connection
							  
				mysqli_close($con);
	
		echo "Thank you for your submission of $firstNameVar $lastNameVar<br>";
		echo "The customer $firstNameVar, has been entered into the database. ";
		
	?>
	
	<?php
		} else {
			echo "<h1>Not a valid login</h1>";
			echo "<p>Please go to the <a href='logIn.php'>login screen</a>.</p>";
		}
	?>
</body>
</html>