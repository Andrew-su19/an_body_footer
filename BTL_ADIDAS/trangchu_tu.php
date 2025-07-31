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
            <a href="trangchu.php?page_layout=sanpham">Sản Phẩm</a>
            <!-- <a href="trangchu.php?page_layout=logout">Đăng xuất</a> -->
        </nav>
    </div>
    
    <?php
    include 'connect_tu.php';
        session_start();
        // if(!isset($_SESSION["username"])){
        //     // header('location: login.php');
        // }
        if(isset($_GET['page_layout'])){
            switch($_GET['page_layout']){
                case'sanpham':
                    include('sanpham.php');
                    break; 
                case'themsp':
                    include('themsp.php');
                    break; 
                case'xulythemsp':
                    include('xulythemsp.php');
                    break; 
                case'suasp':
                    include('suasp.php');
                    break;
                case'xulysuasp':
                    include('xulysuasp.php');
                    break;
                case'xulyxoasp':
                    include('xulyxoasp.php');
                    break;
                // case 'logout':
                //     session_destroy();
                //     session_unset();
                //     header('location: login.php');
                // break;      
            }
        }
    ?>
</body>
</html>