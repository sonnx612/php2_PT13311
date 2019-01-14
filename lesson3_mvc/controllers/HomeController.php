<?php
require_once "./models/Product.php";
class HomeController{
    public function index(){
        $products = getAllProducts();
        echo "<pre>";
        var_dump($products);die;
    }

    public function danhMuc(){
        echo "HomeController->danhmuc";
    }
}

?>