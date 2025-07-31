<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin hội viên</title>
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
                <h1>Thông tin hội viên</h1>
            </caption>
            <tr>
                <th>Avatar</th>
                <th>Mã hội viên</th>
                <th>Họ và tên</th>
                <th>Số điện thoại</th>
                <th>Giới tính</th>
                <th>Năm sinh</th>
                <th>Địa chỉ</th>
                <th>Chức năng</th>
            </tr>
            <?php
            include 'connect_an.php';
                $sql = "SELECT * FROM `hoi_vien`";
                $result = mysqli_query($conn, $sql);
        
                while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td>
                    <img src="<?php echo $row['avatar_path']?>" alt="">
                </td>
                <td><?php echo $row['ma_hoi_vien']?></td>
                <td><?php echo $row['ho_ten']?></td>
                <td><?php echo $row['so_dien_thoai']?></td>
                <td><?php echo ($row['gioi_tinh'])?></td>
                <td><?php echo $row['ngay_sinh']?></td>
                <td><?php echo $row['dia_chi']?></td>
                <td>
                    <a class='delete' href="trangchu.php?page_layout=xuly_xoa_hoivien&id=<?php echo $row['id']; ?>">Xoá</a>
                    <a class='update' href="trangchu.php?page_layout=suahoivien&id=<?php echo $row['id']; ?>">Cập nhật</a>
                </td>
            </tr>
            <?php
                }
            ?>
        </table>
        <div class="add">
            <a href="trangchu.php?page_layout=themhoivien">Thêm hội viên</a>
        </div>
    </div>      
</body>
</html>