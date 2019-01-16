<?php
require_once './models/Product.php';
class ProductController
{
    public function remove(){
        $id = $_GET['id'];
        Product::delete($id);

        header('location: ./');
    }   
}


?>