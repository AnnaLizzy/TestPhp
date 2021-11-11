<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang test</title>
    <script type="text/javascript">
        function show_alert()
        {
            alert("Nhan thong bao tu trang web")//xam`
        }
    </script>
</head>
<body>
    <h2>Chinh sua thong tin</h2>
    
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

   
    <form action="save.php">
        <p>
            <label for="id">Ma sinh vien</label>
            <input type="text" name="id" id="id" value="<?php echo $row['id'] ?>">
        </p>

        <p>
            <label for="fullname">Ho va ten</label>
            <input type="text" name="fullname" id="fullname" value="<?php echo $row['fullname']?>">
        </p>

        <p>
            <label for="dob">Ngay sinh</label>
            <input type="text" id="dob" name="dob" value="<?php echo $row['dob']?>">
        </p>

        <p>
            <label for="gpa">Diem trung binh</label>
            <input type="text" id="gpa" name="gpa" value="<?php echo $row['gpa']?>">
        </p>
        <p>
            <input type="submit"  value="Cap nhat">
        </p>
    </form>
</body>
</html>