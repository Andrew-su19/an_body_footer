<?php
include 'connect_manh.php';

$id = $_GET['id'] ?? 0;
$sql = "DELETE FROM sanpham WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
    exit();
} else {
    echo "Lỗi: " . mysqli_error($conn);
}
