    <?php 
        // session_start();
        include 'connect.php';

        if(!empty($_POST['id'])
            && !empty($_POST['tensanpham'])
            && !empty($_POST['masanpham'])
            && !empty($_POST['mota'])
            && !empty($_POST['dongia'])
            && !empty($_POST['soluong'])
            && !empty($_POST['mausac'])
        ) {
            $id = $_POST['id'];
            $tensanpham = $_POST['tensanpham'];
            $masanpham = $_POST['masanpham'];
            $mota = $_POST['mota'];
            $dongia = $_POST['dongia'];
            $soluong = $_POST['soluong'];
            $mausac = $_POST['mausac'];

            //Xử lý ảnh
            //Bắt đầu xử lý thêm ảnh
            // Xử lý ảnh
            $target_dir = "avatar/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
            // Kiểm tra xem file ảnh có hợp lệ không
            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if($check !== false) {
                    $uploadOk = 1;
                } else {
                    echo "File không phải là ảnh.";
                    $uploadOk = 0;
                }
            }
            // Kiểm tra nếu file đã tồn tại
            if (file_exists($target_file)) {
                echo "File này đã tồn tại trên hệ thông";
                $uploadOk = 2;
            }
    
            // Kiểm tra kích thước file
            if ($_FILES["fileToUpload"]["size"] > 500000) {
                echo "File quá lớn";
                $uploadOk = 0;
            }
    
            // Cho phép các định dạng file ảnh nhất định
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                echo "Chỉ những file JPG, JPEG, PNG & GIF mới được chấp nhận.";
                $uploadOk = 0;
            }

            #Kết thúc xử lý ảnh
            if($uploadOk == 0){
                echo "File của bạn chưa được tải lên";
            }
            else {
                move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
                $sql = "UPDATE `san_pham` SET `avatar_path`='$target_file',`mo_ta`='$mota',`don_gia`='$dongia',`so_luong`='$soluong',`mau_sac`='$mausac' WHERE id=$id";
                mysqli_query($conn, $sql);
                header('location: trangchu.php?page_layout=sanpham');
            }
        }
    ?>