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
        // biến chứa các tên cột trong câu sql
        $cols = " ";
        // biến chứa các giá trị tương ứng với cột ở trên
        $vals = " ";
        $img = $_FILES['image'];
        $_POST['image'] = null;
        // lưu ảnh
        if($img['size'] > 0){
            $filename = "public/images/products/" . uniqid() . "-" . $img['name'];
            move_uploaded_file($img['tmp_name'], $filename);
            $_POST['image'] = $filename;
        }

        // sinh giá trị cho các cột trong câu sql
        foreach($_POST as $key => $val){
            $cols .= " " . $key. ",";
            $vals .= " '" . $val. "',";
        }
        // loại bỏ dấu "," ở cuối các chuỗi
        $cols = rtrim($cols, ',');
        $vals = rtrim($vals, ',');

        // sinh ra câu lệnh sql
        $sqlQuery = "insert into " . $model->table 
                                 . " ($cols) values ( $vals)";
        // thực thi câu lệnh đc sinh ra ở trên
        Product::rawQuery($sqlQuery);
        // điều hướng về trang chủ
        header('location: ./');
    }
}


?>