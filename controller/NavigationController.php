<?php


class NavigationController{
    public function __construct()
    {
        require_once "./controller/UserController.php";
    }

    public function handleRequest(){
        try{
            $route =  isset($_REQUEST['route'])? $_REQUEST['route']: NULL;
            switch($route){
                case "home":
                    include "./view/home.php";
                    break;
                case "add-music":
                    include "./view/addsong.php";
                    break;
                case "create-playlist":
                    include "./view/createplaylist.php";
                    break;
                case "my-library":
                    include "./view/my-library.php";
                    break;    
                case "account":
                    $userLogics = new UserController();
                    $userLogics->handleRequest();
                    include "./view/account.php";
                break;    
                case "playlist":
                    include "./view/playlist.php";
                break;
                case "registration":
                    $userLogics = new UserController();
                    $userLogics->handleRequest();
                    include "./view/registration.php";
                break;
                case "login":
                    $userLogic = new UserController();
                    $userLogic->handleRequest();
                    include "./view/login.php";
                    break;
                default:
                include "./view/home.php";
                break;
                
            }
        }catch(Exception $e){
            throw $e;
        }
    }
}
?>

