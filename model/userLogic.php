<?php
require_once dirname(__FILE__) . "/dataHandler.php";
class userLogic{
    public function __construct() {
        $username = fgets(fopen("./model/username.txt", "r"));
        $password = fgets(fopen("./model/password.txt", 'r'));
        $dbasename = "pars";
        $this->Datahandler = new DataHandler($dbasename, $username, $password);
    }

    public function createUser($username, $password, $repassword) {
        try{
            if ($password === $repassword) {
                $hashed = password_hash($password, PASSWORD_DEFAULT);
                $sql= "INSERT INTO users (username, password) VALUES (?, ?)";
                $result = $this->Datahandler->createData($sql, [$username, $hashed]);
                http_response_code(302);
                header("Location: ?route=login");
                return $result;
            }
            
        }catch(Exception $e){
            throw $e;
        }
    }

    public function deleteUser($id) {
        try {
            $sql = "DELETE FROM users WHERE ID = ?";
            $result = $this->Datahandler->deleteData($sql, $id);
            return $result;
        }catch(Exception $e){
            throw $e;
        }
    }

    public function readUser($id) {
        try {
            $sql = "SELECT * FROM users WHERE ID = ?";
            $result = $this->Datahandler->readData($sql, $id);
            return $result;
        }catch(Exception $e){
            throw $e;
        }
    }

    public function loginUser($username, $password) {
        try {
            $sql = "SELECT * FROM users WHERE username = ?";
            $result = $this->Datahandler->readData($sql, $username);
            if(password_verify($password, $result['password'])) {
                $_SESSION['loggedin'] = true;
            } else {
                $_SESSION['loggedin'] = false;
            }
        }catch(Exception $e){
            throw $e;
        }
    }
}
?>