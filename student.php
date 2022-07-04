<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Student</title>

</head>
<body>
    <!-- start navigation bar here -->
         <?php include("navbar.php")?>
    <!-- end navigation bar here -->

    <div class="header">
        <img src="images/zalego.png" alt="zalego" height="50" width="50" class="rounded-circle">
        <a href="#" class="navbar-trigger"><span></span></a>
    </div>

    <div class="sidebar">
        <nav>
            <ul>
                <li>
                    <a href="student.php" class="nav-link active">
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
                        <span><i class="fa fa-group"></i></span>
                        <span>Students</span>
                    </div>
                    <div class="card-body"> </div>
                    <div class="card-footer"></div>
                 </div>
             </div>
         </div>

        <br>
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
   
             <div class="card-body">
                    <table class="table table-stripped table-hover table-responsive">
                        <thead>
                            <tr>
                             <th>ID</th>
                             <th>Fullname:</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Course</th>
                           <th>Gender</th>
                           <th>Enrolled on</th>
                           <th>Action</th>
                    </tr>
              </thead>
           <tbody>  
                <tr>
                    <td>1</td>
                    <td>Samurai Muriithi</td>
                    <td>0838383829</td>
                    <td>samurai@gmail.com</td>
                    <td>software development</td>
                    <td>male</td>
                    <td>May 9th 2022</td>
                    <td>
                      <a href =# class="btn btn-primary btn-sm">
                        <i class="fa fa-edit"></i>
                      </a>
                      <a href =# class="btn btn-info btn-sm">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href =# class="btn btn-danger btn-sm">
                        <i class="fa fa-trash"></i>
                      </a>
                    </td>
                </tr>
            </table>
          
            <div class="card-footer">
      </div>
</div>




     <!-- <script src="bootstrap-5.2.0/js/bootstrap.bundle.js"></script> -->
     <script src="bootstrap-5.2.0/js/bootstrap.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
 
</body>
</html>