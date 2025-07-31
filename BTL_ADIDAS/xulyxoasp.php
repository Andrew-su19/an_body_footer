<?php
    include 'connect_tu.php';

    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM `sanpham` WHERE MaSanpham = $id";
        if (mysqli_query($conn, $sql)) {
            header("location: trangchu.php?page_layout=sanpham");
        }
    }
?>
