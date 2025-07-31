<?php
    include 'connect_an.php';

    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM `hoi_vien` WHERE id = $id";
        if (mysqli_query($conn, $sql)) {
            header("location: trangchu.php?page_layout=hoivien");
        }
    }
?>
