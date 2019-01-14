<?php
require_once "./models/Product.php";
require_once "./models/Category.php";
class HomeController{
    public function index(){
        $product = Product::where('id', '<', "10")->get();
        echo "<pre>";
        var_dump($product);die;
    }

    public function danhMuc(){
        echo "HomeController->danhmuc";
    }
}

?>