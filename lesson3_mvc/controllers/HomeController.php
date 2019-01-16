<?php
require_once "./models/Product.php";
require_once "./models/Category.php";
class HomeController{
    public function index(){
        $product = Product::where('id', '<>', 0)->get();
        // $product = Product::delete(10);
        // echo "<pre>";
        // var_dump($product);die;
        include_once './views/homepage.php';
    }

    public function danhMuc(){
        echo "HomeController->danhmuc";
    }
}

?>