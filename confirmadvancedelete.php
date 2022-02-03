<?php
	//1. establish db connection
	include "connectdb1.php";

	$id= $_GET["id"];

	//3. prepare the sql query
	$q="select * from advance where id = $id";

	//4. execute query
	$res=mysqli_query($dbc,$q);
	
	//5. get data
	$row = mysqli_fetch_array($res);
	
?>

<html>
<body>

<h3>Do you want to delete this data?</h3>

<table border=1>
	<tr>
		<td> Booking ID	</td>
		<td> <?php echo $row['id'];?>	</td>
	</tr>
	<tr>
		<td> Booking date	</td>
		<td> <?php echo $row['date'];?>	</td>
	</tr>
	<tr>
		<td> Name	</td>
		<td> <?=$row['eventName']?>	</td>
	</tr>
	<tr>
	<tr>
		<td> Faculty   </td>
		<td> <?=$row['remark']?>	</td>
	</tr>
	<tr>
	<tr>
		<td> Delete	</td>
		<td> 
			<a href="studeleteadvance.php?id=<?=$row['id']?>"> 
				<input type="button" value="Delete">
			</a>
			<a href="advance.php"> 
				<input type="button" value="Back">
			</a>
		</td>
	</tr>
</table>
</body>
</html>
