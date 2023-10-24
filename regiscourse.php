<?php
 
 session_start();
 //header('location:login.php');
 $con= mysqli_connect('127.0.0.1' , 'root' , '');
 mysqli_select_db($con, 'CourseEdit');
 $name=$_SESSION['name'];


if(isset($_POST['reg']))
   {
   
 $coverpic=$_FILES['coverpic'];
 $piclocation=$_FILES['coverpic']['tmp_name'];
 $picname=$_FILES['coverpic']['name'];
 $picdes="img/".$picname;
 move_uploaded_file($piclocation,'img/'.$picname);
 
 $coursename= $_POST['coursename'];
 
 $course= $_POST['course'];
 
 $unit= $_POST['unit'];
 
 $faculty= $_POST['faculty'];
 
 
 $s= "SELECT* FROM `courselist` WHERE course='$course'";
 $result= mysqli_query($con , $s);
 $numb= mysqli_num_rows($result);

   if($numb==1)
   {
   echo   "<script> alert('$name' + ' you registered already') </script>";
   }
 else {  

   $reg ="insert into courselist(coursename , course , unit , faculty, coverpic) values ('$coursename' , '$course', '$unit', '$faculty' , '$picdes')";
   mysqli_query($con , $reg);
   echo   " alert(' Congrats , $name , you registered successfully') ";
 }
 }
 ?>