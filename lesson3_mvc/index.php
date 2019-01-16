<?php
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";

require_once "./controllers/HomeController.php";
switch($url){
    case "/":
        $ctr = new HomeController();
        echo $ctr->index();
        break;
    case "danh-muc":
        $ctr = new HomeController();
        echo $ctr->danhMuc();
        break;
    default:
        echo "404 not found!";
}


?>