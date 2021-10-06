<?php
require_once dirname(__FILE__) . '/../model/playlistLogic.php';

class PlaylistController{
    private $playlistLogic;
    public function __construct()
    {
        $this->playlistLogic = new playlistLogic();
    }

    public function handleRequest(){
        try{
            $action =  isset($_REQUEST['action'])? $_REQUEST['action']: NULL;
            switch($action){
                case "create":
                    $this->collectCreatePlaylist();
                    break;
                case "update":
                  
                    break;
                case "read":
                    $result = $this->collectUserPlaylist();
                    return $result;
                    break;
                case "delete":
                
                    break;
        
                case "add":
                
                    break;
                case "search":
                        $result = $this->collectSearchPlaylist();
                        return $result;
                    break;
            }
        }catch(Exception $e){
            throw $e;
        }
    }

    function collectUserPlaylist() {
        $userID = isset($_SESSION['id'])? $_SESSION['id']: NULL;

        $result = $this->playlistLogic->getPlaylists($userID);
        return $result;
    }

    function collectCreatePlaylist() {
        $playlistTitle = isset($_REQUEST['playlistTitle'])? $_REQUEST["playlistTitle"]: NULL;
        $playlistColor = isset($_REQUEST['playlistColor'])? $_REQUEST["playlistColor"]: NULL;
        $user_id = isset($_SESSION['id'])? $_SESSION['id']: NULL;

        $this->playlistLogic->createPlaylist($user_id, $playlistTitle, $playlistColor);

        header("location: index.php?route=my-library");
    }

    function collectSearchPlaylist() {
        $search = isset($_REQUEST['search'])? $_REQUEST['search']: "";

        $result = $this->playlistLogic->searchPlaylist($search);
        return $result;
    }
}
?>