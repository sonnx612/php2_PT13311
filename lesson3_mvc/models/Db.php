<?php
// tao ket noi den database
function getConnect(){
    $connect = new PDO("mysql:host=127.0.0.1;dbname=kaopiz;charset=utf8",
                        "root", "123456");

    return $connect;
}

// thuc thi sql va lay het du lieu tra ve
function getAll($sqlQuery){
    $connect = getConnect();
    $stmt = $connect->prepare($sqlQuery);
    $stmt->execute();
    return $stmt->fetchAll();
}

// thuc thi sql va lay du lieu dau tien tra ve
function getOne($sqlQuery){
    $connect = getConnect();
    $stmt = $connect->prepare($sqlQuery);
    $stmt->execute();
    return $stmt->fetch();
}

?>