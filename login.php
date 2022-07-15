 
<!DOCTYPE html>
<html lang="en">
<?php require_once('includes/headers.php')?>
<body>
             <!-- start navigation bar here -->
             <?php include("includes/navbar.php")?>
            <!-- end navigation bar here -->
       <br>     

       <div class="container">
        <main class="p-5 mb-4 bg-light rounded-3">
            <h1 class="text-dark">
                Zalego Training|Admin Login
            </h1>
            <img src="images/zalego.png" alt="zalego" height="50" width="50" class="rounded-circle">
        <a href="#" class="navbar-trigger"><span></span></a>
        </main>
     </div>
   <form action="login.php" method="POST">
    <div class="row">
        <div class="mb-3 col-lg-6">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" placeholder="input your username">
        </div>
    </div>
        <div class="mb-3 col-lg-6">
            <label for="password" class="form-label">Password</label>
            <input type="text" class="form-control" placeholder="input your password">
            <button class="btn btn-primary">Submit</button>
        </div>
        <br>
        <p>
            Have no account? Sign up <a href="register.html">Here</a>
        </p>

   </form>  

             <?php require_once('includes/scripts.php') ?>
   </body>
</html>







