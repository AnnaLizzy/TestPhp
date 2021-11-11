<?php
require('save.php');

if($_SERVER['REQUEST_METHOD'] != 'GET')
   die('Invalid HTTP methos');
$id= mysqli_real_escape_string($connection,$_REQUEST['id']);
$sql= "DELETE FROM students WHERE id = '$id'";


if(mysqli_query($connection, $sql)){
    echo "<br> xoa thanh cong";
}else{
    echo "Khong the thuc thi".mysqli_error($connection);
}
mysqli_close($connection);

$adminURL='Admin.php';
header('Location:'.$adminURL);
?>