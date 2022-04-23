<?php
ob_start();
session_start();
require "DB_conn.php";

?>


<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/main2.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">





</head>
<body>

<div class="col-12" style="height: 350px;">
	
	<div id="nav" class="col-12">
		<ul>
		  <li><a href="index.php">Home</a></li>
		  <li><a href="about.php">About</a></li>
		  <li><a class="active" href="contact.php">Contact</a></li>
		  <li><a href="register.php">Be A Donor</a></li>
		  
		  
		  <li><a href="admin-login.php">Admin</a></li>
		</ul>
	</div>
	<span class="info2" style="left: 40%">CONTACT</span>


	<img class="myFrontPic col-12" src="images/img11.jpg" style="height: 350px;">
</div>
	
</div>

<div style="margin: 0; padding: 1%; text-align: center;">
		<span style="font-size: 40px;color: rgb(168, 28, 6);font-weight: bold;">REACH US</span><br><br>
		
	</div>
	<div style="padding: 5%; text-align: center; overflow: auto;">
		<span class="col-4" style="float: left; padding: 3px;overflow: hidden;text-overflow: ellipsis;">
			<i class="fa fa-map-marker" aria-hidden="true"></i><br><br><br><h3>Address</h3> No:8,Camp road,Chennai-600012
		</span>
		
		<span class="col-4" style="float: right; padding: 3px;overflow: hidden;text-overflow: ellipsis;">
			<i class="fa fa-phone" aria-hidden="true"></i><br><br><br><h3>Phone</h3>+91 90000 80000
		</span>

		<span class="col-4" style="float: right; padding: 3px;overflow: hidden;text-overflow: ellipsis;">
			<i class="fa fa-envelope" aria-hidden="true"></i><br><br><br><h3>E-Mail</h3> bbsm@gmail.com
		</span>
	</div>





</body>


</html>