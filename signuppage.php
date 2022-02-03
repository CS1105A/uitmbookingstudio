<!DOCTYPE html>
<html lang="en">
<title>UiTM Booking Studio</title>
<link rel="icon" type="image/x-icon" href="1.png">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">

<style>
	body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
	body {font-size:16px;}
	.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
	.w3-half img:hover{opacity:1}

</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-green w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>UiTM Booking Studio</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="mailto:uitmbookingstudio@gmail.com" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Any inquries?</a> 
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-green w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-green w3-margin-right" onclick="w3_open()">☰</a>
  <span>UiTM Booking Studio</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
  <img class="w3-image" src="studio.png" alt="Home" width="1500" height="800">
  <div class="w3-display-bottomleft w3-padding-large w3-opacity">
  </div>
</header>
    <h1 class="w3-jumbo"><b>Sign Up</b></h1>
    <h1 class="w3-xxxlarge w3-text-green"><b>To book the studio.</b></h1>
    <hr style="width:800px;border:2px solid green" class="w3-round">
  </div>

	<!--Form-->
	<form action="submit_signup.php" method="GET">
	<table>
	<tr>
		<td> Student ID: </td>
		<td> <input type="text" name="id" required></td>
	</tr> 
	
	<tr>	
		<td> Name: </td> 
		<td> <input type="text" name="firstname" required></td>
	</tr>
	
	<tr>
		<td> Password: </td>
		<td> <input type="password" name="password" required></td>
	</tr> 

	<tr>
		<td> Faculty: </td>
		<td> <input type="text" name="faculty" required></td>
	</tr>
	
	<tr>	
		<td> Email:  </td>
		<td> <input type="text" name="email" required></td>
	</tr> 
	</table>
	
		<input type="hidden" name="form_submitted" value="1"/>
		<input type="submit" value="Submit" required>
	
		<p>
			Already a member? <a href="loginpage.php">Login</a>
		</p>
    </form>
	

<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right"> © 2022 Copyright UiTM Booking Studio</p></div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

</script>
</body>
</html>