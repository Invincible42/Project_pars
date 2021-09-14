<?php
require_once dirname(__FILE__) . "/dataHandler.php";
    class userLogic{
        public function __construct(){
            $username = fopen("./username.txt", "r") or die("Unable to open file!");
            $password = fopen("./password.txt", 'r') or die ("Unable to open file!");
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