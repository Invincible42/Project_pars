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
                    // $this->collectReadAllPlaylists();
                    break;
                case "delete":
                
                    break;
        
                case "add":
                
                    break;
            }
        }catch(Exception $e){
            throw $e;
        }
    }

    function collectCreatePlaylist() {
        if(!isset($_REQUEST['playlistTitle'])) throw new Exception();
        if(!isset($_REQUEST['playlistColor'])) throw new Exception();

        $this->playlistLogic->createPlaylist($_REQUEST['playlistTitle'], $_REQUEST['playlistColor']);
    }

    // function collectReadAllPlaylists() {
    //     $this->playlistLogic->readAllPlaylists();
    // }

}
?>