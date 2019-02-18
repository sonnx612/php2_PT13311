<?php
// có đc phép tạo ra 2 hàm cùng tên hay không ? => không
// có được phép tạo ra 2 class cùng tên hay không ? => không 
require './vendor/autoload.php';
use App\Models\User;
use App\Models\Product;

$u2 = new User();
$u3 = new Product();
var_dump($u2, $u3);

?>