<?php include "connect.php" ?>
<?php
    $stmt = $pdo->prepare("DELETE FROM member WHERE name = ?");
    $stmt->bindParam(1, $_GET["name"]); // กำหนดค่าลงในตำแหน่ง ?
    if ($stmt->execute()) // เริ่มลบข้อมูล
        header("location: workshop6.php"); // กลับไปแสดงผลหน้าข้อมูล

?>