<?php
  session_start();
  if(isset($_SESSION['course']))
{
  $course=$_SESSION['course'];
}
  ?>
<html>
<div lang="en">
    <head>
    <title>ProjectPOINT</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/main.css">
    <link href="../css/style.css" rel="stylesheet" >
+    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
     <script src="../js/main.js"></script>
 
    </head>
    <style>
     .editor
     {
     display: none;
     }
    
    .deleter a
    {
      color:white;
    }
     li.page-item 
      {
        padding:0vh 1vh;
      }
      li.page-item .page-link
      {
        border-radius:1vh;
      }
 li.page-item.active .page-link
      {
        border-color:white;
        background-color:green;
      }
    
</style>


  <body>
    <div class="container" >

      <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top "  >
        <a class="navbar-brand" href="#">
          <img src="../img/logo.png" alt="Logo" style="width:48px;">
        </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
               
               
              <li class="nav-item">
                <a class="nav-link" href="../index.php"><button type="button" class="btn btn-success btn-md " >Home</button></a>
              </li>
  
              <li class="nav-item">
                <a class="nav-link" href="../The department.html"><button type="button" class="btn btn-success btn-md " >The Department</button></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../PM Career.html"> <button type="button" class="btn btn-success btn-md " >Our Career</button></a>
              </li>    
              <li class="nav-item">
                <a class="nav-link" href="#"><button type="button" class="btn btn-success btn-md " >SOC</button></a>
              </li> 
              <li class="dropdown">
  
                <a href="#" class="nav-link " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="z-index:+5">
               <button type="button" class="btn btn-success btn-md dropdown-toggle active"  >Academia</button> </a>
                <ul class="dropdown-menu" >
                <li><p class="dropdown-item">Choos your level</p></li> 
                 <li><a class="dropdown-item" href="#">Fresher</a></li> 
                 <li> <a class="dropdown-item" href="#">200 level</a></li> 
                  <li><a class="dropdown-item" href="#">300 level</a></li> 
                 <li> <a class="dropdown-item" href="#">400 level</a></li> 
                  <li><a class="dropdown-item" href="#">Internship </a></li>
                  <li><a class="dropdown-item" href="#">Final year</a> </li>

              </ul>
            </li>
          </div>  
        </nav>
    </div>
  </div>
  
  
  <header  class="btn btn-success" style="margin-top:70px; width:100%">

      <div class="container">

              <h1>Academia</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing eliras scele!</p>
      </div>

 </header>

<!--Pagination -->

   <ul class="pagination pagination-lg justify-content-center" style="margin:20px 0">

    <li class="page-item "><a href="courses.html" class="page-link">Courses</a></li>
   <li class="page-item active"><a href="#" class="page-link">Materials</a></li>
   <li class="page-item"><a href="CBT.html" class="page-link">CBT</a></li>

  </ul>

<br>
  <div class="container">
  

    <h2>Online Resources<br>
    	   <span><i class="fa fa-book">  </i></span>
          <span><i class="fa fa-list-alt">  </i></span>
          <span><i class="fa fa-youtube">  </i></span>
    </h2>
    <br>
    <br>

    <h3>Most Challenging Courses</h3>
   
<!--youtube tutorial gallery-->

<div class="row" >      

     <?php
   $con= mysqli_connect('127.0.0.1' , 'root' , '');
 
     mysqli_select_db($con, 'CourseEdit');
     
     $select="SELECT* FROM courselist";
     
     $allcourses= mysqli_query($con, $select);
     
     while($r=mysqli_fetch_array($allcourses, MYSQLI_ASSOC))
     {
    
      echo "
      <div class='col-sm-4'>
      <div class='card' style=:'width:fit-content'>
      <div class='box6'>
      <img  class='card-img-top'  src='../$r[coverpic]' alt='profile emoji' style='width:100%'>
      <div class='box-content'>
      <h3 class='title'>$r[coursename]</h3>
      <span class='post'>See tutorial videos, past questions, answers plus combined signifant notes.</span>
      <ul class='icon'>
      <li><a href='#' class='fa fa-play'></a></li> 
        
        
      <li><a id='$r[course]' onclick='getId(this)'  class='fa fa-book'></a></li>
       
        
      <li><a href='#' class='fa fa-list-alt'></a></li>
      
      </ul>
      </div>
      </div>
      
      <div id='accordion'>
      <div class='card-body'>
      <div class='card-header'> 
      <span data-toggle='modal' data-target='#exampleModalCenter'>
      <p href='#'  style='cursor:pointer; color:black' class='collapsed card-link' data-toggle='collapse' data-target='#demo5'>$r[coursename]
      <i class='fa fa-download' aria-hidden='true'></i>
      </p>
      </span>
      
      
      
      <!--ADMIN BUTTON-->
      <button  type='button' class='$r[course] btn btn-success editor'       name='' data-toggle='modal' data-target='#exampleModalCenter'>
      Edit Course <i class='fa fa-edit'></i>
      </button>
      <!-- Modal -->
      <div class='modal fade' id='exampleModalCenter' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
      <div class='modal-dialog modal-dialog-centered' role='document'>
      <div class='modal-content'>
      <div class='modal-header'>
      <h5 class='modal-title' id='exampleModalLongTitle'> Select Files To Upload (PDF)</h5>
      <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
      </button>
      </div>
      <div class='modal-body'>
      
      <form method='POST' action='../insert.php' enctype='multipart/form-data' class='needs-validation'>
      
      <div class='edito'>

      
      <div class='form-group'>
      <input type='text' class='form-control'  placeholder='About the workdone(credits, reference)'
      name='courseinfo' >
      </div>
      
      <div class='form-group'>
      <input type='file' name='file' class='form-control' required> 
      </div>
      
      
      <button name='upload' class='btn btn-success'>Upload </button> 
      </div>   
      <!--   <button  type='submit' class='btn btn-success'>Delete Course</button>-->
      
      </form>
      
      </div>
      <div class='modal-footer'>

      
      </div>
      </div>
      </div>
      </div>
      <!---->      
      
      
      </div>
      
      <div class='collapse' data-parent='#accordion' id='demo5'>
      <div class='card-body'>
      <p style='cursor:pointer' href='#'  class='collapsed card-link' data-toggle='collapse' data-target='#demo5'><b>Course Code :</b>$r[course]</p>
      <p style='cursor:pointer' href='#'  class='collapsed card-link' data-toggle='collapse' data-target='#demo5'><b> Facaulty:</b>Management Sciences</p>
      <p style='cursor:pointer' href='#'  class='collapsed card-link' data-toggle='collapse' data-target='#demo5'><b>Units:</b> 4</p>
      </div>
      </div>
      </div>
      </div>
      
      
      </div>
      </div>
      ";
      }
      ?>
        
   </div><!--row closed-->
    <br><br><br>


    <h3>Random Knowledge Base</h3>
    <br>
     <div class="row">
     	<div class="col-sm-4">
          <div class="card" style="width:fit-content">
           <div class="box6">
            <img  class="card-img-top"  src="../img/cpp.jpeg" alt="profile emoji" style="width:100%">
            <div class="box-content">
              <h3 class="title">Programming in C++</h3>
              <span class="post">check out neccessary material .</span>
              <ul class="icon">
              	  <li><a href="#" class="fa fa-play"></a></li>
                  <li><a class="fa fa-book"></a></li>
                  
              </ul>
          </div>
      </div>
      
        <div id="accordion">
        <div class="card-body">
          <div class="card-header"> 
            <p href="#"  style="cursor:pointer" class="collapsed card-link" data-toggle="collapse" data-target="#demo7"> Programming in C++</p>
                   
          </div>
      
            <div class="collapse" data-parent="#accordion" id="demo7">
                 <div class="card-body">
               <p style="cursor:pointer" href="#"  class="collapsed card-link" data-toggle="collapse" data-target="#demo7"><b>Name :</b> C++ </p>
                 <p style="cursor:pointer" href="#"  class="collapsed card-link" data-toggle="collapse" data-target="#demo7"><b> Sphere of knowledge:</b>Computer Sciences</p>
                 <p style="cursor:pointer" href="#"  class="collapsed card-link" data-toggle="collapse" data-target="#demo7"><b>Credits:</b>www.credits.com</p>
              </div>
            </div>
        </div>
      </div>

     
     </div>
    </div>

    
    <div class="col-sm-4">
    <div class="card" style="width:fit-content">
    <div class="box6">
    <img  class="card-img-top"  src="../img/cmax.jpeg" alt="profile emoji" style="width:100%">
    <div class="box-content">
    <h3 class="title">360 Leadership--John.C.Maxwell</h3>
    <span class="post">check out neccessary material .</span>
    <ul class="icon">
    <li><a href="#" class="fa fa-play"></a></li>
    <li><a class="fa fa-book"></a></li>
    
    </ul>
    </div>
    </div>
    
    <div id="accordion">
    <div class="card-body">
    <div class="card-header"> 
    <p href="#"  style="cursor:pointer" class="collapsed card-link" data-toggle="collapse" data-target="#demo7"> 360 Leadership--John.C.Maxwell</p>
    
    </div>
    
    <div class="collapse" data-parent="#accordion" id="demo7">
    <div class="card-body">
    <p style="cursor:pointer" href="#"  class="collapsed card-link" data-toggle="collapse" data-target="#demo7"><b>Name :</b> 360 Leadership--John.C.Maxwell </p>
    <p style="cursor:pointer" href="#"  class="collapsed card-link" data-toggle="collapse" data-target="#demo7"><b> Sphere of knowledge:</b>Leadership, Organisation</p>
    <p style="cursor:pointer" href="#"  class="collapsed card-link" data-toggle="collapse" data-target="#demo7"><b>Credits:</b>www.credits.com</p>
    </div>
    </div>
    </div>
    </div>
    
    
    </div>
    </div>
    
     </div><!--row closed-->

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
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>


   
   <script>
    
      function getId(clickedcourse)
        {
          var clicked =clickedcourse.id;
           alert(clicked);
           location.href = "../downloads.php?clickedcourse=" + clicked;
        }
       
         
    </script>
    
  </body>
