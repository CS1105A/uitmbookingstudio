<?php
	//1. establish db connection
	include "connectdb1.php";
	
	$id= $_GET['id'];
	
	//3. prepare the sql query 
	$q="select * from advance where id  = $id";

	//4. execute the query
	$res=mysqli_query($dbc,$q);
	
	//5. get data from the query
	$row = mysqli_fetch_array($res);
	
?>

<html>
<head>
	<title>Edit Booking Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

    <h2>Edit Form</h2>

    <form action="submitupdateadvancestud.php" method="GET"> 
	
		Booking ID: <input type="int" name="int" value="<?=$row['id']?>"> <br> 
		
		Date: <input type="date" name="date" value="<?=$row['date']?>"> <br> 
		
		Event Name:  <input type="text" name="eventName" value=<?=$row['eventName']?>> <br>
		
		Remark:  <input type="text" name="remark" value=<?=$row['remark']?>> 

        <input type="hidden" name="form_submitted" value="1" />
		
		<input type="hidden" name="date" value="<?php echo $id;?>" />

        <input type="submit" value="Submit">

    </form>
</body>
</html>