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
                case "delete":
                    $this->collectDeleteUser($id);
                    break;
                case "login":
                    $this->collectLoginUser();
                    break;
            }
        }catch(Exception $e){
            throw $e;
        }
    }

    public function collectCreateUser() {
        if(!isset($_REQUEST["username"])) throw new Exception();
        if(!isset($_REQUEST["password"])) throw new Exception();
        if(!isset($_REQUEST["re_enter_password"])) throw new Exception();

        $hashed_password = password_hash($_REQUEST["password"], PASSWORD_DEFAULT);

        if($_REQUEST["password"] === $_REQUEST["re_enter_password"]) {
            $this->Userlogic->createUser($_REQUEST["username"], $hashed_password);
        }
    }

    public function collectReadUser($id) {
        $user = $this->Userlogic->readUser($id);
        return $user;
    }

    public function collectDeleteUser($id) {
        $this->Userlogic->deleteUser($id);
    }

    public function collectLoginUser() {
        if(!isset($_REQUEST["username"])) throw new Exception();
        if(!isset($_REQUEST["password"])) throw new Exception();
        $this->Userlogic->loginUser();
    }
}
?>