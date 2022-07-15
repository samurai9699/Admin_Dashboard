<?php
    require_once('logics/dbconnection.php');  
     if(isset($_POST['updateenrollment']))
  {
        // fetch form data
       $fullname = $_POST['fullname'];
       $phonenumber = $_POST['phonenumber'];
       $email = $_POST['email'];
       $gender=$_POST['gender'];
       $course=$_POST['course'];

      // perform the sql query
       $updaterecords=mysqli_query($conn,
      "UPDATE enrollment set fullname='$fullname',phonenumber='$phonenumber',email='$email',gender='$gender',course='$course'
       WHERE  no=' ".$_GET["id"]."' ");
  
       if($updaterecords)
       {
           $message= "SUCCESS";
       }
       else
       {
         $message="INVALID";
      }
  }
<<<<<<< HEAD
 ?>
=======
 ?>
>>>>>>> 4f89b8847bf725370904fcf935ff3489af4b5626
