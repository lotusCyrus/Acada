<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
 
    <script src="js/script.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
    
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

 <div class="container" >

          
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
                         <li><a class="dropdown-item" href="100 level/materials.php">Fresher</a></li> 
                         <li> <a class="dropdown-item" href="200 level/materials.php">200 level</a></li> 
                          <li><a class="dropdown-item" href="300 level/materials.php">300 level</a></li> 
                         <li> <a class="dropdown-item" href="400 level/materials.php">400 level</a></li> 
                          <li><a class="dropdown-item" href="#">Internship </a></li>
                          <li><a class="dropdown-item" href="500 level/materials.php">Final year</a></li>
                          
                      </ul>
                    </li>
                    
                  </ul>
                  </div>  
                </nav>
               
          </div>

<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

          <div id="loginForm">
				<form id="loginForm" class="login100-form validate-form" method="post" action="validation.php" >
					<span class="login100-form-title">
						Membership Login 	<i class="fa fa-graduation-cap" aria-hidden="true"></i>
					</span>

					<div class="wrap-input100 validate-input" data-validate="Kindly input matric number">
						<input class="input100" type="number" name="matric" placeholder="Matric number">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div  class="text-center p-t-12">
					<span class="txt1">
					Forgot
					</span>
					<a class="txt2" href="#">
					Username / Password?
					</a>
					
					</div>
					
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div><br><br>

					<div class="text-center p-t-12">
						
						
						<a class="txt2"  href="registerPortal.php">
						Dont have an account?    Signup
						</a>
						
					</div>

					
					
				</form>

			</div>
				
				
				

			
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
              <a href="portal.html">Join US</a>
            </p>
          </li>
          <li>
            <p>
              <a href="100 level / materials.php">Academia</a>
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
      <form method="post" action="sendemail.php" class="needs-validation">

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
  <div class="footer-copyright text-center py-3">© 2021 Copyright: Website developed by 
    <a href="#" id="test">lotus-web</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>