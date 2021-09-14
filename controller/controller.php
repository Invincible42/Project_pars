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
            $action =  isset($_REQUEST)? $_REQUEST: NULL;
            switch($action){
                case
            }
        }
    }
}
?>
