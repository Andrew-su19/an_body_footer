<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <style>
        nav{
            background-color: #2fa4e7;
            padding:20px
        }

        a{
            text-decoration: none;
            color: white;
            font-weight: bolder;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div>
        <nav>
            <a href="trangchu.php">Trang chủ</a>
            <a href="index.html">Website</a>
            <a href="trangchu.php?page_layout=hoivien">Hội viên</a>
            <a href="trangchu.php?page_layout=sanpham">Sản phẩm</a>
            <a href="trangchu.php?page_layout=logout">Đăng xuất</a>
        </nav>
    </div>
    
    <?php
    include 'connect.php';
        session_start();
        if(!isset($_SESSION["username"])){
            header('location: trangchu.php');
        }
        if(isset($_GET['page_layout'])){
            switch($_GET['page_layout']){
                case'website':
                    include('index.html');
                    break;
                case'hoivien':
                    include('hoivien.php');
                    break;
                case'themhoivien':
                    include('themhoivien.php');
                    break;
                case'xuly_them_hoivien':
                    include('xuly_them_hoivien.php');
                    break;
                case'suahoivien':
                    include('suahoivien.php');
                    break;
                case'xuly_suahoi_vien':
                    include('xuly_sua_hoivien.php');
                    break;
                case'xuly_xoa_hoivien':
                    include('xuly_xoa_hoivien.php');
                    break;
                case'sanpham':
                    include('sanpham.php');
                    break;
                case'themsanpham':
                    include('themsanpham.php');
                    break;
                case'xuly_them_sanpham':
                    include('xuly_them_sanpham.php');
                    break;
                case'suasanpham':
                    include('suasanpham.php');
                    break;
                case'xuly_sua_sanpham':
                    include('xuly_sua_sanpham.php');
                    break;
                case'xuly_xoa_sanpham':
                    include('xuly_xoa_sanpham.php');
                    break;
                case 'logout':
                    session_destroy();
                    session_unset();
                    header('location: index.html');
                break;      
            }
        }
    ?>
</body>
</html>