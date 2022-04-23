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
                        <li><a href="stock-blood-list.php">STOCK BLOOD</a></li>
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
      <h1>STOCK BLOOD LIST</h1><br>
      <center><div id="form">
        <table>
            <tr>
              <td><center><b>Name</b></center></td>
              <td><center><b>Qty</b></center></td>
            </tr>


            <tr>
              <td><center>A+</center></td>
              <td><center>
                <?php
                $q=$db->query("SELECT * FROM donor WHERE bgroup='A+' or bgroup='a+'");
                echo $row=$q->rowcount();
                ?>
              </center></td>
              
              
            </tr>


            <tr>
              <td><center>A-</center></td>
              <td><center>
                <?php
                $q=$db->query("SELECT * FROM donor WHERE bgroup='A-' or bgroup='a-'");
                echo $row=$q->rowcount();
                ?>
              </center></td>
              
              
            </tr>

            <tr>
              <td><center>B+</center></td>
              <td><center>
                <?php
                $q=$db->query("SELECT * FROM donor WHERE bgroup='B+' or bgroup='b+'");
                echo $row=$q->rowcount();
                ?>
              </center></td>
              
              
            </tr>

            <tr>
              <td><center>B-</center></td>
              <td><center>
                <?php
                $q=$db->query("SELECT * FROM donor WHERE bgroup='B-' or bgroup='b-'");
                echo $row=$q->rowcount();
                ?>
              </center></td>
              
              
            </tr>

              <tr>
              <td><center>O+</center></td>
              <td><center>
                <?php
                $q=$db->query("SELECT * FROM donor WHERE bgroup='O+' or bgroup='o+'");
                echo $row=$q->rowcount();
                ?>
              </center></td>
              
              
            </tr>

            <tr>
              <td><center>O-</center></td>
              <td><center>
                <?php
                $q=$db->query("SELECT * FROM donor WHERE bgroup='O-' or bgroup='o-'");
                echo $row=$q->rowcount();
                ?>
              </center></td>
              
              
            </tr>


        
              <tr>
              <td><center>AB+</center></td>
              <td><center>
                <?php
                $q=$db->query("SELECT * FROM donor WHERE bgroup='AB+' or bgroup='ab+'");
                echo $row=$q->rowcount();
                ?>
              </center></td>
            </tr>

            <tr>
              <td><center>AB-</center></td>
              <td><center>
                <?php
                $q=$db->query("SELECT * FROM donor WHERE bgroup='AB-' or bgroup='ab-'");
                echo $row=$q->rowcount();
                ?>
              </center></td>
            </tr>

            
    
            
          </table>
        </center></div>

       
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