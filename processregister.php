<?php
      require_once('connection.php');

      if(isset($_POST['signup']))
      {
        //fetch form data
        $username=$_POST['username'];
        $email=$_POST['email'];        
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];
        //check if username exist in the database
        $sqlusername= mysqli_query($conn, "SELECT * FROM account
        WHERE username = '$username' ");
        $checkusername=mysqli_num_rows($sqlusername);
        //check for email
        $sqlemail= mysqli_query($conn,"SELECT * FROM account
        WHERE email ='$email'");

        if($checkusername != 0){
          $msg ="username already exists";
        }
        elseif($checkemail !=0){
            $msg ="email already in use. please try a different email address";
        }
        //password match
        elseif($password != $cpassword)
        {
            $msg ="passwords do not match";
        }
        //submit data to database table
        else
        {
            //create insert query
            $sql = mysqli_query($conn, "INSERT INTO account(username,email,password)
            VALUES('$username','$email','$password')");

            if($sql)
            {
                $msg= "Data submitted successfully";
            }
            else{
                $msg= "Error";
            }
        }
    }

?>