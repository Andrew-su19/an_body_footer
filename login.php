<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>

    </style>
</head>
<body>
    <!-- <div class="tieu-de">
        <h1>ĐĂNG NHẬP</h1>
    </div>
    <form action="login.php" method="post">
        <input type="text" name="username" placeholder="Mã hội viên" required>
        <br>
        <input type="password" name="password" placeholder="Mật khẩu" required>
        <br>
        <button type="submit">Đăng nhập</button>
    </form> -->

    <?php
    include 'connect.php';
        if(isset($_POST['username']) && isset($_POST['password'])){
            $userName = $_POST['username'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM `hoi_vien` WHERE ma_hoi_vien = '$userName' AND mat_khau = '$password'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                session_start();
                $_SESSION["username"] = $row['ma_hoi_vien'];
                $_SESSION["role"] = $row['role'];

                // Điều hướng dựa vào quyền
                if ($row['role'] == 'admin') {
                    header('Location: trangchu.php');
                } else {
                    header('Location: index.html');
                }
            }
            else {
                echo "Tên đăng nhập hoặc mật khẩu không chính xác";
            }
        }
    ?>
</body>
</html>
