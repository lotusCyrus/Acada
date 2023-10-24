<?php 
  $con= mysqli_connect('127.0.0.1' , 'root' , '');
  $ID=$_GET['id'];
  mysqli_query($con, "DELETE FROM `coursetable` WHERE id=$ID");
  header('location:academia/materials.php');
?>