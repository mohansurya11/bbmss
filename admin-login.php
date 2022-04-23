<?php
include('db_conn.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>ADMIN LOGIN</title>
    <style >
    	h2{
    		font-size: 60px;
    	}
    </style>
    

</head>
<body bgcolor ="red">
 <br><br><br><br>
      <center><h2>ADMIN LOGIN</h2></center>
      
        <br><br>
        <form action="" method="post">
        <table align="center">
          <tr>
            <td width="200px" height="70px"><b>Enter Username</b></td>
            <td width="100px " height="70px"><input type="text" name="un" placeholder="Enter Username" style="width: 180px;height: 40px;border-radius: 10px;"></td>
          </tr>
          <tr>

            <td width="200px" height="70px" color="white"><b>Enter password</b></td>
            <td width="100px " height="70px"><input type="password" name="ps" placeholder="Enter Password" style="width: 180px;height: 40px;border-radius: 10px;"></td>
          </tr>
          <tr>
            <td><center><input type="submit" name="sub" value="Login" style="width:70px; height: 30px;border-radius: 5px;"></center></td>
          </tr>
        </table>
      </form>
      <?php
      if(isset($_POST['sub']))
      {
        $un=$_POST['un'];
        $ps=$_POST['ps'];
        $q=$db->prepare("SELECT * FROM admin where uname='$un' && pass='$ps'");
        $q->execute();
        $res=$q->fetchAll(PDO::FETCH_OBJ);
        if($res) {
          $_SESSION['un']=$un;
          header("Location:admin-home.php");

        }
        else
        {
          echo "<script>alert('Invalid User')</script>";
        }
      }

      ?>
      </div>
      
    </div>
  </div>
</body>
</html>




  