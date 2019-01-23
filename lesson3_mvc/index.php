<?php
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";
$baseUrl = "http://localhost/php2_pt13311/lesson3_mvc/";
require_once "./controllers/HomeController.php";
require_once "./controllers/ProductController.php";
switch($url){
    case "/":
        $ctr = new HomeController();
        echo $ctr->index();
        break;
    case "danh-muc":
        $ctr = new HomeController();
        echo $ctr->danhMuc();
        break;
    case "remove":
        $ctr = new ProductController();
        echo $ctr->remove();
        break;
    case "add-product":
        $ctr = new ProductController();
        echo $ctr->addForm();
        break;
    case "edit-product":
        $ctr = new ProductController();
        echo $ctr->editForm();
        break;
    case "save-add-product":
        $ctr = new ProductController();
        echo $ctr->saveaAdd();
        break;
    case "save-edit-product":
        $ctr = new ProductController();
        echo $ctr->saveEdit();
        break;
    default:
        echo "404 not found!";
}


?>