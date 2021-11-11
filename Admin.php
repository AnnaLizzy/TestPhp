<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang test</title>
    <link rel="stylesheet" href="taobang.css">
</head>
<body>
    <h2 style="text-align= center">Trang admin</h2>
    <?php
     require('save.php');
     echo "- So cot la: ";
     //
     $sql='SELECT * FROM `students`';

     $result=mysqli_query($connection,$sql);

     if(!$result){
         die('Query error : ['.$mysqli_query ->error .']');
     }
     echo mysqli_num_rows($result);
     echo "<br>";
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);//hàm mysqli_fetch_array với số đầu là biến
    //số thứ hai là hằng.Sử dụng hằng MYSQLI_ASSOC kết quả trả về sẽ là 1 mảng với khóa và giá trị tương ứng.
    print_r($row);
    echo "<br>";

    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    print_r($row);
    echo "<br>";
     ?>
   
   <table>
       <thead>
           <tr>
               <th>Ma sinh vien</th>
               <th>Ho ten</th>
               <th>Ngay sinh</th>
               <th>Diem trung binh</th>
               <th> Quan ly</th>
           </tr>
           <tbody>
               <?php
                   while($row= mysqli_fetch_array($result,MYSQLI_ASSOC)):
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['fullname']; ?></td>
                    <td><?php echo $row['dob']; ?></td>
                    <td><?php echo $row['gpa']; ?></td>
                    <td><a href="delete.php?id=<?php echo $row['id']; ?>" class="delete">Xoa</a></td>
                </tr>
                <?php endwhile; ?>
           </tbody>
       </thead>
   </table>

</body>
</html>