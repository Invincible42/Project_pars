<?php
require_once dirname(__FILE__) . '/../model/userLogic.php';

class controller{
    private $Userlogic;
    public function __construct()
    {
        $this->Userlogic = new userLogic();
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
                case "read":
                    include "./addsong.php";
                    break;
                case "update":
                    include "./myplaylists.php";
                    break;    
            }
        }catch(Exception $e){
            throw $e;
        }
    }
}
?>

