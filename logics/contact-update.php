<?php
    require_once('logics/dbconnection.php');  
     if(isset($_POST['updatecontactus']))
  {
        // fetch form data
       $firstname = $_POST['firstname'];
       $lastname =$_POST['lastname'];
       $phonenumber = $_POST['phonenumber'];
       $email = $_POST['email'];
       $message=$_POST['message'];
        

      // perform the sql query
       $updaterecords=mysqli_query($conn,
      "UPDATE contactus set firstname='$firstname',phonenumber='$phonenumber',email='$email',message='$message',lastname='$lastname'
       WHERE  no=' ".$_GET["id"]."' ");
  
       if($updaterecords)
       {
           $message= "UPDATED SUCCESSFULLY";
       }
       else
       {
         $message="INVALID CANNOT UPDATE";
      }
  }
 ?>
