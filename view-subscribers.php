<?php
// database connecion
 require_once('logics/dbconnection.php');
 $sqlfetchsubscriber = mysqli_query($conn,
 "SELECT * FROM subscribers WHERE no=' ".$_GET["id"]."' ");
 while($sqlfetchsubscriber= mysqli_fetch_array($sqlfetchsubscriber))
 {
    
    $email=$fetchuser['email'];
   
     
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
                        <li class="list-group-item">Email: <span class="float-end badge bg-success"><?php echo $email ?></span></li>
                         
                    </ul>
                </div>
                </div>
             </div>
              
         </div>
     </div>
</div>


    
    
    <?php require_once('includes/scripts.php') ?>
</body>
</html>