<?php

include 'config.php';

if(isset($_POST['upload']))
{
  $courseinfo=$_POST['courseinfo'];
  $course=$_FILES['course'];
  print_r($_FILES['course']);
  
  $course_loc=$_FILES['course']['tmp_name'];
  $course_name=$_FILES['course']['name'];
  move_uploaded_file($coure_loc,'materials/'.$course_name);
  
}

?>