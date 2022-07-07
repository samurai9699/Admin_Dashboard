<?php
    require_once('logics/dbconnection.php');
    $querystudent= mysqli_query($conn,"SELECT * FROM enrollment WHERE no=' ".$_GET["id"]."' ");
    while ($fetchstudent= mysqli_fetch_array($querystudent))
    {
        $fullname= $fetchstudent['fullname'];
    }
?>

<!DOCTYPE html>
<html lang="en">
 <?php require_once('includes/headers.php')?>
<body>
            <!-- start navigation bar here -->
            <?php include("includes/navbar.php")?>
            <!-- end navigation bar here -->

    <div class="header">
        <img src="images/zalego.png" alt="zalego" height="50" width="50" class="rounded-circle">
        <a href="#" class="navbar-trigger"><span></span></a>
    </div>

<div class="sidebar">
        <?php include("includes/sidebar.php")?>

</div>

<div class="main-content pt-5">
          <div class="container-fluid">
               <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                       <div class="card-header bg-dark text-center text-white">
                          <h4>Edit Student <?php echo $fullname ?></h4>
                       </div>
                    </div>
                </div>
            </div>
       </div>
</div>


    
    
    <?php require_once('includes/scripts.php') ?>
</body>
</html>