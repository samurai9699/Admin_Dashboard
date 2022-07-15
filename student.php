<?php
 require_once("logics/dbconnection.php");

$sql = mysqli_query($conn,"SELECT * FROM enrollment");


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


 <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-hearder bg-dark text-white text-center">
                        <span><i class="fa fa-group"></i></span>
                        <span>Students</span>
                    </div>
                    <div class="card-body"> </div>
                    <div class="card-footer"></div>
                 </div>
             </div>
         </div>

        <br>
         <br> 
         
             <div class="card-body">
                    <table class="table table-striped table-hover table-responsive" style="font-size:12px;">
                        <thead>
                        <tr>
                             <th>ID</th>
                                  <th>Fullname:</th>
                                     <th>Phone</th>
                                     <th>Email</th>
                                     <th>Course</th>
                                       <th>Gender</th>
                                          <th>Enrolled on</th>
                                        <th>Action</th>
                    </tr>
              </thead>
           <tbody>  
            <?php while ($fetchenrollmentrecords= mysqli_fetch_array($sql)) {?>
                <tr>
                    <td><?php echo $fetchenrollmentrecords ['no']?></td>
                    <td><?php echo $fetchenrollmentrecords ['fullname']?></td>
                    <td><?php echo $fetchenrollmentrecords ['phonenumber']?></td>
                    <td><?php echo $fetchenrollmentrecords ['email']?></td>
                    <td><?php echo $fetchenrollmentrecords ['gender']?></td>
                    <td><?php echo $fetchenrollmentrecords ['course']?></td>
                    <td><?php echo $fetchenrollmentrecords ['created_at']?></td>
                    <td>
                             <a href ="edit-enrollment.php?id=<?php echo $fetchenrollmentrecords['no']?>" class="btn btn-primary btn-sm">
                                <i class="fa fa-edit"></i>
                               </a>
                             <a href ="view-enrollment.php?id=<?php echo $fetchenrollmentrecords['no'] ?>" class="btn btn-info btn-sm">
                               <i class="fa fa-eye"></i>
                              </a>
                               <a href ="delete-enrollment.php?id=<?php echo $fetchenrollmentrecords['no'] ?>" class="btn btn-danger btn-sm">
                             <i class="fa fa-trash"></i>
                             </a>
                    </td>
                
                
                </tr>
            <?php }?>
                

            </table>
          
            <div class="card-footer">
      </div>
</div>




   <?php require_once('includes/scripts.php') ?>
 
</body>
</html>