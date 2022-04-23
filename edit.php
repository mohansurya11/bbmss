<?php
include('db_conn.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<title></title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 mt-4">
				
				<div class="card">
					<div class="card-header">
						<h3>EDIT AND UPDATE DATA
						<a href="donor-list.php" class="btn btn-danger float-end">BACK</a></h3>
					</div>
					<div class="card-body">
						<?php
						if(isset($_GET['id']))
						{
							$student_id = $_GET['id'];
							$query = "SELECT * FROM donor WHERE id=:stud_id LIMIT 1";
							$statement = $db->prepare($query);
							$data = [':stud_id' => $student_id];
							$statement->execute($data);
							$result = $statement->fetch(PDO::FETCH_OBJ);

						}
						?>


						<form action="code.php" method="POST">
							<input type="hidden"  name="student_id" value="<?=$result->id?>" />
							<div class="mb-3">
								<label>Full Name</label>
								<input type="text"  name="fullname" value="<?=$result->fullname; ?>" class="form-control" />
								
							</div>

							<div class="mb-3">
								<label>Email</label>
								<input type="text"  name="email" value="<?=$result->email; ?>" class="form-control" />
								
							</div>

							<div class="mb-3">
								<label>Phone</label>
								<input type="text"  name="phone" value="<?=$result->phone; ?>" class="form-control" />
								
							</div>

							<div class="mb-3">
								<label>Address</label>
								<input type="text"  name="address" value="<?=$result->address; ?>" class="form-control" />
								
							</div>

							<div class="mb-3">
								<label>City</label>
								<input type="text"  name="city" value="<?=$result->city; ?>" class="form-control" />
								
							</div>

							<div class="mb-3">
								<label>Age</label>
								<input type="text"  name="age" value="<?=$result->age; ?>" class="form-control" />
								
							</div>

							<div class="mb-3">
								<label>BloodGroup</label>
								<input type="text"  name="bgroup" value="<?=$result->bgroup; ?>" class="form-control" />
								
							</div>


							<div class="mb-3">
								<button type="submit" name="update_student_btn" class="btn btn-primary">Update </button>
								
							</div> 
						</form> 
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
</body>
</html> 