<?php
require_once './models/Product.php';
require_once './models/Category.php';
class ProductController
{
    public function remove(){
        $id = $_GET['id'];
        Product::delete($id);

        header('location: ./');
    }   

    public function addForm(){
        global $baseUrl;
        $cates = Category::where('id', '<>', 0)->get();
        include_once './views/products/addForm.php';
    }

    public function saveaAdd(){
        $model = new Product();
        $cols = " ";
        $vals = " ";
        $img = $_FILES['image'];
        $_POST['image'] = null;
        if($img['size'] > 0){
            $filename = "public/images/products/" . uniqid() . "-" . $img['name'];
            move_uploaded_file($img['tmp_name'], $filename);
            $_POST['image'] = $filename;
        }

        foreach($_POST as $key => $val){
            $cols .= " " . $key. ",";
            $vals .= " '" . $val. "',";
        }
        $cols = rtrim($cols, ',');
        $vals = rtrim($vals, ',');
        
        $sqlQuery = "insert into " . $model->table 
                                 . " ($cols) values ( $vals)";
        // var_dump($sqlQuery);die;
        Product::rawQuery($sqlQuery);
        header('location: ./');
    }
}


?>