<?php


class router{
    public function __construct()
    {
        
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
                case "my-settings":
                    include "./view/my-settings.php";
                    break;
                case "my-library":
                    include "./view/my-library.php";
                    break;    
                case "account":
                    include "./view/account.php";
                break;    
                case "playlist":
                    include "./view/playlist.php";
                break;
            }
        }catch(Exception $e){
            throw $e;
        }
    }
}
?>

