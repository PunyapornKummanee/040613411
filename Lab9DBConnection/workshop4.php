<?php include "connect.php" ?>
<html>
<head>
<meta charset="utf-8"></head>
<body>
    <form>
    <input type="text" name="keyword">
    <input type="submit" value="ค้นหา">
    </form>
    <div style="display:flex; display:block">
    <?php
        $stmt = $pdo->prepare("SELECT * FROM member WHERE name LIKE ?");
        if (!empty($_GET)) // ถ้ามีค่าที่สงมาจากฟอร์ม ่
        $value = '%' . $_GET["keyword"] . '%';
        $stmt->bindParam(1, $value); // กำหนดชื่อตัวแปรเงื่อนไขที่จุดที่กำหนด ? ไว ้
        $stmt->execute(); // เริ่มค้นหา
    ?>
    <?php while ($row = $stmt->fetch()) : ?>
    <div style="padding: 15px; text-align: center; " >
    <img src='imgw3/<?=$row["name"]?>.jpg' width='100'><br>
            ชื่อสมาชิก: <?= $row["name"] ?><br>
            ที่อยู่: <?= $row["address"] ?><br>
            อีเมลล์: <?= $row["email"] ?><br>
    <br>
    <?= "<hr>\n"?>
    </div>
    <?php endwhile; ?>
    </div>
</body>
</html>