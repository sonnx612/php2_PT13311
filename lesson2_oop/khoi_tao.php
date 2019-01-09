<?php
class Product{
    const TABLE_NAME = "products";
    var $name;
    var $sku;
    var $color;
    function __construct($name = null, $sku = null, $color = null){
        $this->name = $name;
        $this->sku = $sku;
        $this->color = $color;
        $this->conn = "tao ket noi den db";
        // $this->conn = new PDO("mysql:host=127.0.0.1;dbname=lesson2;charset=utf8", "root", "123456");
    }

    function getInfor(){
        echo "=====================<br>";
        echo "Ten sp: " . $this->name . "<br>";
        echo "Ma KSKU: " . $this->sku . "<br>";
        echo "Mau sac: " . $this->color . "<br>";
    }
}

$baby = new Product('tivi', 'TUL123734', 'den');
$baby->getInfor();
// var_dump($baby);
// echo "<br>";
$baby2 = new Product('tu lanh', 'TUL123734', 'Xam');
$baby2->getInfor();
// var_dump($baby2);

?>