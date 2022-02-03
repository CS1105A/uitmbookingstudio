<?php
	include "connectdb1.php";
	
	$id= $_GET["id"];
	
	$q="DELETE FROM basic where id = $id";
	

	if (mysqli_query($dbc, $q)) {

?>		
		<script language="JavaScript">
		alert('Record deleted successfully');		
		</script>
<?php
		
		
		header("Location: basic.php");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($dbc);
	}


?>