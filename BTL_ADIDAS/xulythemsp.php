    <?php 
        // session_start();
        include 'connect_tu.php';
        if(!empty($_POST['tsp'])
            && !empty($_POST['msp'])
            && !empty($_POST['mota'])
            && !empty($_POST['dongia'])
            && !empty($_POST['mausac'])
            && !empty($_POST['soluong'])
        ) {
            $tsp = $_POST['tsp'];
            $msp = $_POST['msp'];
            $mota = $_POST['mota'];
            $dongia = $_POST['dongia'];
            $mausac = $_POST['mausac'];
            $soluong = $_POST['soluong'];
        
            $sql = "INSERT INTO `sanpham`(`TenSanPham`, `MaSanPham`, `MoTa`, `DonGia`, `MauSac`, `SoLuong`) VALUES ('$tsp','$msp','$mota','$dongia','$mausac','$soluong')";
            mysqli_query($conn, $sql);
            header('location: trangchu.php?page_layout=sanpham');
        }
            // if($matkhau != $nhaplaimatkhau) {
            //     echo "Vui lòng nhập lại mật khẩu";
            //Xử lý ảnh
            //Bắt đầu xử lý thêm ảnh
            // Xử lý ảnh
            // $target_dir = "avatar/";
            // $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    
            // $uploadOk = 1;
            // $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
            // Kiểm tra xem file ảnh có hợp lệ không
            // if(isset($_POST["submit"])) {
            //     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            //     if($check !== false) {
            //         $uploadOk = 1;
            //     } else {
            //         echo "File không phải là ảnh.";
            //         $uploadOk = 0;
            //     }
            // }
            // Kiểm tra nếu file đã tồn tại
            // if (file_exists($target_file)) {
            //     echo "File này đã tồn tại trên hệ thông";
            //     $uploadOk = 2;
            // }
    
            // Kiểm tra kích thước file
            // if ($_FILES["fileToUpload"]["size"] > 500000) {
            //     echo "File quá lớn";
            //     $uploadOk = 0;
            // }
    
            // // Cho phép các định dạng file ảnh nhất định
            // if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            // && $imageFileType != "gif" ) {
            //     echo "Chỉ những file JPG, JPEG, PNG & GIF mới được chấp nhận.";
            //     $uploadOk = 0;
            // }

            // #Kết thúc xử lý ảnh
            // if($uploadOk == 0){
            //     echo "File của bạn chưa được tải lên";
            // }
            else {
                // move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
            echo "Vui lòng điền đầy đủ thông tin sản phẩm!";
            }
        
    ?>