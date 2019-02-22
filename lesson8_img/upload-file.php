<?php
$avatar = $_FILES['avatar'];

// check có up ảnh lên không 
if($avatar['size'] > 0){
    $filename = uniqid() . "-" . $avatar['name'];
    move_uploaded_file($avatar['tmp_name'], 'uploads/' . $filename);
    
}


?>