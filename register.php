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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script type="text/javascript" src="js/script.js"></script>



</head>
<body>

<div class="col-12" style="height: 350px">
	<div id="comname">
		
	</div>
	<div id="nav" class="col-12">
		<ul>
		  <li><a href="index.php">Home</a></li>
		  <li><a href="about.php">About</a></li>
		  <li><a href="contact.php">Contact</a></li>
		  <li><a class="active" href="register.php">Be A Donor</a></li>
		  
		  <li><a href="admin-login.php">Admin</a></li>
		  
		</ul>
	</div>
	<span class="info2" style="left: 40%">REGISTER</span>
	<img class="myFrontPic col-12" src="images/img1.jpg" style="height: 350px;">
</div>
<br>
	
  <div class="container">
    <div class="row">
      <div class="col-md-8 mt-4">
        
        <div class="card">
          <div class="card-header">
            <h3>Register
            </h3>
          </div>
          <div class="card-body">
            <form action="" method="POST">
              <div class="mb-3">
                <label>Full Name</label>
                <input type="text"  name="fullname" required class="form-control" />
                
              </div>

              <div class="mb-3">
                <label>Email</label>
                <input type="text"  name="email" required class="form-control" />
                
              </div>

              <div class="mb-3">
                <label>Phone</label>
                <input type="text"  name="phone" required class="form-control" />
                
              </div>

              <div class="mb-3">
                <label>Address</label>
                <input type="text"  name="address" required class="form-control" />
                
              </div>

              <div class="mb-3">
                <label>City</label>
                <input type="text"  name="city" required class="form-control" />
                
              </div>

              <div class="mb-3">
                <label>Age</label>
                <input type="text"  name="age" required class="form-control" />
                
              </div>

              <div class="mb-3">
                <label>BloodGroup (eg:O+)</label>
                <input type="text"  name="bgroup" required class="form-control" />
                
              </div>




              <div class="mb-3">
                <button type="submit" name="save_student_btn" class="btn btn-primary">Save</button>
                
              </div> 
            </form> 

            <?php

            if(isset($_POST['save_student_btn']))
{
  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $age = $_POST['age'];
  $bgroup = $_POST['bgroup'];
  
  try{
  $query = "INSERT INTO donor (fullname, email, phone, address, city, age, bgroup) VALUES (:fullname, :email, :phone, :address, :city, :age, :bgroup)";
  $query_run = $db->prepare($query);

  $data = [
    ':fullname' => $fullname,
    ':email' => $email,
    ':phone' => $phone,
    ':address' => $address,
    ':city' => $city,
    ':age' => $age,
    ':bgroup' => $bgroup,
    
    


  ];
  $query_execute = $query_run->execute($data);


  if($query_execute)
  {
    $_SESSION['message'] = "Inserted Successfully";
    header('Location: register.php');
    exit(0); 
  }
  else
  {
    $_SESSION['message'] = "Not Inserted";
    header('Location: register.php');
    exit(0); 

  }
  }catch(PDOException $e){
    echo $e->getMessage();

  }





}
          
        
            ?>
          </div>
          
        </div>
        
      </div>
      
    </div>
    
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 

            
        
	


<div id="footer" class="col-12" style="margin: 0; padding: 0;overflow: auto;">
	<?php include "footer.php"; ?>
</div>


</body>


</html>