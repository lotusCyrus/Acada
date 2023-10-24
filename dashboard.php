<?php

session_start();
if(!isset($_SESSION['matric']))
{
   header('location:login.php');
}
  
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

.container{
  padding:5px
}
.center{
 text-align:center
}

.landing-page {
    background-image: url(img/slider1.jpg);
}
  .course-text{
   text-transform: uppercase;
  }

.partners
{
  background-image: url(img/tabman.jpg);
  height: 45vh;
  background-size:cover;
} 

.partners .container
{
  color:#fff;
}
.partner ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

.partner ul li{
  display: inline-block;
  float: left;
  width: 20%;
}

.jumbotron {
    margin-bottom: 0px;
 }

 .carousel-inner img
 {  width:100%; min-height: 65vh; }
.slider
{
  height:75vh;
}
.academicTeam
{
	width:99%;
	height:50%;
}
.carousel-caption
{
	text-align: left;
}
#slider1, #slider2, #slider3
{
  bottom:80px
}
.col-sm-4 p
{
  font-size:12px
}
@media only screen and (max-width: 450px){

	.slider {
   height:79vh;
}
.academicTeam
{
	width:99%;
	height:30%;
}
  #slider1, #slider2, #slider3
  {
     bottom:22px;
  }
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

<br><br><br><br><br>
    <div class="container"  >
      <div class="row">
        <div class="col-sm-4">
         <img src="img/profile.png" width="100px" height="100px">
         

   <?php
 
      $con= mysqli_connect('127.0.0.1' , 'root' , '');
 
    $matric=$_SESSION['matric'];
     mysqli_select_db($con, 'userregistration');
 
     $strSQL="SELECT* FROM usertable WHERE matric=$matric"; 
     // Execute the query (the recordset $rs contains the result)
    $rs = mysqli_query($con, $strSQL);
    // Loop the recordset $rs
    // Each row will be made into an array ($row) using mysqli_fetch_array
    while($row = mysqli_fetch_array($rs, MYSQLI_ASSOC)) {
 
    // Write the value of the column FirstName (which is now in the array $row)
 
     echo "<h3>Welcome back ". $row['name'] . "! <br>Your dashboard</h3><br />";
     $course=$row['course'];
     $_SESSION['course']=$row['course'];
     $_SESSION['name']=$row['name'];
     }
   ?>
      
      <p> <b>ProjectPoint</b> initiative is founded by distinguished members of PMT LASU, and our goal is to ensure her members excel with the best grades against all odds far beyond her alumnis.</p>
      <p> Your responsibility as a member of the team therefore is <b>excellence</b></p>
      </div> 

     <div class="col-sm-4">
     <img src="img/checks.png" width="100px" height="100px" class="rounded-circle">
     <h3>Weekly Checks</h3>
     <p> Here you are to submit a weekly <b>report tick </b>after your task has been inspected and approved by 
      your team supervisor. This is done by inputting your special pin given to you by your supervisor</p>
      </p>
     <form> <input style="width:60%" placeholder="input your clearance pin"> <br><br> <button class="btn btn-success">submit</button></form>
     </div>
     
     <div class="col-sm-4">
     <img src="img/reg-course.png" width="100px" height="100px" class="rounded-circle">
     <h3 class="course-text"><?php echo $course; ?></h3>
     <p> You are in charge of <b><?php echo $course; ?></b>.
      Your task is to update the course gallery with lecture notes , materials and solved questions as you receive help
       from your inspector/supervisor. <br>Visit <a href="academia/materials.php">ACADEMIA</a> to start making neccessary edits in your assigned course </p>
     </p>
</div> 
  <div class="col-sm-4>">
         <img src="img/checks.png" width="100px" height="100px" class="rounded-circle">
         <h3>Add a new Course</h3>
         <p>  Here you register a new course to the database <b>report tick </b>after your task has been inspected and approved by 
         your team supervisor. This is done by inputting your special pin given to you by your supervisor</p>
         </p>
         
         
           <form id="regForm" method="post" action="regiscourse.php" class="needs-validation" enctype="multipart/form-data">
           
           
           <div class="form-group">
           <input type="text" class="form-control" id="uname" placeholder="Course name"
           name="coursename" required>
           </div>
           
           
           
           <div class="form-group">
           <input type="text" class="form-control"  placeholder="Course Code"
           name="course" required>
           </div>
           
           
           <div class="form-group">
           <input type="number" class="form-control"  placeholder="Unit"
           name="unit" required>
           </div>
           
           <div class="form-group">
           <input type="text" class="form-control"  placeholder="faculty "
           name="faculty" required>
           </div>
           
           <div class="form-group">
           <input type="file" class="form-control"  placeholder="Course cover photo"
           name="coverpic" required>
           </div>
           
           <button  type="submit" name="reg" class="btn btn-success">Register</button>
           
           </form>
         
     </div>
      <form action="logout.php"><br><br> <button class="btn btn-success">Log Out</button></form>
     </div>
    
   </div>
   
   
  </div>
  

<!-- Footer -->
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
          esse
          quasi, veritatis totam voluptas nostrum.</p>

       

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
              <a href="#!">About us & Our Career</a>
            </p>
          </li>
          <li>
            <p>
              <a href="login.php">Become a part of us</a>
            </p>
          </li>
          <li>
            <p>
              <a href="100 level/materials.php">Academia</a>
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
  <div class="footer-copyright text-center py-3">© 2021 Copyright: Website developed by 
    <a href="#" id="test">lotus-web</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->




 </body>
 </html>