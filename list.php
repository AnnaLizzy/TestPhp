<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Danh sach bai viet</h1>

    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Tieu de</th>
            </tr>
        </thead>
        <tbody>
           
        </tbody>
    </table>
</body>
</html>
<?php
    require('save.php');
    if (isset($_GET['id'])) $id=$_GET['id'];
    else
       die('Thieu ma so sinh vien');
    

    $sql=strval("SELECT * FROM `students` WHERE id=$id");// convert to string vi trong csdl no la dang int
    $result =mysqli_query($connection,$sql);

    if(!$result){
        die ('Query error: ['.$connection -> error. ']');
    }
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(!$row)
    die ('khong co sinh vien nao ton tai voi mssv ban cung cap');
  else
     echo $row['fullname'];
  ?>