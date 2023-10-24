<?php
 
 session_start();

 $con= mysqli_connect('127.0.0.1' , 'root' , '');
 mysqli_select_db($con, 'userregistration');

 $name= $_POST['user'];
 
 $matric= $_POST['matric'];
 
 $level= $_POST['level'];
 
 $field= $_POST['field'];
 
  $course= $_POST['course'];
 
 $pass= $_POST['password'];
 
 
 
 $s= " SELECT* FROM usertable WHERE matric='$matric' && password='$pass' ";
 $result= mysqli_query($con , $s);
 $numb= mysqli_num_rows($result);
 
 if($numb==1)
 {
   $_SESSION['matric']= $matric;
   header('location:dashboard.php');
 }
 else {  
   header('location:portal.php');
 }
 ?>