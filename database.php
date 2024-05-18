<?php
class Database {
    protected $host = "localhost";
    protected $dbname = "perpustakaan";
    protected $user = "root";
    protected $password = "";

    public function getConnection (){
        return new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->user, $this->password);
    }
}
?>