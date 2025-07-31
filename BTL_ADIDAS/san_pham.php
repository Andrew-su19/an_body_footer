<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin sản phẩm</title>
    <style>
        table{
            width: 100%;
            border: 1px solid black;
        }

        td, th{
            border: 1px solid black;
            text-align: center;
            padding: 10px;
        }

        .add{
            background-color: pink;
            padding: 10px 20px;
            margin: 10px 1050px 0 0;
    
        }
        .delete{
            background-color: red;
            padding: 5px
        }
        .update{
            background-color: orange;
            padding: 5px
        }
        img{
            width: 50px;
            height: 50px;
        }
    </style>
</head>

<body>
    <div>
        <table class="table">
            <caption>
                <h1>Thông tin sản phẩm</h1>
            </caption>
            <tr>
                <th>Tên sản phẩm</th>
                <th>Mã sản phẩm</th>
                <th>Mô tả</th>
                <th>Đơn giá</th>
                <th>Màu sắc</th>
                <th>Số lượng</th>
                <th>Chức năng</th>
            </tr>
            <?php
            include 'connect_tu.php';
                $sql = "SELECT * FROM `sanpham`";
                $result = mysqli_query($conn, $sql);
        
                while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $row['TenSanPham']?></td>
                <td><?php echo $row['MaSanPham']?></td>
                <td><?php echo $row['MoTa']?></td>
                <td><?php echo $row['DonGia']?></td>
                <td><?php echo $row['MauSac']?></td>
                <td><?php echo $row['SoLuong']?></td>
                <!-- <td>
                    <img src="<?php echo $row['avatar_path']?>" alt="">
                </td> -->
                <td>
                    <a class='delete' href="trangchu.php?page_layout=xulyxoasp&id=<?php echo $row['MaSanPham']; ?>">Xoá</a>
                    <a class='update' href="trangchu.php?page_layout=suasp&id=<?php echo $row['MaSanPham']; ?>">Cập nhật</a>
                </td>
            </tr>
            <?php
                }
            ?>
        </table>
        <div class="add">
            <a href="trangchu.php?page_layout=themsp">Thêm sản phẩm</a>
        </div>
    </div>      
</body>
</html>