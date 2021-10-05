<?php
require_once dirname(__FILE__) . '/../model/songLogic.php';

class controller{
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
        $mp3 = isset($_REQUEST['file'])? $_REQUEST: NULL;
        $this->addFileLocal($mp3, $title);


    }

    function addFileLocal($mp3, $title){
        $newSong = fopen()
    }
}
?>
