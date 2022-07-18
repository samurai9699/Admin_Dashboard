<?php
    $message="";
    require_once('logics/dbconnection.php');
    $queryuser= mysqli_query($conn,"SELECT * FROM contactus WHERE no=' ".$_GET["id"]."' ");
    while ($fetchuser= mysqli_fetch_array($queryuser))
    {
        $id=$fetchuser['no'];
        $firstname= $fetchuser['firstname'];
        $lastname=$fetchuser['lastname'];
        $email=$fetchuser['email'];
        $phonenumber=$fetchuser['phonenumber'];
        $message=$fetchuser['message'];
        $created_at = $fetchuser['created_at'];
    }
     // updating user records
    require_once('logics/contact-update.php');
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
                        <a href="student.php" class="btn btn-primary btn-sm">back</a>
                          <h4>
                            Edit user
                           </h4>
                            
                              <?php echo $firstname ?>
                              <?php echo $lastname ?>
                       </div>
                    </div>
                </div>
            </div>
          </div>
      
       <div class="card-body"> 
          <form action="edit-contactus.php?id=<?php echo $id ?>" METHOD="POST">
                  <div class="row">
                      <div class="mb-3 col-lg-6">
                         <label for="firstname" class="form-label">
                            <b>
                       First Name
                      </b>
                    </label>
                     <input type="text" name="firstname" class="form-control" value="<?php echo $firstname ?>" placeholder="Enter your first Name">
                    </div>
                     
                    <div class="mb-3 col-lg-6">
                         <label for="lastname" class="form-label">
                            <b>
                       Last Name
                      </b>
                    </label>
                     <input type="text" name="lastname" class="form-control" value="<?php echo $lastname ?>" placeholder="Enter your last Name">
                    </div>

                    <div class="mb-3 col-lg-6">
                         <label for="email" class="form-label">
                            <b>
                       Email
                      </b>
                    </label>
                     <input type="text" name="email" class="form-control" value="<?php echo $email ?>" placeholder="Enter your email">
                    </div>

                    <div class="mb-3 col-lg-6">
                         <label for="phonenumber" class="form-label">
                            <b>
                       Phone Number
                      </b>
                    </label>
                     <input type="text" name="phonenumber" class="form-control" value="<?php echo $phonenumber ?>" placeholder="Enter your phonenumber">
                    </div>

                    <div class="mb-3 col-lg-6">
                         <label for="message" class="form-label">
                            <b>
                       Message
                      </b>
                    </label>
                     <input type="text" name="message" class="form-control" value="<?php echo $message ?>" placeholder="What's your messsage">
                    </div>







                      
               <div class="row pt-3"></div>
                 <div class="col-lg-6">
               <button type="submit" name="updatecontactus" class="btn btn-primary">Update</button> 
               </div> 
           </div>
 
     </form>
   </div>
</div>

    
    
    <?php require_once('includes/scripts.php') ?>
</body>
</html>