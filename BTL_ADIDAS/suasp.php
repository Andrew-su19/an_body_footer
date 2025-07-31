<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin sản phẩm</title>
</head>
<body>
    <?php 
        include 'connect_tu.php';

        // Kiểm tra 'id' có tồn tại không và ép kiểu an toàn
        if (!isset($_GET['id']) || empty($_GET['id'])) {
            echo "<h2>Thiếu thông tin sản phẩm cần sửa!</h2>";
            exit;
        }

        $id = intval($_GET['id']); // Ép kiểu để tránh lỗi cú pháp SQL

        // Truy vấn theo MaSanPham vì bạn đã dùng nó ở câu truy vấn
        $sql = "SELECT * FROM sanpham WHERE MaSanPham = $id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        if (!$row) {
            echo "<h2>Không tìm thấy sản phẩm với mã này!</h2>";
            exit;
        }
    ?>

    <h1>Sửa thông tin sản phẩm</h1>
    <form action="xulysuasp.php" method="post">
        <!-- Hidden để truyền MaSanPham thay vì id -->
        <input type="hidden" name="msp" value="<?php echo $row['MaSanPham']; ?>">

        <div>
            <p>Tên sản phẩm</p>
            <input type="text" name="tsp" value="<?php echo $row['TenSanPham']; ?>">
        </div>
        <div>
            <p>Mã sản phẩm</p>
            <input type="number" name="msp_show" value="<?php echo $row['MaSanPham']; ?>" disabled>
        </div>
        <div>
            <p>Mô tả</p>
            <input type="text" name="mota" value="<?php echo $row['MoTa']; ?>">
        </div>
        <div>
            <p>Đơn giá</p>
            <input type="number" name="dongia" value="<?php echo $row['DonGia']; ?>">
        </div>
        <div>
            <p>Màu sắc</p>
            <input type="text" name="mausac" value="<?php echo $row['MauSac']; ?>"> 
        </div>
        <div>
            <p>Số lượng</p>
            <input type="number" name="soluong" value="<?php echo $row['SoLuong']; ?>">
        </div>
        <div>
            <button type="submit">Cập nhật</button>
        </div>
    </form>
</body>
</html>

