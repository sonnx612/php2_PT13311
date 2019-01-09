<?php
class Product{
    const TABLE_NAME = 'products';
    function __construct(){
        $this->connect = new PDO("mysql:host=127.0.0.1;dbname=kaopiz;charset=utf8", 
                                        "root", 
                                        "123456");
    }

    static function where($col, $oper, $val){
        $model = new static();
        $model->queryBuilder = "select * from " 
                                    . static::TABLE_NAME
                                    . " where $col $oper '$val'"; 
        return $model;
    }

    function get(){
        $stmt = $this->connect->prepare($this->queryBuilder);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

$products = Product::where('name' , 'like', "%Weber%")->get();
echo "<pre>";
var_dump($products);



?>