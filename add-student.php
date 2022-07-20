<?php
   $response ="";
   $server="localhost";
   $username="root";
   $password="";
   $database="zalego";
  
    $conn=mysqli_connect($server,$username,$password,$database);
  
     if(isset($_POST['submitbutton']))
  {
        //fetch form data
        
        $fullname=$_POST['fullname'];
        $phonenumber=$_POST['phonenumber'];
        $email=$_POST['email'];
        $gender=$_POST['gender'];
        $course=$_POST['course'];
  
        //submit form data
  
         $insertdata=mysqli_query($conn,"INSERT INTO 
         enrollment(fullname,phonenumber,email,gender,course)VALUES('$fullname','$phonenumber','$email','$gender','$course')");
  
    
    
        if($insertdata)
          {
           $response = "Succeess";
           }
      else{
          $response = "Invalid" .mysqli_error($conn);
          }
  }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="hi.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
     <title>ZALEGO</title>
</head>
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
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Launch demo modal
                                    </button>

   <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
       <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new student</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="add-student.php" method="POST">
                  <div class="row">
                  <div class="mb-3 col-lg-6">
            <label for="fullname" class="form-label">
                <b>
                Full Name
                </b>
            </label>
            <input type="text" name="fullname" class="form-control" placeholder="Enter your first Name">
        </div>
        <div class="mb-3 col-lg-6">
            <label for="phone" class="form-label">
                <b>
                Phone Number
                </b>
            </label>
            <input type="tel" name="phonenumber" class="form-control" placeholder="Enter your last name">
        </div>
    
        <div class="mb-3 col-lg-6">
            <label for="email" class="form-label"3>
                <b>
                Email
                </b>
            </label>
            <input type="email" name="email" class="form-control" placeholder="Enter your email address">
        </div>
        <div class="mb-3 col-lg-6">
            <label for="gender"  class="form-label">
                  <b>
                What's your gender
                  </b>            
            </label>
            <select name="gender" class="form-control" id="">
                <option value="--select your gender--">--select your gender--</option>
                <option value="male">male</option>
                <option value="female">female</option>
                <option value="rather not say">rather not say</option>
            </select>
        </div>
             
               
        <div class="mb-3 col-lg-6">
                <label for="course"  class="form-label">
                   <b> 
                    What's your preferred course?
                </b>              
                </label>
                <select name="course" class="form-control" id="">
                    <option value="--select your course--"> <b>--select your course-- </b> </option>
                    <option value="software development">Software development</option>
                    <option value="cyber security">cyber security</option>
                    <option value="android design">android design</option>
                </select>
        
               </div>
        
             <br>

         
        
            </span>       
                      <div class="mb-3 col-lg-6">
                        <a href="student.php" class="btn btn-primary">
                         <button type="submit" name="submitbutton" class="btn btn-primary">
                            Register new student
                       </button> 
                    </a>
                         
                  </div> 
   

         
          </form>
      </div>
      <div class="modal-footer">
         
      </div>
    </div>
  </div>
</div>
         



   <?php require_once('includes/scripts.php') ?>
 
</body>
</html>