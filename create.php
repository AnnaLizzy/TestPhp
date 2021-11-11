<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang test</title>
</head>
<body>
    <h2>Chen du lieu</h2>
    <?php
     require('save.php');
     ?>
     <form action="store.php" method="POST">
         <p>
             <label for="id">Ma sinh vien :</label>
             <input type="text" name="id" id="id" value="" require="true">
         </p>
         <p>
             <label for="fullname">Ho ten:</label>
             <input type="text" name="fullname" id="fullname" value="" require="true">
         </p>
         <p>
             <label for="dob">Ngay sinh:</label>
             <input type="text" name="dob" id="dob" value="" require="true">
         </p>
         <p>
             <label for="gpa">Diem trung binh:</label>
             <input type="text" name="gpa" id="gpa" value="" require="true">
         </p>
         <p>
            <input type="submit"  value="Cap nhat">
        </p>
     </form>
</body>
</html>