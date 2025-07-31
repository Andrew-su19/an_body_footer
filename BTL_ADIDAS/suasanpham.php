<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm thông tin sản phẩm</title>
</head>
<body>
    <?php 
        include 'connect_an.php';
        $id = $_GET['id'];
        $sql = "SELECT * FROM san_pham WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    ?>
    <h1>Thêm thông tin sản phẩm</h1>
    <form action="xuly_sua_sanpham.php" method="post" enctype="multipart/form-data">
        <div><input type="hidden" name="id" value="<?php echo $row['id']; ?>"></div>
        <div>
            <p>Tên sản phẩm</p>
            <input type="text" name="tensanpham" value="<?php echo $row['ten_san_pham']?>" onlyread>
        </div>
        <div>
            <p>Mã sản phẩm</p>
            <input type="text" name="masanpham" value="<?php echo $row['ma_sp']?>" onlyread>
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
            <button type="submit">Cập nhật sản phẩm</button>
        </div>
    </form>
</body>
</html>