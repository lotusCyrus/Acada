<?php
 
       $clickedcourse = $_GET['clickedcourse'];
 ?>
<html>
<div lang="en">
    <head>
    <title>ProjectPoint</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <script src="js/jquery.js"></script>
    <script src="js/reload.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
    
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    
  </head>
  
          <style> 
.green{
color:green}
.center{
 text-align:center
}

.landing-page {
    background-image: url(img/slider1.jpg);
   
  
}
</style>

  <body>
 <div class="container"  >
          
            <nav class="navbar navbar-expand-md bg-dark  fixed-top">
               <a class="navbar-brand" href="#">
                  <img src="img/logo.png" alt="Logo" style="width:48px;">
                </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                  </button>


                  <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                       
                      <li class="nav-item">
                        <a class="nav-link" href="index.html"><button type="button" class="btn btn-success btn-md active" >Home</button></a>
                      </li>
          
                      <li class="nav-item">
                       <a class="nav-link" href="#"><button type="button" class="btn btn-success btn-md" >The Department</button></a>
                      </li>
                      <li class="nav-item">
                       <a class="nav-link" href="#"> <button type="button" class="btn btn-success btn-md " >Career Hub</button></a>
                      </li>    
                      <li class="nav-item">
                        <a class="nav-link" href="#"><button type="button" class="btn btn-success btn-md " >Our Gallery</button></a>
                      </li> 
                      <li class="dropdown">
          
                        <a href="100 level/Academia.html" class="nav-link " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="z-index:+5">
                       <button type="button" class="btn btn-success btn-md dropdown-toggle "  >Academia</button> </a>
          
                        <ul class="dropdown-menu" >
                        <li><p class="dropdown-item">Choos your level</p></li> 
                         <li><a class="dropdown-item" href="100 level/courses.html">Fresher</a></li> 
                         <li> <a class="dropdown-item" href="200 level/courses.html">200 level</a></li> 
                          <li><a class="dropdown-item" href="300 level/courses.html">300 level</a></li> 
                         <li> <a class="dropdown-item" href="400 level/courses.html">400 level</a></li> 
                          <li><a class="dropdown-item" href="#">Internship </a></li>
                          <li><a class="dropdown-item" href="500 level/courses.html">Final year</a></li>
                          
                      </ul>
                    </li>
                    
                  </ul>
                  </div>  
                </nav>        
          </div>
          
          <header  class="btn btn-success" style="margin-top:70px; width:100%" >
          
          <div class="container">
          
          <h1>Downloads</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing eliras scele!</p>
          </div>
          
          </header>
          
          
       
        
        
      <div class="row">
         
         <div class="col-sm-4" style="text-align:center; justify-content:center; margin:auto">
         <div class="card" style="width:fit-content">
         <div class="box6">
         <img  class="card-img-top"  src="img/thelibrary.jpg" alt="profile emoji" style="width:100%">
         <div class="box-content">
        
         
         <h3 class="title"><?php echo $clickedcourse?></h3>
         <span class="post">See tutorial videos, past questions, answers plus combined signifant notes </span>
         <ul class="icon">
         <li><a href="#" class="fa fa-play"></a></li>
         <li><a class="fa fa-book"></a></li>
         <li><a href="#" class="fa fa-list-alt"></a></li>
         </ul>
         </div>
         </div>
         


         <div id="accordion">
         <div class="card-body">
         <div class="card-header">  
         <p href="#" style="cursor:pointer"  class="collapsed card-link center" data-toggle="collapse" data-target="#demo1"> <?php echo $clickedcourse?> Downloads <a href="#" class="fa fa-download green"></a></p>
         
         </div>
         
         <div class="collapse" data-parent="#accordion" id="demo1">
         <div class="card-body" style="cursor:pointer" href='#'  class='collapsed card-link' data-toggle='collapse' data-target='#demo'>
          
          <?php
          
          
          $con =mysqli_connect('127.0.0.1', 'root' , '' );
        
          
          mysqli_select_db($con, 'CourseEdit');
          
          $select="SELECT* FROM coursetable WHERE course ='$clickedcourse'";
          
          $allcourses= mysqli_query($con, $select);
          
          while($r=mysqli_fetch_array($allcourses, MYSQLI_ASSOC))
          {
          echo "
          
          <p ><b>Info: </b> $r[courseinfo] 
             <b>    File:</b> <a href='http://localhost/projectPoint/materials/$r[file]' download><img height='30px' width='30px' src='materials/pdf.png'></a>
             
             <button  type='submit' id='$r[file]' onclick='getId(this)' class='btn btn-danger'>Delete Course</button>
             
          </p>
          
          ";
          }
          
          ?>
            
         
         </div>
         </div>
         </div>
         </div>
        </div>
       </div>
      </div>


    <footer class="page-footer font-small mdb-color lighten-3 pt-4 bg-dark navbar-dark" style="color:white;">
    
    <!-- Footer Links -->
    
    <div class="container text-center text-md-left" >
    
    <!-- Grid row -->
    
    <div class="row" >
    
    <!-- Grid column -->
    <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">
    
    <!-- Content -->
    <h5 class="font-weight-bold text-uppercase mb-4">Footer Content</h5>
    <p>Here you can use rows and columns to organize your footer content.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit amet numquam iure provident voluptate
    esse quasi, veritatis totam voluptas nostrum.</p>
    
    <!-- Grid column -->
    
    </div>
    <!-- Grid column -->
    
    <hr class="clearfix w-100 d-md-none">
    
    <!-- Grid column -->
    <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">
    
    <!-- Links -->
    <h5 class="font-weight-bold text-uppercase mb-4">About</h5>
    
    <ul class="list-unstyled" style="color:white;">
    <li>
    <p>
    <a href="#!">The Department</a>
    </p>
    </li>
    <li>
    <p>
    <a href="#!">A	bout us & Our Career</a>
    </p>
    </li>
    <li>
    <p>
    <a href="#!">BLOG</a>
    </p>
    </li>
    <li>
    <p>
    <a href="#!">Academia</a>
    </p>
    </li>
    </ul>
    
    </div>
    <!-- Grid column -->
    <hr class="clearfix w-100 d-md-none">
    <div class="col-md-2 col-lg-2  mx-auto my-4">
    
    <h5 class="font-weight-bold text-uppercase mb-4">
    Contact Us
    </h5>
    <form action="/action_page.php" class="needs-validation">
    
    <div class="form-group">
    <input type="text" class="form-control" id="uname" placeholder="Your name"
    name="uname" required>
    </div>
    <div class="form-group">
    <input type="text" class="form-control" id="uname" placeholder="Your Email"
    name="uname" required> 
    </div>
    <div class="form-group">
    <textarea class="form-control" rows="5" id="comment" name="text" placeholder="Your message"></textarea>
    
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
    </form>
    </div>
    
    <hr class="clearfix w-100 d-md-none">
    <div class="col-md-2 col-lg-2 text-center mx-auto my-4">
    
    <!-- Social buttons -->
    <h5 class="font-weight-bold text-uppercase mb-4">Follow Us</h5>
    
    <!-- Facebook -->
    <a type="button" class="btn-floating btn-fb">
    <i class="fa fa-facebook-f"></i>
    </a>
    <!-- Twitter -->
    <a type="button" class="btn-floating btn-tw">
    <i class="fa fa-twitter"></i>
    </a>
    <!-- Google +-->
    <a type="button" class="btn-floating btn-gplus">
    <i class="fa fa-google-plus-g"></i>
    </a>
    <!-- Dribbble -->
    <a type="button" class="btn-floating btn-dribbble">
    <i class="fa fa-dribbble"></i>
    </a>
    <a type="button" class="btn-floating btn-youtube">
    <i class="fa fa-youtube"></i>
    </a>
    </div>
    
    </div>
    <!-- Grid row -->
    
    </div>
    <!-- Footer Links -->
    
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright: Website developed by 
    <a href="#">lotus-web</a>
    </div>
    <!-- Copyright -->
    
    </footer>
    <script type="text/javascript">

      function getId(file)
      {   var file=file.id;
          alert(file);
          location.href="deleteMaterial.php?file="+ file;
      }
    </script>
  </body>