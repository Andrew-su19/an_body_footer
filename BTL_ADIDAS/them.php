<?php
include 'connect_manh.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ten = $_POST['ten_san_pham'];
    $gia = $_POST['gia'];
    $brand = $_POST['brand'];
    $hinhanh = $_POST['hinhanh']; 

    $sql = "INSERT INTO sanpham (ten_san_pham, gia, brand, hinhanh)
            VALUES ('$ten', '$gia', '$brand', '$hinhanh')";

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
    <title>Thêm sản phẩm</title>
</head>
<body>
    <h1>Thêm sản phẩm</h1>
    <form method="post">
        Tên sản phẩm: <input type="text" name="ten_san_pham" required><br><br>
        Giá: <input type="number" name="gia" required><br><br>
        Brand: <input type="text" name="brand" required><br><br>
        Hình ảnh (URL): <input type="text" name="hinhanh" required><br><br>
        <button type="submit">Lưu</button>
    </form>
</body>
</html>
