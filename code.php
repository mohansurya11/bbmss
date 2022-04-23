<?php
session_start();
include('db_conn.php');

if(isset($_POST['delete_student']))
{
	$student_id = $_POST['delete_student'];

	try {
		$query = "DELETE FROM donor WHERE id=:stud_id";
		$statement = $db->prepare($query);
		$data = [
			':stud_id' => $student_id
		];
		$query_execute=$statement->execute($data);

		if($query_execute)
		{
			$_SESSION['message'] = "Deleted Successfully";
			header('Location: donor-list.php');
			exit(0); 
		}
		else
		{
			$_SESSION['message'] = "Not Deleted";
			header('Location: donor-list.php');
			exit(0);  

		}
		
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
}





if(isset($_POST['update_student_btn']))
{
	$student_id = $_POST['student_id'];
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$age = $_POST['age'];
	$bgroup = $_POST['bgroup'];
	

	try{
		$query="UPDATE donor SET fullname=:fullname, email=:email, phone=:phone, address=:address, city=:city, age=:age,  bgroup=:bgroup WHERE id=:stud_id LIMIT 1";
		$statement = $db->prepare($query);

		$data = [
			':fullname' => $fullname,
			':email' => $email,
			':phone' => $phone,
			':address' => $address,
			':city' => $city,
			':age' => $age,
			':bgroup' => $bgroup,

			'stud_id' => $student_id

		];

		$query_execute = $statement->execute($data);

		if($query_execute)
		{
			$_SESSION['message'] = "Updated Successfully";
			header('Location: donor-list.php');
			exit(0); 
		}
		else
		{
			$_SESSION['message'] = "Not Updated";
			header('Location: donor-list.php');
			exit(0);  

		}

	}catch(PDOException $e){
		echo $e->getMessage();

	}
}


if(isset($_POST['save_student_btn']))
{
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$age = $_POST['age'];
	$bgroup = $_POST['bgroup'];

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
		header('Location: donor-list.php');
		exit(0); 
	}
	else
	{
		$_SESSION['message'] = "Not Inserted";
		header('Location: donor-list.php');
		exit(0); 

	}





}


?>