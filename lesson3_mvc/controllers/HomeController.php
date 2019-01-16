<?php
require_once "./models/Product.php";
require_once "./models/Category.php";
class HomeController{
    public function index(){
        $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : null;

        if($keyword != null){
            $product = Product::where('name', 'like', "%$keyword%")->get();    
        }else{
            $product = Product::where('id', '<>', 0)->get();
        }
        
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