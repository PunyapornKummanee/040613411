<?php include "connect.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <?php
        $stmt = $pdo->prepare("SELECT * FROM member");
        $stmt->execute();
        ?>

        <?php
        while ($row = $stmt->fetch()) {
            $imageKeyName = "imgw3/" . $row["name"] . ".jpg";
        ?>
            ชื่อสมาชิก: <?= $row["name"] ?><br>
            ที่อยู่: <?= $row["address"] ?><br>
            อีเมลล์: <?= $row["email"] ?><br>
            <img src='<?php echo $imageKeyName; ?>'width='100'><br>
            <?= "<hr>\n"?>
        <?php
        }
        ?>
    </table>
</body>

</html>