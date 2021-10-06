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
                case "read":
                   
                    break;
                case "delete":
                
                    break;    
            }
        }catch(Exception $e){
            throw $e;
        }
    }

    function createSong(){
        $title = isset($_REQUEST['title'])? $_REQUEST['title']: NULL;
        $artist = isset($_REQUEST['artist'])? $_REQUEST['artist']: NULL;
        $creatorID= isset($_SESSION['id'])? $_SESSION['id']: NULL;
        $this->songlogic->createSong($title, $artist, $creatorID);
        $this->songLogic->getSongID();

        $this->addFileLocal($SongID);


    }

    function addFileLocal($songID){
        try{
            move_uploaded_file($_FILES['file']['tmp_name'], "./music/".$songID);
        } catch(Exception $e){
            throw $e;
        }
    }
}
?>
