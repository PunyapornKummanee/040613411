<?php include "connect.php" ?>
<html>
<head>
    <meta charset="utf-8">
</head>
<?php
$stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
$stmt->bindParam(1, $_GET["username"]); 
$stmt->execute(); 
$row = $stmt->fetch(); 
?>
<div style="display:flex">
    <div style="padding: 15px">
        username: <?= $row["username"] ?><br>
        password: <?= $row["password"] ?><br>
        name: <?= $row["name"] ?><br>
        address: <?= $row["address"] ?><br>
        mobile: <?= $row["mobile"] ?><br>
        email: <?= $row["email"] ?><br>
    </div>
</div>
</body>

</html>