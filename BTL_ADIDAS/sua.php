<?php
include 'connect_manh.php';

$id = $_GET['id'] ?? 0;

$sql = "SELECT * FROM sanpham WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if (!$row) {
    die("Không tìm thấy sản phẩm");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ten = $_POST['ten_san_pham'];
    $gia = $_POST['gia'];
    $brand = $_POST['brand'];
    $hinhanh = $_POST['hinhanh'];

    $sql = "UPDATE sanpham 
            SET ten_san_pham='$ten', gia='$gia', brand='$brand', hinhanh='$hinhanh' 
            WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Lỗi: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sửa sản phẩm</title>
</head>
<body>
    <h1>Sửa sản phẩm</h1>
    <form method="post">
        Tên sản phẩm: <input type="text" name="ten_san_pham" value="<?= htmlspecialchars($row['ten_san_pham']) ?>" required><br><br>
        Giá: <input type="number" name="gia" value="<?= htmlspecialchars($row['gia']) ?>" required><br><br>
        Brand: <input type="text" name="brand" value="<?= htmlspecialchars($row['brand']) ?>" required><br><br>
        Hình ảnh (URL): <input type="text" name="hinhanh" value="<?= htmlspecialchars($row['hinhanh']) ?>" required><br><br>
        <button type="submit">Cập nhật</button>
    </form>
</body>
</html>
