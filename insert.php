<?php
session_start();

$con= mysqli_connect('127.0.0.1' , 'root' , '');
$course=$_SESSION['course'];
if(isset($_SESSION['matric']))
{
   header('location:academia/materials.php');
if(isset($_POST['upload']))
{
  $courseinfo=$_POST['courseinfo'];
  $file=$_FILES['file'];
  $filelocation=$_FILES['file']['tmp_name'];
  $filename=$_FILES['file']['name'];
  $filedes=$filename;
  move_uploaded_file($filelocation,'materials/'.$filename);
  mysqli_select_db($con, 'CourseEdit');
  mysqli_query($con, "INSERT INTO `coursetable`(`courseinfo`,`course`, `file`) VALUES ('$courseinfo','$course','$filedes')");
}}
?>.