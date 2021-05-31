<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
</head>
<body>
	<form action="" enctype="multipart/form-data" method="POST">
		Chọn file ảnh: <input type="file" name="uploadFile"><br> <input
			type="submit" name="submit" value="Upload">
	</form>
</body>
</html>

<script>


</script>
<?php  

if (isset($_POST['submit'])) {
    var_dump($_FILES['uploadFile']);
    if ($_FILES['uploadFile']['name'] != NULL) {
        // Kiểm tra file up lên có phải là ảnh không
        if ($_FILES['uploadFile']['type'] == "image/jpeg" || $_FILES['uploadFile']['type'] == "image/png" || $_FILES['uploadFile']['type'] == "image/gif") {
            
            // Nếu là ảnh tiến hành code upload
            $path = "../public/uploads/img/measure/"; // Ảnh sẽ lưu vào thư mục images
            $tmp_name = $_FILES['uploadFile']['tmp_name'];
            $name = $_FILES['uploadFile']['name'];
            // Upload ảnh vào thư mục images
			$image_url = $path . time() . $name;
            move_uploaded_file($tmp_name , $image_url);
            echo '<pre>';
			var_dump($tmp_name);
            var_dump($image_url);
			// Đường dẫn ảnh lưu vào cơ sở dữ liệu
                                      // Insert ảnh vào cơ sở dữ liệu
            // $sql = "INSERT INTO `image` (`image_url`, `created`) VALUES ('$image_url') . "')";
            // $smt = mysqli_prepare($connect, $sql);
            // if (mysqli_stmt_execute($smt)) {
            //     echo 'Thêm thành công ảnh';
            // } else {
            //     echo 'Không thể thêm được ảnh';
            // }
        } else {
            // Không phải file ảnh
            echo "Kiểu file không phải là ảnh";
        }
    } else {
        echo "Bạn chưa chọn ảnh upload";
    }
}
?>
