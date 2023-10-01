<?php include "connect.php" ?>
<html>
<head>
    <meta charset="utf-8">
</head>
<?php
$stmt = $pdo->prepare("SELECT * FROM member WHERE name = ?");
$stmt->bindParam(1, $_GET["name"]); 
$stmt->execute(); 
$row = $stmt->fetch(); 
?>
<div style="display:flex">
    <div>
        <img src='imgw3/<?= $row["name"] ?>.jpg' width='200'>
    </div>
    <div style="padding: 15px">
        ชื่อสมาชิก: <?= $row["name"] ?><br>
        ที่อยู่: <?= $row["address"] ?><br>
        อีเมลล์: <?= $row["email"] ?><br>
    </div>
</div>
</body>

</html>