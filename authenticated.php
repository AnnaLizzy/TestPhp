<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang test</title>
</head>
<body>
    <h2>Xac thuc</h2>
    <div>
        <?php 
             $connection = mysqli_connect("127.0.0.1","root","","truonghoc");
        ?>
        <p>ID:<?php echo $_POST['id'];?></p>
        <p>Mat khau: <?php echo $_POST['password'];?></p>
        <?php
             if($_POST['id'] == 'GV1258' && $_POST['password'] == '123456'){
                 $adminURL='Admin.php';
                 header('Location:'.$adminURL);
                 exit();
             }else{
                 echo "<p>Sai id hoac mat khau </p>";
             }
        ?>
    </div>
</body>
</html>