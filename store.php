<?php
require ('save.php');

if($_SERVER['REQUEST_METHOD'] != 'POST')
  die('Invalid HTTP method');
//lam sach du lieu de dam bao an toan
$id= mysqli_real_escape_string($connection,$_REQUEST['id']);
$fullname= mysqli_real_escape_string($connection,$_REQUEST['fullname']);
$dob= mysqli_real_escape_string($connection,$_REQUEST['dob']);
$gpa= mysqli_real_escape_string($connection,$_REQUEST['gpa']);


$sql="INSERT INTO students(id,fullname,dob,gpa) VALUE('$id','$fullname','$dob','$gpa')";


if(mysqli_query($connection,$sql)){
  echo "<br>Them thanh cong";
}else{
  echo "Loi khong the thuc thi".mysqli_error($connection);
}
/*if($mysqli->query($sql) === true){
  echo "Them thanh cong";//
}else{
  echo "Loi khong the thuc thi".$myqli->error;
}*/
mysqli_close($connection);

$adminURL= 'Admin.php';
header('Location:'.$adminURL);
?>