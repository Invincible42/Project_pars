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
            $searchValue = "%" . $search . "%";
            $sql = "SELECT playlist.playlistName, playlist.playlistColor, users.username FROM playlist INNER JOIN users WHERE playlist.creatorID = users.ID AND playlistName LIKE ?";
            return $this->Datahandler->readDatas($sql, $searchValue);
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