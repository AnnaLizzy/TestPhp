<?php
require('save.php');
if($_SERVER["REQUEST_METHOD"] != 'POST'){
  die('Invalid HTTP menthod!');
}#else{
  #  print_r($_POST);
  #}
   
  $sql= "UPDATE students SET fullname = '".$_POST['fullname']."',dob = '".$_POST['dob']."',gpa='".$_POST['gpa']."'"
  ." WHERE id ='".$_POST['id']."'";
  $mysqli_query($connection,$sql);
  $adminURL = 'Admin.php';
  header('Location:'.$adminURL);
?>