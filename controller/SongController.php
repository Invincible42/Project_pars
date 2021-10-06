<?php
require_once dirname(__FILE__) . '/../model/songLogic.php';

class SongController{
    private $songlogic;
    public function __construct()
    {
        $this->songlogic = new songLogic();
    }

    public function handleRequest(){
        try{
            $action =  isset($_REQUEST['action'])? $_REQUEST['action']: NULL;
            switch($action){
                case "create":
                    $this->createSong();
                    break;
                case "update":
                  
                    break;
                case "read-song":
                   
                    break;
                case "delete":
                
                    break;    
            }
        }catch(Exception $e){
            throw $e;
        }
    }

    function createSong(){
        $title = isset($_REQUEST['songtitle'])? $_REQUEST['songtitle']: NULL;
        $artist = isset($_REQUEST['artist'])? $_REQUEST['artist']: NULL;
        $creatorID= isset($_SESSION['id'])? $_SESSION['id']: NULL;
        
        $this->songlogic->createSong($title, $artist, $creatorID);
        $songID = $this->songlogic->getSongID();

        $this->addFileLocal($songID);


    }

    function addFileLocal($songID){
        try{
            move_uploaded_file($_FILES['file']['tmp_name'], "./music/".$songID[0]['LAST_INSERT_ID()'].".mp3");
        } catch(Exception $e){
            throw $e;
        }
    }
}
?>
