<?php

class DataHandler{
    private $dbasename;
    private $password;
    private $username;
    private $servername;

    function __construct($dbasename, $username, $password ){
        $this->dbasename= $dbasename;
        $this->password= $password;
        $this->username= $username;
        $this->servername= "localhost";
        try{
            $this->handle = new PDO("mysql:host=".$this->servername.";dbname=". $this->dbasename, $this->username,$this->password);
            $this->handle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
       
    }

    function createData($sqlCreate, $args) {
        $stmt = $this->handle->prepare($sqlCreate);
        return $stmt->execute($args);
    }

    function readData($sqlRead, $id) {
        $stmt = $this->handle->prepare($sqlRead);
        $stmt->execute([$id]);
        $result= $stmt->fetchAll(PDO::FETCH_ASSOC);
       

        return $result;
    }
    function readDatas($sqlRead) {
        $stmt = $this->handle->prepare($sqlRead);
        $stmt->execute();
        $result= $stmt->fetchAll(PDO::FETCH_ASSOC);
       

        return $result;
    }

    function updateData($sqlUpdate, $arguments) {
        $stmt = $this->handle->prepare($sqlUpdate);
        return $stmt->execute($arguments);
        
    }

    function deleteData($sqlDelete) {
        $stmt = $this->handle->prepare($sqlDelete);
        return $stmt->execute();
       
    }
    function __destruct(){
        $this->handle= null;
    }
}
?>