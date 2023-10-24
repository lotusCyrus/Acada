<?php 
  
  $con= mysqli_connect('127.0.0.1' , 'root' , 'root');
  mysqli_select_db($con, 'CourseEdit');
  $ID=$_GET['Id'];
  mysqli_query($con, "DELETE FROM `coursetable` WHERE id=$ID");
  header('location:materials.php');
?>