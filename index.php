<?php
require_once('logics/dbconnection.php');
// counting total number of students
$queryenrolledstudents = mysqli_query($conn,"SELECT * FROM enrollment");
$countallstudents = mysqli_num_rows($queryenrolledstudents);

// count by gender
$queryenrolledfemale = mysqli_query($conn, "SELECT * FROM enrollment WHERE gender='female' ");
$countallfemale= mysqli_num_rows($queryenrolledfemale);
 
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
                <div class="card-hearder bg-dark text-white text-center">
                    <span>Top content</span>
                 
                  </div>
                 <div class="card-body"> </div>
                 <div class="card-footer"></div>
            </div>
        </div>

           <div class="row">
                <div class="col-lg-3">
                  <div class="card-hearder bg-dark text-white text-center">
                      <span>Students</span>
                  </div>
                  <div class="card-body">
                    <span><i class="fa fa-group fa-3x"></i></span>
                     <span class="float-end badge bg-dark rounded-pill"><?php echo $countallstudents ?></span>
                 </div>
                 <div class="card-footer"></div>
              </div>
              <div class="col-lg-3">
                   <div class="card-hearder bg-dark text-white text-center">
                      <span>Available Courses</span>
                  </div>
                   <div class="card-body">
                      <span><i class="fa fa-folder-open fa-3x"></i></span>
                       <span class="float-end badge bg-dark rounded-pill"><?php echo $countallfemale ?></span>
                    </div>
                   <div class="card-footer"></div>
              </div>
            <div class="col-lg-3">
                <div class="card-hearder bg-dark text-white text-center">
                    <span>Campuses</span>
                </div>
                <div class="card-body">
                    <span><i class="fa fa-graduation-cap fa-3x"></i></span>
                    <span class="float-end badge bg-dark rounded-pill"></span>
                </div>
                <div class="card-footer"></div>
            </div>
            <div class="col-lg-3">
                <div class="card-hearder bg-dark text-white text-center">
                    <span>User</span>
                </div>
                <div class="card-body">
                    <span><i class="fa fa-user fa-3x"></i></span>
                    <span class="float-end">00</span>
                </div>
                <div class="card-footer"></div>
               </div>
              </div>
            <br>
        <div class="row">
            <div class="col-lg-12">
                <div class="card-hearder bg-dark text-white text-center">
                    <span>Student Analysis</span>
                </div>
                <div class="body shadow">
                    <span><i class="fa fa-line-chart fa-4x"></i></span>
                </div>
            </div>
        </div>
     </div>
</div>


    
    
    <?php require_once('includes/scripts.php') ?>
</body>
</html>