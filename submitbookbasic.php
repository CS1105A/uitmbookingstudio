<?php
	//1. establish the db connection
	include "connectdb1.php";
	
	//2. retrive data from form
	if($_GET["form_submitted"]==1)	
	{	
		$id= $_GET["id"];
		$date= $_GET["date"];
		$eventName= mysqli_real_escape_string($dbc, $_GET["eventName"]);
		$remark=  mysqli_real_escape_string($dbc, $_GET["remark"]);
	}

	//3. prepare sql query
	$q="INSERT INTO basic (id, date, eventName, remark) VALUES('$id', '$date', '$eventName', '$remark')";

	//4. execute sql query
	if (mysqli_query($dbc, $q)) {
		echo "Booking successfully";
		header("Location: basic.php");

	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($dbc);
	}

?>