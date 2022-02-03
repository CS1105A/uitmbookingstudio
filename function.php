<?php
	function check_login($connect)
	{
		if(isset($_SESSION['id']))
		{
			$id = $_SESSION['id'];
			$query = "select * from id where id = '$id' limit 1";
			
			$result = mysqli_query($connect,$query);
			if($result && mysqli_num_rows($result) > 0)
			{
				$user = mysqli_fetch_assoc($result);
				return $user;
			}
		}
		header("Location: index.php");
		die;
	}
?>