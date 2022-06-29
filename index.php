<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
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
                      <img src="images/zalego.png" alt="zalego" height="30" width="30" class="rounded-circle">
                              <a href="#" class="navbar-trigger"><span></span></a>
                <a href="index.html" class="nav-link active">Home</a>
                <a href="register.html" class="nav-link">Register</a>
                <a href="login.html" class="nav-link">Login</a>
              </div>
            </div>
         </div>
    
      </nav> 
            <!-- end navigation bar here -->

    <div class="header">
        <img src="images/zalego.png" alt="zalego" height="50" width="50" class="rounded-circle">
        <a href="#" class="navbar-trigger"><span></span></a>
    </div>

    <div class="sidebar">
        <nav>
            <ul>
                <li>
                    <a href="">
                        <span><i class="fa fa-group"></i></span>
                        <span>Students</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span><i class="fa fa-folder-open"></i></span>
                        <span>Courses</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span><i class="fa fa-graduation-cap"></i></span>
                        <span>Campus</span>
                    </a>
                </li>
            </ul>
        </nav>

    </div>

    <div class="main-content">

    
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-hearder bg-dark text-white text-center">
                    <span>Top content</span>
                </div>
                <div class="card-body"> </div>
                <div class="card-footer"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <div class="card-hearder bg-dark text-white text-center">
                    <span>Students</span>
                </div>
                <div class="card-body">
                    <span><i class="fa fa-group fa-3x"></i></span>
                    <span class="float-end">00</span>
                </div>
                <div class="card-footer"></div>
            </div>
            <div class="col-lg-3">
                <div class="card-hearder bg-dark text-white text-center">
                    <span>Available Courses</span>
                </div>
                <div class="card-body">
                    <span><i class="fa fa-folder-open fa-3x"></i></span>
                    <span class="float-end">00</span>
                </div>
                <div class="card-footer"></div>
            </div>
            <div class="col-lg-3">
                <div class="card-hearder bg-dark text-white text-center">
                    <span>Compuses</span>
                </div>
                <div class="card-body">
                    <span><i class="fa fa-graduation-cap fa-3x"></i></span>
                    <span class="float-end">00</span>
                </div>
                <div class="card-footer"></div>
            </div>
            <div class="col-lg-3">
                <div class="card-hearder bg-dark text-white text-center">
                    <span>User</span>
                </div>
                <div class="card-body">
                    <span><i class="fa fa-user fa-3x"></i></span>
                    <span class="float-end">00</span>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <div class="card-hearder bg-dark text-white text-center">
                    <span>Student Analysis</span>
                </div>
                <div class="body shadow">
                    <span><i class="fa fa-line-chart fa-4x"></i></span>
                </div>
            </div>
        </div>
        </div>
    </div>
    
    
    <!-- <script src="bootstrap-5.2.0/js/bootstrap.bundle.js"></script> -->
    <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

</body>
</html>