<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật thông tin hội viên</title>
</head>
<body>
    <?php 
        include 'connect_an.php';
        $id = $_GET['id'];
        $sql = "SELECT * FROM hoi_vien WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    ?>
    <h1>Cập nhật thông tin hội viên</h1>
    <form action="xuly_sua_hoivien.php" method="post" enctype="multipart/form-data">
        <div><input type="hidden" name="id" value="<?php echo $row['id']; ?>"></div>
        <div>
            <p>Mã số sinh viên</p>
            <input type="text" name="mahoivien" value="<?php echo $row['ma_hoi_vien']?>" readonly>
        </div>
        <div>
            <p>Họ và tên</p>
            <input type="text" name="hoten" value="<?php echo $row['ho_ten']?>" readonly>
        </div>
        <div>
            <p>Số điện thoại</p>
            <input type="text" name="sodt" required>
        </div>
        <div>
            <p>Giới tính</p>
            <select name="gioitinh">
                <option value="Nam">Nam</option>
                <option value="Nữ">Nữ</option>
                <option value="Khác">Khác</option>
            </select>
        </div>
        <div>
            <p>Ngày sinh</p>
            <input type="date" name="ngaysinh" required>
        </div>
        <div>
            <p>Địa chỉ</p>
            <input type="text" name="diachi" required>
        </div>
        <div>
            <p>Mật khẩu</p>
            <input type="password" name="matkhau" required>
        </div>
        <div>
            <p>Nhập lại mật khẩu</p>
            <input type="password" name="nhaplaimatkhau" required>
        </div>
        <div>
            <!-- Xử lý thêm ảnh -->
            <p>Ảnh đại diện</p>
            <input type="file" name="fileToUpload" id="fileToUpload">
        </div>
        <div>
            <button type="submit">Cập nhật</button>
        </div>
    </form>
</body>
</html>