<?php
require_once dirname(__FILE__) . "/dataHandler.php";
    class userLogic{
        public function __construct(){
            $username = fgets(fopen("../model/username.txt", "r"));
            $password = fgets(fopen("../model/password.txt", 'r'));
            $dbasename = "pars";
            $this->Datahandler = new DataHandler($dbasename, $username, $password);
        }

        public function createUser($firstname, $lastname, $email ,$password){
            try{
                $sql= "insert into Users (firstname, lastname, email, password)";
                $result = $this->Datahandler->createData($sql, [$firstname, $lastname, $email , $password]);
            }catch(Exception $e){
                throw $e;
            }
        }
    }
?>