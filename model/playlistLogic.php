<?php
require_once dirname(__FILE__) . "/dataHandler.php";

class playlistLogic {

    public function __construct() {
        $username = fgets(fopen("./model/username.txt", "r"));
        $password = fgets(fopen("./model/password.txt", 'r'));
        $dbasename = "pars";
        $this->Datahandler = new DataHandler($dbasename, $username, $password);
    }

    function createPlaylist($user_id, $title, $color) {
        try{
            $sqlPlayList = "INSERT INTO playlist (creatorID, playlistName, playlistColor) VALUES (?, ?, ?)";
            $resultPlaylist = $this->Datahandler->createData($sqlPlayList, [$user_id, $title, $color]);
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