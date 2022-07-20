<?php
    $message="";
    require_once('logics/dbconnection.php');
    $querysubscriber= mysqli_query($conn,"SELECT * FROM subscribers WHERE no=' ".$_GET["id"]."' ");
    while ($fetchsubscriber= mysqli_fetch_array($querysubscriber))
    {
        $id=$fetchsubscriber['no'];
        $email=$fetchsubscriber['email'];
        $created_at = $fetchsubscriber['created_at'];
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
                          <h4>
                          <a href="subscribers.php" class="btn btn-warning btn-sm float-start">back</a>
                          
                            Edit subscriber
                           </h4>
                             
                       </div>
                    </div>
                </div>
            </div>
          </div>
      
       <div class="card-body"> 
          <form action="edit-subscribers.php?id=<?php echo $id ?>" METHOD="POST">
                  <div class="row">
                   

                    <div class="mb-3 col-lg-6">
                         <label for="email" class="form-label">
                            <b>
                       Email
                      </b>
                    </label>
                     <input type="text" name="email" class="form-control" value="<?php echo $email ?>" placeholder="Enter your email">
                    </div>

                    






                      
               <div class="row pt-3"></div>
                 <div class="col-lg-6">
               <button type="submit" name="updatesubscribers" class="btn btn-primary">Update</button> 
               </div> 
           </div>
 
     </form>
   </div>
</div>

    
    
    <?php require_once('includes/scripts.php') ?>
</body>
</html>