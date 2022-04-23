<?php 
session_start(); 
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
            <div class="col-md-12 mt-4">
                <?php if(isset($_SESSION['message'])) : ?>

                    <h5 class="alert alert-success"><?= $_SESSION['message']; ?></h5>

                <?php
                    unset($_SESSION['message']); 
                    endif; 
                ?>
                <div class="card">
                    <div class="card-header">
                        <h3>REGISTER
                        <a href="admin-home.php" class="btn btn-primary float-end">BACK</a>
                        <a href="add.php" class="btn btn-primary ">INSERT</a></h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>FullName</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>Age</th>
                                    <th>BloodGroup</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $query = "SELECT * FROM donor";
                                    $statement = $db->prepare($query);
                                    $statement->execute();

                                    $statement->setFetchMode(PDO::FETCH_OBJ);
                                    $result = $statement->fetchAll();
                                    if($result)
                                    {
                                        foreach($result as $row)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $row->id; ?></td>
                                                <td><?= $row->fullname; ?></td>
                                                <td><?= $row->email; ?></td>
                                                <td><?= $row->phone; ?></td>
                                                <td><?= $row->address; ?></td>
                                                <td><?= $row->city; ?></td>
                                                <td><?= $row->age; ?></td>
                                                <td><?= $row->bgroup; ?></td>
                                                <td>
                                                    <a href="edit.php?id=<?= $row->id; ?>" class="btn btn-primary">Edit</a>
                                                </td>
                                                <td>
                                                    <form action="code.php" method="POST">
                                                        <button type="submit" name="delete_student" value="<?=$row->id;?>" class="btn btn-danger">Delete</button>
                                                        
                                                    </form>
                                                </td>
                                            </tr>

                                            <?php
                                        }

                                    }
                                    else{
                                        ?>
                                        <tr>
                                            <td colspan="8">No Record Found</td>
                                        </tr>
                                        <?php
                                    }




                                ?>
                                
                                
                        </table>
                        
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
</body>
</html>