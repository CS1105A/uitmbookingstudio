<?php
	//1. establish db connect
	include "connectdb1.php";
	
	//2. retrieve data from update form
	if($_GET["form_submitted"]==1)	
	{
		$eventName= mysqli_real_escape_string($dbc, $_GET["eventName"] );
		$remark= mysqli_real_escape_string($dbc, $_GET["remark"] );
		$date= $_GET["date"];
		$id= $_GET["id"];
	}

	//3. prepare the sql
	$q="UPDATE basic SET eventName='".$eventName."', remark='".$remark."', date=$date WHERE id='$id'";
	
	//4. execute query
	if (mysqli_query($dbc, $q)) {
		header("Location: basic.php");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($dbc);
	}
?>