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
    <a href="index.html"></a>
    <title>Register</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
        <div class="container-fluid">
           <a href="#" class="navbar-brand">ZALEGO</a>
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbardisplaynavigations" aria-expanded="false">
               <span class="navbar-toggler-icon"></span>
           </button>    
    
    
           <div class="collapse navbar-collapse" id="navbardisplaynavigations">
              <div class="navbar-nav">
                <a href="index.html" class="nav-link">Home</a>
                <a href="register.html" class="nav-link active">Register</a>
                <a href="login.html" class="nav-link">Login</a>
              </div>
            </div>
         </div>
    
      </nav> 
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
            Have account? Sign in <a href="https://zalegoacademy.ac.ke/" target="_blank">Here</a>
        </p>
     </form>  

     <!-- <script src="bootstrap-5.2.0/js/bootstrap.bundle.js"></script> -->
     <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

</body>
</html>