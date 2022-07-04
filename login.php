
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="tiko.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <title>Login</title>
    <a href="index.php"></a>
</head>
<body>
             <!-- start navigation bar here -->
             <?php include("navbar.php")?>
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

       <!-- <script src="bootstrap-5.2.0/js/bootstrap.bundle.js"></script> -->
       <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

   </body>
</html>








