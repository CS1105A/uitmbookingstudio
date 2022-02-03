<?php
	session_start();
	if(!isset($_SESSION["id"])){
		header("Location: loginpage.php");
	}
		
?>
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

	a:hover, a:active {
	background-color: green; }

	div.gallery {
	margin: 5px;
	border: 1px solid #ccc;
	float: left;
	width: 180px; }

	div.gallery:hover {
	border: 1px solid #777; }

	div.gallery img {
	width: 100%;
	height: auto; }

	div.desc {
	padding: 15px;
	text-align: center; }
	
	.error {color: #FF0000;}

	</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-green w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3><b><p>UiTM Booking Studio</b></h3></p>
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="#showcase" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Showcase</a> 
    <a href="#services" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Services</a> 
    <a href="#admin" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Get to know us!</a> 
    <a href="#booking" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Booking</a> 
	<a href="#equipment" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Equipment</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a>
	<a href="#feedback" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Feedback</a>
	<a href="search.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white" target= "_blank" >Search</a>
	<a href="logout.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white" >Logout</a>
  </div>
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
    <h1 class="w3-jumbo"><b>Main Page</b></h1>
    <h1 class="w3-xxxlarge w3-text-green"><b>Showcase.</b></h1>
    <hr style="width:50px;border:5px solid green" class="w3-round">
  </div>
  
  <!-- Photo grid (modal) -->
  <div class="w3-row-padding">
    <div class="w3-half">
      <img src="2.jpg" style="width:100%" onclick="onClick(this)" alt="Take a peak of our studio">
      <img src="6.jpeg" style="width:100%" onclick="onClick(this)" alt="Second room of studio">
      <img src="7.jpeg" style="width:100%" onclick="onClick(this)" alt="Main station picture 2">
	  <img src="9.jpeg" style="width:100%" onclick="onClick(this)" alt="Huge green screen on first room">
    </div>

    <div class="w3-half">
      <img src="3.jpg" style="width:100%" onclick="onClick(this)" alt="The main station">
      <img src="8.jpeg" style="width:100%" onclick="onClick(this)" alt="Main station picture 3">
      <img src="10.jpeg" style="width:100%" onclick="onClick(this)" alt="Huge green screen on first room picture 2">
	   <img src="1.jpeg" style="width:100%" onclick="onClick(this)" alt="Lighting and display screen">
    </div>
	
	
  </div>

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

  <!-- Services -->
  <div class="w3-container" id="services" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-green"><b>Services.</b></h1>
    <hr style="width:50px;border:5px solid green" class="w3-round">
    <p>We are a student based service that focus on what's best for your program and what's best for you!</p>
    <p>Some text about our services - what we do and what we offer.
  </div>
  
  <!-- Admin -->
  <div class="w3-container" id="admin" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-green"><b>Admin</b></h1>
    <hr style="width:50px;border:5px solid green" class="w3-round">
    <p>The best team in the world.</p>
    </p>
    <p><b>Our admin are thoughtfully chosen</b>:</p>
  </div>

  <!-- The Team -->
  <div class="w3-row-padding">
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="ariena.jpg" alt="Ariena" style="width:100%">
        <div class="w3-container">
          <h3>Ariena</h3>
          <p class="w3-opacity"> Main Admin</p>
		  <p>Expert in studio management and system</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="naqib.jpeg" alt="Naqib" style="width:100%">
        <div class="w3-container">
          <h3>Naqib</h3>
          <p class="w3-opacity">2nd Admin</p>
		  <p>Expert in all high-end techs in the studio</p>
        </div>
      </div>
    </div>
    <div class="w3-col m4 w3-margin-bottom">
      <div class="w3-light-grey">
        <img src="dayah.jpg" alt="dayah" style="width:100%">
        <div class="w3-container">
          <h3>Hidayah</h3>
          <p class="w3-opacity">3rd Admin</p>
		  <p>Expert in lightings and Naqib's assistant</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Booking & Equipment -->
  <div class="w3-container" id="booking" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-green"><b>Booking.</b></h1>
    <hr style="width:50px;border:5px solid green" class="w3-round">
    <p>Some text of booking....</p>
  </div>

  <div class="w3-row-padding">
    <div class="w3-half w3-margin-bottom">
      <ul class="w3-ul w3-light-grey w3-center">
        <li class="w3-dark-grey w3-xlarge w3-padding-32">Basic</li>
        <li class="w3-padding-16">Main studio first room only</li>
        <li class="w3-padding-16">3 main lighting</li>
        <li class="w3-padding-16">3 high end PC</li>
        <li class="w3-padding-16">1 huge television screen</li>
        <li class="w3-padding-16">1 360 degree camera</li>
        <li class="w3-padding-16">infotech ready to assist</li>
        <li class="w3-padding-16">
          <h2>$0</h2>
          <span class="w3-opacity">free of charge!</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <a href= "basic.php">Book your date now!</a>
        </li>
      </ul>
    </div>
        
    <div class="w3-half">
      <ul class="w3-ul w3-light-grey w3-center">
        <li class="w3-green w3-xlarge w3-padding-32">Advance</li>
        <li class="w3-padding-16">Whole studio - 2 room</li>
        <li class="w3-padding-16">5 main lighting</li>
        <li class="w3-padding-16">5 high end PC</li>
        <li class="w3-padding-16">2 huge television screen</li>
		     <li class="w3-padding-16">1 dslr and 360 degree camera</li>
        <li class="w3-padding-16">infotech ready to assist</li>
        <li class="w3-padding-16">
          <h2>$0</h2>
          <span class="w3-opacity">free of charge!</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
           <a href= "advance.php">Book your date now!</a>
        </li>
      </ul>
    </div>
  </div>
  
  
  
  
  <!-- Equipment -->
  <div class="w3-container" id="equipment" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-green"><b>Equipment.</b></h1>
    <hr style="width:50px;border:5px solid green" class="w3-round">
    <p>Here is the equipment that we focus on what's best for your program and what's best for you!</p>
    <p>Some text about our equipment - what we do and what we offer.
    </p>
  </div>
  
	<div class="gallery">
	<a target="_blank" href="lights.jpg">
		<img src="lights.jpg" alt="Studio Lighting" width="600" height="400">
	</a>
	<div class="desc">Studio Lighting</div>
	</div>

	<div class="gallery">
	<a target="_blank" href="360.jpg">
		<img src="360.jpg" alt="360 camera" width="600" height="400">
	</a>
	<div class="desc">360 degree camera</div>
	</div>
  

	<div class="gallery">
	<a target="_blank" href="pc.jpg">
		<img src="pc.jpg" alt="3 monitor setup" width="600" height="400">
	</a>
	<div class="desc">3 monitor setup</div>
	</div>

	<div class="gallery">
	<a target="_blank" href="lcd.jpg">
		<img src="lcd.jpg" alt="Huge television screen" width="600" height="400">
	 </a>
	<div class="desc">Huge television screen</div>
	</div>

	<div class="gallery">
	<a target="_blank" href="green.jpg">
		<img src="green.jpg" alt="green screen" width="600" height="400">
	</a>
	<div class="desc">Green screen slide</div>
	</div>
  
	<div class="gallery">
	<a target="_blank" href="dslr.png">
		<img src="dslr.png" alt="dslr" width="600" height="400">
	</a>
	<div class="desc">Nikon DSLR</div>
	</div>
  
	
  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-green"><b>Contact.</b></h1>
    <hr style="width:50px;border:5px solid green" class="w3-round">
    <p>Do you have some questions? Fill out the form and fill me in with the details :) We love meeting new people!</p>
	
	
		<!--Form-->


    <form action="contact.php" method="GET">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="message" required>
      </div>
	
      <button type="submit" name="form_submitted" value="1" class="w3-button w3-block w3-padding-large w3-green w3-margin-bottom">Send Message</button>
    </form>  
  </div>
  
  

  <!-- Feedback -->
  <div class="w3-container" id="feedback" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-green"><b>Feedback.</b></h1>
    <hr style="width:50px;border:5px solid green" class="w3-round">
    <p>Write your best experience and feedback while using the studio!</p>
	
	<?php
	// define variables and set to empty values
	$idErr = $nameErr = $dateErr = $feedbackErr = $studioErr = "";
	$id = $name = $date = $feedback = $comment = $studio = "";

  
	if (empty($_POST["id"])) {
		$idErr = "Booking ID is required";
	} else {
		$id = test_input($_POST["id"]);
		}
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["name"])) {
		$nameErr = "Booking name is required";
	} else {
		$name = test_input($_POST["name"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
		$nameErr = "Only letters and white space allowed";
		}
	}

	if (empty($_POST["date"])) {
		$dateErr = "Booking date is required";
	} else {
		$date = test_input($_POST["date"]);
		}
	}

	if (empty($_POST["comment"])) {
		$comment = "";
	} else {
		$comment = test_input($_POST["comment"]);
		}

	if (empty($_POST["studio"])) {
		$studioErr = "Studio booked is required";
	} else {
		$studio = test_input($_POST["studio"]);
		}

	if (empty($_POST["feedback"])) {
		$feedbackErr = "Feedback is required";
	} else {
		$feedback = test_input($_POST["feedback"]);
		}

	function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
	}
	?>

	<p><span class="error">* required field</span></p>
	<form method="post">  
	Booking ID: <input type="int" name="id" value="<?php echo $id;?>">
	<span class="error">* <?php echo $idErr;?></span>
	<br><br>
	Booking Name: <input type="text" name="name" value="<?php echo $name;?>">
	<span class="error">* <?php echo $nameErr;?></span>
	<br><br>
	Booking Date: <input type="date" name="date" value="<?php echo $date;?>">
	<span class="error">* <?php echo $dateErr;?></span>
	<br><br>
	Studio booked:
	<input type="radio" name="studio" <?php if (isset($studio) && $studio=="Basic") echo "checked";?> value="Basic">Basic
	<input type="radio" name="studio" <?php if (isset($studio) && $studio=="Advance") echo "checked";?> value="Advance">Advance
	<span class="error">* <?php echo $feedbackErr;?></span>
	<br><br>
	Satiesfied:
	<input type="radio" name="feedback" <?php if (isset($feedback) && $feedback=="Yes") echo "checked";?> value="Yes">Yes
	<input type="radio" name="feedback" <?php if (isset($feedback) && $feedback=="No") echo "checked";?> value="No">No 
	<span class="error">* <?php echo $feedbackErr;?></span>
	<br><br>
	Comment: <textarea name="comment" rows="3" cols="40"><?php echo $comment;?>
	</textarea>
	<br><br>
		<input type="submit" name="submit" value="Submit">  
	</form>

	<?php
	echo "<h2>Your Input:</h2>";
	echo"Booking ID: ";
	echo $id;
	echo "<br>";
	echo"Booking name: ";
	echo $name;
	echo "<br>";
	echo"Booking date ";
	echo $date;
	echo "<br>";
	echo"Studio chosen: ";
	echo $studio;
	echo "<br>";
	echo"Are satiesfied?";
	echo "<br>";
	echo $feedback;
	echo ". ";
	echo $comment;
	echo "<br>";
	?>
		</p>
	  </div>

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

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>