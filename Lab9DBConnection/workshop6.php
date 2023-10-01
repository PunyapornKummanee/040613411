<?php include "connect.php" ?>
<html>
<head>
    <meta charset="utf-8">
    <script>
        function confirmDelete(name) { // ฟังก์ชนจะถูกเรียกถ้าผู้ใช ั คลิกที่ ้ link ลบ
            var ans = confirm("ต้องการลบ " + name); // แสดงกล่องถามผู้ใช ้
            if (ans == true) // ถ้าผู้ใชกด ้ OK จะเข ้าเงื่อนไขนี้
                document.location = "deletew6.php?name=" + name; // สงรหัสส ่ นค ้าไปให ้ไฟล์ ิ delete.php
        }
    </script>
</head>

<body>
<?php
    $stmt = $pdo->prepare("SELECT * FROM member");
    $stmt->execute();
    while ($row = $stmt->fetch()) {
    echo "ชื่อสมาชิก:" . $row ["name"] . "<br>";
    echo "ที่อยู่: " . $row ["address"] . "<br>";
    echo "อีเมลล์:" . $row ["email"] . "<br>";
    echo "<a href='#" . $row ["name"] . "'>แก้ไข</a> | ";
    echo "<a href='deletew6.php?name=" . $row ["name"] . "'>ลบ</a> | ";
    //echo "<a href='deletew6.php?name=' onclick='confirmDelete(" . $row ["name"] . ")'>ลบ</a>";
    //echo "<a href='deletew6.php?name=' onclick='confirmDelete(" . $row["name"] . ")'>ลบ</a> | ";
    echo "<hr>\n";
    }
    ?>
</body>
</html>