<?php
 
 session_start();
 //header('location:login.php');
 $con= mysqli_connect('127.0.0.1' , 'root' , '');
 mysqli_select_db($con, 'userregistration');

 $name= $_POST['user'];

 $matric= $_POST['matric'];
 
 $level= $_POST['level'];
 
  $course= $_POST['course'];
 
 $field= $_POST['field'];
 
 $pass= $_POST['password'];
 
 $s= " SELECT* FROM usertable WHERE matric='$matric'";
 $result= mysqli_query($con , $s);
 $numb= mysqli_num_rows($result);
 
 if($numb==1)
 {
   echo   " alert('$name , you registered already') ";
 }
 else {  
   $reg =" insert into usertable(name , matric , level, course, field, password) values ('$name' , '$matric', '$level', '$course' , '$field', '$pass')";
   mysqli_query($con , $reg);
   echo   " alert(' Congrats , $name , you registered successfully, your account will be verified in the next 24hrs , thank you , Dear scholar!!') ";
 }
 ?>