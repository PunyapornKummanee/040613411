<html>

<head>
    <meta charset="UTF-8">
</head>

<body>

    <form action="workshop8insertpage.php" method="post">
        username : <input type="text" name="username"><br>
        password : <input type="text" name="password"><br>
        name :<input type="text" name="name"><br>
        address : <br><textarea name="address" rows="3" cols="40"></textarea><br>
        mobile :<input type="text" name="mobile" pattern="\d{2}-\d{4}-\d{4}"><br>
        email :<input type="email" name="email"><br>
        <input type="submit" value="เพิ่มสมาชิก">
    </form>
</body>

</html>