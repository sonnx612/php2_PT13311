<?php
require_once './models/Product.php';
require_once './models/Category.php';
require_once './helpers/AuthTrait.php';
class ProductController
{
    use AuthTrait;
    
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

    public function editForm(){
        global $baseUrl;
        // Lấy id trên đường dẫn
        $id = $_GET['id'];

        // Lấy danh sách danh mục
        $cates = Category::where('id', '<>', 0)->get();

        // Lấy sản phẩm dựa vào id trên đường dẫn
        $model = Product::where('id', '=', $id)->first();

        // Nếu không lấy được thông tin sản phẩm
        // thì điều hướng về trang chủ
        if($model == null){
            header('location: ./');
            die;
        }

        // Hiển thị giao diện
        include_once './views/products/editForm.php';
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

    public function saveEdit(){
        $model = Product::where('id', '=', $_POST['id'])->first();
        if($model == null){
            header('location: ./');
            die;
        }

        // biến chứa các tên cột trong câu sql
        $cols = " ";
        $img = $_FILES['image'];
        $_POST['image'] = $model->image;
        // lưu ảnh
        if($img['size'] > 0){
            $filename = "public/images/products/" . uniqid() . "-" . $img['name'];
            move_uploaded_file($img['tmp_name'], $filename);
            $_POST['image'] = $filename;
        }

        // sinh giá trị cho các cột trong câu sql
        foreach($_POST as $key => $val){
            if($key == 'id'){
                continue;
            }
            $cols .= " " . $key. " = '$val',";
        }
        // loại bỏ dấu "," ở cuối các chuỗi
        $cols = rtrim($cols, ',');

        // sinh ra câu lệnh sql
        $sqlQuery = "update " . $model->table 
                    . " set $cols "
                    . " where id = " . $model->id;
        // thực thi câu lệnh đc sinh ra ở trên
        Product::rawQuery($sqlQuery);
        // điều hướng về trang chủ
        header('location: ./');
    }
}


?>