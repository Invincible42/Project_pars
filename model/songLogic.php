<?php
require_once dirname(__FILE__) . "/dataHandler.php";

class songLogic {

    public function __construct() {
        $username = fgets(fopen("./model/username.txt", "r"));
        $password = fgets(fopen("./model/password.txt", 'r'));
        $dbasename = "pars";
        $this->Datahandler = new DataHandler($dbasename, $username, $password);
    }

    function createSong($title, $artist,  $creatorID) {
        try{
           $sql = "INSERT INTO song (songName, artist, creatorID) VALUES (?,?,?)";
           return $this->Datahandler->createData($sql, [$title, $artist, $creatorID]);
           
        }catch(Exception $e){
            throw $e;
        }
    }

    function getSongID(){
        try{
            $sql ="SELECT LAST_INSERT_ID() FROM song LIMIT 1";
            return $this->Datahandler->readData($sql, '');

        }catch(Exception $e){
            throw $e;
        }
    }


}

?>