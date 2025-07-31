    <?php 
        // session_start();
        include 'connect_an.php';
        
        if(!empty($_POST['id'])
            && !empty($_POST['mahoivien'])
            && !empty($_POST['hoten'])
            && !empty($_POST['matkhau'])
            && !empty($_POST['nhaplaimatkhau'])
            && !empty($_POST['gioitinh'])
            && !empty($_POST['sodt'])
            && !empty($_POST['ngaysinh'])
            && !empty($_POST['diachi'])
        ) {
            $id = $_POST['id'];
            $mahoivien = $_POST['mahoivien'];
            $hoten = $_POST['hoten'];
            $sodt = $_POST['sodt'];
            $matkhau = $_POST['matkhau'];
            $nhaplaimatkhau = $_POST['nhaplaimatkhau'];
            $gioitinh = $_POST['gioitinh'];
            $ngaysinh = $_POST['ngaysinh'];
            $diachi = $_POST['diachi'];
            if($matkhau != $nhaplaimatkhau) {
                echo "Vui lòng nhập lại mật khẩu";
            } 
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
                $sql = "UPDATE `hoi_vien` SET `avatar_path`='$target_file',`so_dien_thoai`='$sodt',`gioi_tinh`='$gioitinh',`ngay_sinh`='$ngaysinh',`dia_chi`='$diachi',`mat_khau`='$matkhau' WHERE id=$id";
                mysqli_query($conn, $sql);
                header('location: trangchu.php?page_layout=hoivien');
            }
        }
    ?>