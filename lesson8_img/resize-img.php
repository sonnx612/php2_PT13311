<?php
$img = getcwd(). '/uploads/' . 'phan-nguyen-slide1.jpg';
list($width, $height) = getimagesize($img);
$percent = 0.5;
$new_width = $width * $percent;
$new_height = $height * $percent;
// lấy ra kích cỡ gốc của ảnh
var_dump(getimagesize($img)); 


// resize lại ảnh
// tạo ra 1 ảnh mới với kích cỡ tự chọn
$new_image = imagecreatetruecolor($new_width, $new_height);

// lấy ra ảnh cũ
$image = imagecreatefromjpeg($img);
// resize ảnh
imagecopyresampled($new_image, $image, 0, 0, 0, 0, 800, 600, $width, $height);
$newImgPath = uniqid() . ".jpg";
// lưu file ảnh vừa resize vào thư mục

imagejpeg($new_image, 'uploads/' . $newImgPath, 100);
var_dump(getimagesize('uploads/' . $newImgPath)); 


?>