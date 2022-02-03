<?php
	//1. establish the db connection
	include "connectdb1.php";
	
	//2. retrive data from form
	if($_GET["form_submitted"]==1)	
	{	
		$id= $_GET["id"];
		$name= mysqli_real_escape_string($dbc, $_GET["firstname"]);
		$password= password_hash (mysqli_real_escape_string($dbc, $_GET["password"]), PASSWORD_DEFAULT);
		$faculty=  mysqli_real_escape_string($dbc, $_GET["faculty"]);
		$email=  mysqli_real_escape_string($dbc, $_GET["email"]);
	}

	//3. prepare sql query
	$q="INSERT INTO student (id, name, password, faculty, email) VALUES('$id', '$name', '$password', '$faculty', '$email')";

	//4. execute sql query
	if (mysqli_query($dbc, $q)) {
		echo "Sign up successfully";
		header("Location: loginpage.php");

	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($dbc);
	}

?>