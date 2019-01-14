<?php
require_once "./models/Db.php";
function getAllProducts($col = null, $oper = '=', $value = null){
    $sqlQuery = "select * from products";
    if($col != null){
        $sqlQuery .= " where $col $oper $value";
    }

    $dataList = getAll($sqlQuery);
    return $dataList;

}

?>