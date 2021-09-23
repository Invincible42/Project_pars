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
                case "add":
                    
                    break;
                case "update":
                  
                    break;
                case "read":
                   
                    break;
                case "delete":
                
                    break;    
            }
        }catch(Exception $e){
            throw $e;
        }
    }
}
?>