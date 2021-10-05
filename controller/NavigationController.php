<?php


class NavigationController{
    public function __construct()
    {
        require_once "./controller/UserController.php";
        require_once "./controller/PlaylistController.php";
    }

    public function handleRequest(){
        try{
            $route =  isset($_REQUEST['route'])? $_REQUEST['route']: NULL;
            switch($route){
                case "home":
                    include "./view/home.php";
                    break;
                case "add-music":
                    if(isset($_SESSION['loggedin'])){
                        if($_SESSION['loggedin'] == true){
                            include "./view/addsong.php";
                        }
                    }else {
                        header("location: index.php?route=login");
                    }
                    break;
                case "create-playlist":
                    if(isset($_SESSION['loggedin'])){
                        if($_SESSION['loggedin'] == true){
                            $playlistLogic = new PlaylistController();
                            $playlistLogic->handleRequest();
                            include "./view/createplaylist.php";
                        }
                    }else {
                        header("location: index.php?route=login");
                    }
                    break;
                case "my-library":
                    if(isset($_SESSION['loggedin'])){
                        if($_SESSION['loggedin'] == true){
                            // $playlistLogic = new PlaylistController();
                            // $playlistLogic->collectReadAllPlaylists();
                            include "./view/my-library.php";
                        }
                    }else {
                        header("location: index.php?route=login");
                    }
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
                    if(isset($_SESSION['loggedin'])){
                        if($_SESSION['loggedin'] == true){
                            session_destroy();
                            session_unset();
                            unset($_SESSION["loggedin"]);
                            header("location: index.php?route=home");
                        }
                    }else{
                        $userLogic = new UserController();
                        $userLogic->handleRequest();
                        include "./view/login.php";
                    }
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

