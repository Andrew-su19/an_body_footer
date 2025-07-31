<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="login.php" method="post">
        <input type="text" name="username" placeholder="Tài Khoản" required>
        <input type="password" name="password" placeholder="Mật khẩu" required>
        <button type="submit">Đăng nhập</button>
    </form>

    <?php
    include 'connect_tu.php';
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $userName = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM `user` WHERE TaiKhoan = '$userName' AND MatKhau = '$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            session_start();
            $_SESSION["TaiKhoan"] = $userName;
            header('location: trangchu.php');
        } else {
            echo "Tên đăng nhập hoặc mật khẩu không chính xác";
        }
    }
    ?>

</body>

</html>