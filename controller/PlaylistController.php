<?php
require_once dirname(__FILE__) . '/../model/PlaylistLogic.php';

class PlaylistController{
    private $PlaylistLogic;
    public function __construct()
    {
        $this->Playlistlogic = new PlaylistLogic();
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

        $this->PlaylistLogic->createPlaylist($_REQUEST['playlistTitle'], $_REQUEST['playlistColor']);
    }

}
?>