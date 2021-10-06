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

            $playlistID = $this->getPlaylistID();
            var_dump($playlistID);
            $sqlPlayListToUser = "INSERT INTO playlist_to_user (playlistID, userID) VALUES (?, ?)";
            $resultPlaylistToUser = $this->Datahandler->createData($sqlPlayListToUser, [$playlistID[0]['LAST_INSERT_ID()'], $user_id]);
            return;
        }catch(Exception $e){
            throw $e;
        }
    }

    function getPlaylistID() {
        try {
            $sql ="SELECT LAST_INSERT_ID() FROM playlist LIMIT 1";
            $result = $this->Datahandler->readDatas($sql, [""]);
            return $result;
        }catch(Exception $e){
            throw $e;
        }
    }

    function searchPlaylist($search) {
        try{
            $searchValue = "%" . $search . "%";
            $sql = "SELECT * FROM playlist INNER JOIN users WHERE playlist.creatorID = users.ID AND playlistName LIKE ?";
            return $this->Datahandler->readData($sql, $searchValue);
        }catch(Exception $e){
            throw $e;
        }
    }

    function getPlaylists($user_id) {
        try {
            $sql = "SELECT * FROM playlist_to_user INNER JOIN playlist WHERE playlist_to_user.userID = ? GROUP BY playlist.ID";
            $result = $this->Datahandler->readDatas($sql, [$user_id]);
            return $result;
        } catch(Exception $e){
            throw $e;
        }
    }

}

?>