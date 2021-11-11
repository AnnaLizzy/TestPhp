<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang dang nhap</title>
</head>
<body>
    <form action="authenticated.php" method="post">
        <div>
            <label for="id">Ma giao vien</label>
            <input type="text" name="id" value="" require="true">
        </div>
        <div>
            <label for="password">Nhap mat khau</label>
            <input type="password" name="password" value="" require="true">
        </div>
        <div>
            <input type="submit" value="Dang nhap">
        </div>
    </form>
</body>
</html>