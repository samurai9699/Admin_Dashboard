<?php
// database connecion
 require_once('logics/dbconnection.php');
 $sqlfetchenrolledstudent = mysqli_query($conn,
 "SELECT * FROM enrollment WHERE no=' ".$_GET["id"]."' ");
 while($fetchstudent= mysqli_fetch_array($sqlfetchenrolledstudent))
 {
    $fullname= $fetchstudent['fullname'];
    $email= $fetchstudent['email'];
    $phonenumber= $fetchstudent['phonenumber'];
    $gender=$fetchstudent['gender'];
    $course=$fetchstudent['course'];
 }
?>
<!DOCTYPE html>
<html lang="en">
 <?php require_once('includes/headers.php')?>
<body>
            <!-- start navigation bar here -->
            <?php require_once("includes/navbar.php")?>
            <!-- end navigation bar here -->

    <div class="header">
        <img src="images/zalego.png" alt="zalego" height="50" width="50" class="rounded-circle">
        <a href="#" class="navbar-trigger"><span></span></a>
    </div>

<div class="sidebar">
        <?php require_once("includes/sidebar.php")?>

</div>

<div class="main-content pt-5">
    <div class="container-fluid">
        <div class="row">
           <div class="col-lg-6">
              <div class="card">
                <div class="card-header bg-dark text-white text-center">
                    <h4 class="card-title">personal information</h4>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">Full Name: <span class="float-end badge bg-primary"><?Php echo $fullname?></span></li>
                        <li class="list-group-item">Email: <span class="float-end badge bg-success"><?php echo $email ?></span></li>
                        <li class="list-group-item">Phone Number: <span class="float-end badge bg-warning"><?php echo $phonenumber ?></span></li>
                    </ul>
                </div>
                </div>
             </div>
             <div class="col-lg-6">
              <div class="card">
                <div class="card-header bg-dark text-white text-center">
                    <h4 class="card-title">other information</h4>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">Gender: <span class="float-end badge bg-primary"><?Php echo $gender?></span></li>
                        <li class="list-group-item">Course: <span class="float-end badge bg-success"><?php echo $course ?></span></li>
                        <li class="list-group-item">Enrolled on: <span class="float-end badge bg-warning"></span></li>
                    </ul>
                </div>
         </div>
     </div>
</div>


    
    
    <?php require_once('includes/scripts.php') ?>
</body>
</html>
 