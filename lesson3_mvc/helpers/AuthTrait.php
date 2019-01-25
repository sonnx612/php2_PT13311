<?php
trait AuthTrait{

    function checkAuth(){
        if(!isset($_SESSION['auth']) || $_SESSION['auth'] == null){
            header('location: ./login');
            die;
        }

        return $this;
    }

}

?>