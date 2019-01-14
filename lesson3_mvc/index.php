<?php
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";

switch($url){
    case "/":
        require_once "./controllers/HomeController.php";
        $ctr = new HomeController();
        echo $ctr->index();
        break;
    case "danh-muc":
        require_once "./controllers/HomeController.php";
        $ctr = new HomeController();
        echo $ctr->danhMuc();
        break;
    default:
        echo "404 not found!";
}


?>