<?php include "connect.php" ?>
<?php
$stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
$stmt->bindParam(1, $_GET["username"]); // 2. น าค่า pid ที่สงมากับ ่ URL ก าหนดเป็ นเงื่อนไข
$stmt->execute(); // 3. เริ่มค้นหา
$row = $stmt->fetch(); // 4. ดึงผลลัพธ์ (เนื่องจากมีข้อมูล 1 แถวจึงเรียกเมธอด fetch เพียงครั้งเดียว)
?>

<html>

<head>
    <meta charset="utf-8">
</head>

<body>
<form action="workshop9edit.php" method="post">
        <input type="hidden" name="username" value="<?=$row["username"]?>"> <br>
        name :<input type="text" name="name"><br>
        address : <br><textarea name="address" rows="3" cols="40"></textarea><br>
        mobile :<input type="text" name="mobile" pattern="\d{2}-\d{4}-\d{4}"><br>
        email :<input type="email" name="email"><br>
        <input type="submit" value="แก้ไขสมาชิก">
    </form>
</body>

</html>