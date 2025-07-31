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
                <th>Ảnh sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Mã sản phẩm</th>
                <th>Mô tả</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Màu sắc</th>
                <th>Chức năng</th>
            </tr>
            <?php
            include 'connect_an.php';
                $sql = "SELECT * FROM `san_pham`";
                $result = mysqli_query($conn, $sql);
        
                while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td>
                    <img src="<?php echo $row['avatar_path']?>" alt="">
                </td>
                <td><?php echo $row['ten_san_pham']?></td>
                <td><?php echo $row['ma_sp']?></td>
                <td><?php echo $row['mo_ta']?></td>
                <td><?php echo ($row['don_gia'])?></td>
                <td><?php echo $row['so_luong']?></td>
                <td><?php echo $row['mau_sac']?></td>
                <td>
                    <a class='delete' href="trangchu.php?page_layout=xuly_xoa_sanpham&id=<?php echo $row['id']; ?>">Xoá</a>
                    <br>
                    <a class='update' href="trangchu.php?page_layout=suasanpham&id=<?php echo $row['id']; ?>">Cập nhật</a>
                </td>
            </tr>
            <?php
                }
            ?>
        </table>
        <div class="add">
            <a href="trangchu.php?page_layout=themsanpham">Thêm sản phẩm</a>
        </div>
    </div>      
</body>
</html>