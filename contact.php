<?php
	//1. establish the db connection
	include "connectdb1.php";
	
	//2. retrive data from form
	if($_GET["form_submitted"]==1)	
	{	
		$name= mysqli_real_escape_string($dbc, $_GET["name"]);
		$email=  mysqli_real_escape_string($dbc, $_GET["email"]);
		$message=  mysqli_real_escape_string($dbc, $_GET["message"]);
	}

	//3. prepare sql query
	$q="INSERT INTO contact (name, email, message) VALUES('$name', '$email', '$message')";

	//4. execute sql query
	if (mysqli_query($dbc, $q)) {
		echo "Send successfully";
		header("Location: index.php");

	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($dbc);
	}

?>