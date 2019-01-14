<?php
class BaseModel 
{
    // tao ket noi den database
    function __construct(){
        $this->connect = new PDO("mysql:host=127.0.0.1;dbname=kaopiz;charset=utf8",
                            "root", "123456");
    }

    public static function where($col, $operation, $val){
        $model = new static();
        $model->queryBuilder = "select * from " . $model->table
                                    . " where $col $operation '$val'";
        return $model;
    }

    public static function all(){
        $model = new static();
        $model->queryBuilder = "select * from " . $model->table;
        return $model->get();
    }

    public function andWhere($col, $operation, $val){
        $this->queryBuilder .= " and $col $operation $val";
        return $this;
    }

    public function orWhere($col, $operation, $val){
        $this->queryBuilder .= " or $col $operation $val";
        return $this;
    }

    public function delete(){
        $this->queryBuilder = "delete " . $this->table 
                                . " where id = " . $this->id;
        $stmt = $this->connect->prepare($this->queryBuilder);
        $stmt->execute();
        return true;
    }

    public function get(){
        $stmt = $this->connect->prepare($this->queryBuilder);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public static function rawQuery($sqlQuery){
        $model = new static();
        $stmt = $model->connect->prepare($sqlQuery);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}



// // thuc thi sql va lay het du lieu tra ve
// function getAll($sqlQuery){
//     $connect = getConnect();
//     $stmt = $connect->prepare($sqlQuery);
//     $stmt->execute();
//     return $stmt->fetchAll();
// }

// // thuc thi sql va lay du lieu dau tien tra ve
// function getOne($sqlQuery){
//     $connect = getConnect();
//     $stmt = $connect->prepare($sqlQuery);
//     $stmt->execute();
//     return $stmt->fetch();
// }

?>