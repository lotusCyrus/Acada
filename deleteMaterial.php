<?php 
       $file = $_GET['file'];

  $con= mysqli_connect('127.0.0.1' , 'root' , '');
  mysqli_select_db($con, 'courseedit');

  mysqli_query($con, "DELETE FROM `coursetable` WHERE file='$file'");
  
?>
<!DOCTYPE html>
<html>
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
<script src="js/pageback.js"></script>

    </head>
    <body style="margin:auto; text-align:center; padding:20%">
    <h2>FILE DELTED</h2>
    <button class="btn btn-success" onclick="pageback()">Return to previous page</button>
    </body>
</html>