<?php

require_once dirname(__FILE__) . '/../model/userLogic.php';

class UserController {
    private $Userlogic;
    public function __construct()
    {
        $this->Userlogic = new userLogic();
    }

    public function handleRequest(){
        try{
            $action =  isset($_REQUEST['action'])? $_REQUEST['action']: NULL;
            switch($action){
                case "create":
                    $this->collectCreateUser();
                    break;
                case "read":
                    $this->collectReadUser($id);
                    break;
                case "update":
                    $this->collectUpdateUser();
                    break;
                case "delete":
                    $this->collectDeleteUser($id);
                    break;
                default:
                    echo "I didn't get far did I?";
                    break;
            }
        }catch(Exception $e){
            throw $e;
        }
    }

    public function collectCreateUser() {
        if(!isset($_REQUEST["username"])) throw new Exception();
        if(!isset($_REQUEST["password"])) throw new Exception();
        $this->Userlogic->createUser($_REQUEST["username"], $_REQUEST["password"]);
    }

    public function collectReadUser($id) {
        $user = $this->Userlogic->readUser($id);
        return $user;
    }

    public function collectUpdateUser($username, $password) {
        $user = $this->Userlogic->readUser($username, $password);
        return $user;
    }

    public function collectDeleteUser($id) {
        $this->Userlogic->deleteUser($id);
    }
}
?>