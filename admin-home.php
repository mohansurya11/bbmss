<?php
include('db_conn.php');
session_start();
?>


<!DOCTYPE html>
<html>
<head>
 
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/a.css">
</head>

<body>
     <header>
            <div class="wrapper">
                
                <nav>
                    
                    <ul>
                        <li><a href="admin-home.php">HOME</a></li>
                        <li><a href="donor-list.php">DONOR LIST</a></li>
                        <li><a href="stock-blood-list.php">STOCK BLOOD LIST</a></li>
                        <li><a href="logout.php">LOGOUT</a></li>

                        
                    </ul>
                </nav>
            </div>
        </header>
        <div id="body">
      <br>
      <?php
      $un=$_SESSION['un'];
      if(!$un)
      {
        header("Location:index.php");
      }
      ?>

        <div id="banner">

        <h1><i>WELCOME ADMIN</i></h1>
        <img src="images/header.jpg" style="margin-left: 20%;">
    </div>
   
    
    

</body>
<footer>
     <div class="wrapper">
         <ul>
             <li>Blood Bank Service Manager</li>
                 
        </ul>
     </div>
</footer>
</html>