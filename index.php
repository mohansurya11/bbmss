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
<script type="text/javascript" src="js/script.js"></script>



</head>
<body>
	<center><h2>BLOOD BANK SERVICE</h2></center>


<div class="col-12" style="height: 650px">
	<div id="comname">
		<center><h2>BLOOD BANK SERVICE</h2></center>
	</div>
	<div id="nav" class="col-12">
		<ul>
		  <li><a class="active" href="index.php">Home</a></li>
		  <li><a href="about.php">About</a></li>
		  <li><a href="contact.php">Contact</a></li>
		  <li><a href="register.php">Be a Donor</a></li>
		   <li><a href="admin-login.php">Admin</a></li>
		 
		</ul>
	</div>
	
	<div id="info" class="col-12">
		
	</div>
	<img class="mySlides col-12" src="images/img6.jpg">
	<img class="mySlides col-12" src="images/img7.jpg">
	
	
</div>
	<div style="margin: 0; padding: 1%; text-align: center;">
		<span style="font-size: 40px;color: rgb(168, 28, 6);font-weight: bold;">OUR VISIONS</span><br><br>
		<p style="text-align: left;"><p>To pave way for a safer and better tommorrow.</p>
		<p>Safer, by bringing blood donors and those in need to a common platform.</p>
		<p>To make the best use of contemporary technologies in delivering a promising web portal to bring together all the blood donors; thereby fulfilling every blood request in our city.</p>
		</p>
	</div>
	<div style="padding: 5%; text-align: center; overflow: auto;">
		<span class="col-4" style="float: left; padding: 3px;overflow: hidden;text-overflow: ellipsis;">
			<i class="fa fa-bed" aria-hidden="true"></i><br><br><br><h3>Compassion</h3> Compassinate toward the betterment of the society
		</span>
		
		<span class="col-4" style="float: right; padding: 3px;overflow: hidden;text-overflow: ellipsis;">
			<i class="fa fa-child" aria-hidden="true"></i><br><br><br><h3>Advancement</h3>Using technology for fulfilment of society need
		</span>

		<span class="col-4" style="float: right; padding: 3px;overflow: hidden;text-overflow: ellipsis;">
			<i class="fa fa-building" aria-hidden="true"></i><br><br><br><h3>Network</h3> Connecting people to a common platform
		</span>
	</div>


<div id="footer" class="col-12" style="margin: 0; padding: 0;overflow: auto;">
	<div id="upper" class="col-12">
        <div style="padding: 0px 0px 0px 50px; color: white;overflow: auto;">
            <div class="col-3" style="float: left; height: 250px; padding: 10px 40px 10px 20px; font-size: 15px; color: rgb(171, 175, 181);overflow: hidden;text-overflow: ellipsis;">
                <h5>ABOUT US</h5><p>Student from SIST</p>
            </div>

            <div class="col-3" style="float: right; height: 250px; padding: 10px;overflow: hidden;text-overflow: ellipsis;">
                <h5>SOCIAL ICONS</h5><p><a href="#" class="fa fa-facebook"></a><a href="#" class="fa fa-twitter"></a><a href="#" class="fa fa-google"></a><a href="#" class="fa fa-youtube"></a><a href="#" class="fa fa-instagram"></a></p>
            </div>

            <div class="col-3" style="float: right; height: 250px; padding: 10px;overflow: hidden;text-overflow: ellipsis;">
                <h5>HELP</h5> <a style="text-decoration:none" href="register.php"><button style="background-color:lightgrey;padding:5px">Donate Blood</button></a>
            </div>


            <div class="col-3" style="float: right; height: 250px; padding: 10px; font-size: 15px; color: rgb(171, 175, 181);overflow: hidden;text-overflow: ellipsis;">
                <h5>KEEP IN TOUCH</h5><p> bbms@gmail.com</p>
            </div>
        </div>
    </div>
    
</div>








</body>


</html>