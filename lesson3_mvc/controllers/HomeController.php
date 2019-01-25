<?php
require_once "./models/Product.php";
require_once "./models/Category.php";
require_once "./models/User.php";
class HomeController{
    public function index(){
        global $baseUrl;
        $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : null;

        if($keyword != null){
            $product = Product::where('name', 'like', "%$keyword%")->get();    
        }else{
            $product = Product::where('id', '<>', 0)->get();
        }
        
        // $product = Product::delete(10);
        // echo "<pre>";
        // var_dump($product);die;
        include_once './views/homepage.php';
    }

    public function loginForm(){
        global $baseUrl;
        include_once "./views/auth/login.php";
    }

    public function postLogin(){
        extract($_POST);
        $user = User::where('email', '=', $email)->first();
        if($user != null && 
            password_verify($password, $user->password)){
                $_SESSION['auth'] = [
                    "id" => $user->id,
                    "name" => $user->name,
                    "email" => $user->email,
                    "role" => $user->role
                ];
                header('location: ./');die;
        }
        header('location: ./login?msg=Sai tài khoản/mật khẩu');die;
    }   
}

?>