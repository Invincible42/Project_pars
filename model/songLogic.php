<?php
require_once dirname(__FILE__) . "/dataHandler.php";

class songLogic {

    public function __construct() {
        $username = fgets(fopen("./model/username.txt", "r"));
        $password = fgets(fopen("./model/password.txt", 'r'));
        $dbasename = "pars";
        $this->Datahandler = new DataHandler($dbasename, $username, $password);
    }

    function createSong($user_id, $title) {
        try{
           
            exit();
        }catch(Exception $e){
            throw $e;
        }
    }


}

?>