 <?php
    require_once('processregister.php')
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="tiko.css">
    <title>Register</title>
</head>
<body>
         <!-- start navigation bar here -->
         <?php include("includes/navbar.php")?>
            <!-- end navigation bar here -->
       <br>     

       <div class="container">
        <main class="p-5 mb-4 bg-light rounded-3">
            <h1 class="text-dark">
                Zalego|Admin Register
            </h1>
            <img src="images/zalego.png" alt="zalego" height="50" width="50" class="rounded-circle">
        <a href="#" class="navbar-trigger"><span></span></a>
        </main>
       </div>
     <form action="register.php" method="POST">
        <div class="row">
            <div class="mb-3 col-lg-6">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username"  class="form-control" placeholder="Enter your username">
            </div>
            <div class="mb-3 col-lg-6">
                <label for="email" class="form-label">email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter your email">
            </div>
            <div class="mb-3 col-lg-6">
                <label for="password" class="form-label">password</label>
                <input type="text" name="password" class="form-control" placeholder="Enter your password">
            </div>
            <div class="mb-3 col-lg-6">
                <label for="confirmpassword" class="form-label">Confirm Password</label>
                <input type="text"  name="confirmpassword" class="form-control" placeholder="confirm your password">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
        <p>
            Have account? Sign in <a href="login.html">Here</a>
        </p>
     </form>  

     <!-- <script src="bootstrap-5.2.0/js/bootstrap.bundle.js"></script> -->
     <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

</body>
</html>