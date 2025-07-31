<?php 
    // cookie
    $cookie = "user";
    $cookieValue = "0910";

    // cú pháp setcookie ( $name, $value, $expire,$path)
    setcookie($cookie, $cookieValue, time() + (86400), "/"); // cookie sẽ hết hạn sau 1 ngày

    // kiểm tra đã tồn tại cookie hay chưa
    if (isset($_COOKIE[$cookie])) {
        echo "đã tồn tại";
    } else {
        echo "chưa tồn tại";
    }

    // Chỉ mở lên khi nào có logout
    // session
    session_start(); // khởi tạo session
    $_SESSION["password"] = "0910"; // lưu giá trị vào session
    session_destroy(); // hủy session
    session_unset(); // xóa tất cả các biến trong session
?>