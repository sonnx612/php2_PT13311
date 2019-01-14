<?php
require_once "./models/Product.php";
require_once "./models/Category.php";
class HomeController{
    public function index(){
        $product = Product::rawQuery("select 
                                                p.*,
                                                c.cate_name as cate_name
                                    from products p
                                    join categories c
                                        on p.cate_id = c.id
                                    ");
        echo "<pre>";
        var_dump($product);die;
    }

    public function danhMuc(){
        echo "HomeController->danhmuc";
    }
}

?>