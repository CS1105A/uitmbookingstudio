<?php
	include "connectdb1.php";
	
	$id= $_GET["id"];
	
	$q="DELETE FROM student WHERE id = $id";
	

	if (mysqli_query($dbc, $q)) {

?>		
		<script language="JavaScript">
		alert('Record deleted successfully');		
		</script>
<?php
		
		
		header("Location: admin.php");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($dbc);
	}


?>