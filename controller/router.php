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
                    include "./home.php";
                    break;
                case "search":
                    include "./search.php";
                    break;
                case "my-settings":
                    include "./my-settings.php";
                    break;
                case "my-library":
                    include "./my-library.php";
                    break;    
                case "account":
                    include "./account.php";
                break;    
            }
        }catch(Exception $e){
            throw $e;
        }
    }
}
?>

