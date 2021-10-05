<?php
require_once dirname(__FILE__) . "/dataHandler.php";

class playlistLogic {

    public function __construct() {
        $username = fgets(fopen("./model/username.txt", "r"));
        $password = fgets(fopen("./model/password.txt", 'r'));
        $dbasename = "pars";
        $this->Datahandler = new DataHandler($dbasename, $username, $password);
    }

    function createPlaylist($title, $color) {
        try{
            $sql = "INSERT INTO playlist (playlistName, playlistColor) VALUES (?, ?)";
            $result = $this->Datahandler->createData($sql, [$title, $color]);
            exit();
        }catch(Exception $e){
            throw $e;
        }
    }

    function searchPlaylist($search) {
        try{
            $sql = "SELECT ID, creatorID, playlistName, playlistColor, created_at FROM playlist WHERE playlistname LIKE %?%'";
            return $this->Datahandler->readDatas($sql);
            exit();
        }catch(Exception $e){
            throw $e;
        }
    }

    // function readAllPlaylists() {
    //     try{
    //         $sql = "SELECT * FROM playlist";
    //         $result = $this->Datahandler->readData();
    //         exit();
    //     }catch(Exception $e){
    //         throw $e;
    //     }
    // }

}

?>