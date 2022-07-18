<?php
// database connecion
 require_once('logics/dbconnection.php');
 $sqlfetchuser = mysqli_query($conn,
 "SELECT * FROM contactus WHERE no=' ".$_GET["id"]."' ");
 while($fetchuser= mysqli_fetch_array($sqlfetchuser))
 {
    
        $firstname= $fetchuser['firstname'];
        $lastname=$fetchuser['lastname'];
        $email=$fetchuser['email'];
        $phonenumber=$fetchuser['phonenumber'];
        $message=$fetchuser['message'];
        $created_at = $fetchuser['created_at'];
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
                        <li class="list-group-item">First Name: <span class="float-end badge bg-primary"><?Php echo $firstname?></span></li>
                        <li class="list-group-item">Last Name: <span class="float-end badge bg-primary"><?Php echo $lastname?></span></li>
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
                        <li class="list-group-item">Message: <span class="float-end badge bg-primary"><?Php echo $message?></span></li>
                         
                    </ul>
                </div>
         </div>
     </div>
</div>


    
    
    <?php require_once('includes/scripts.php') ?>
</body>
</html>
 
