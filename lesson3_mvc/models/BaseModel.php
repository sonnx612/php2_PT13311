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

    public static function find($id){
        $model = new static();
        $model->queryBuilder = "select * from " . $model->table
                                    . " where id = '$id'";
        return $model->first();
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

    public static function delete($id){
        $model = new static();
        $model->queryBuilder = "delete from " . $model->table 
                                . " where id = " . $id;
        $stmt = $model->connect->prepare($model->queryBuilder);
        $stmt->execute();
        return true;
    }

    public function get(){
        $stmt = $this->connect->prepare($this->queryBuilder);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function first(){
        $stmt = $this->connect->prepare($this->queryBuilder);
        $stmt->execute();
        return $stmt->fetch();
    }

    public static function rawQuery($sqlQuery){
        $model = new static();
        $stmt = $model->connect->prepare($sqlQuery);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

?>