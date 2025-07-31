<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm thông tin sản phẩm</title>
</head>
<body>
    <h1>Thêm thông tin sản phẩm</h1>
    <form action="xuly_them_sanpham.php" method="post" enctype="multipart/form-data">
        <div>
            <p>Tên sản phẩm</p>
            <input type="text" name="tensanpham" required>
        </div>
        <div>
            <p>Mã sản phẩm</p>
            <input type="text" name="masanpham" required>
        </div>
        <div>
            <p>Mô tả</p>
            <input type="text" name="mota" required>
        </div>
        <div>
            <p>Đơn giá</p>
            <input type="number" name="dongia" required>
        </div>
        <div>
            <p>Số lượng</p>
            <input type="number" name="soluong" required>
        </div>
        <div>
            <p>Màu sắc</p>
            <input type="text" name="mausac" required>
        </div>
        <div>
            <!-- Xử lý thêm ảnh -->
            <p>Ảnh đại diện</p>
            <input type="file" name="fileToUpload" id="fileToUpload">
        </div>
        <div>
            <button type="submit">Thêm sản phẩm</button>
        </div>
    </form>
</body>
</html>