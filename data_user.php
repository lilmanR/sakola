<?php
include_once "database.php";
class User{
    protected $db;

    public function __construct(Database $db){
        $this->db = $db;
    }
    public function getUsers() {
        $connection = $this->db->getConnection();
        $query = "SELECT * FROM user";
        $users = $connection->query($query)->fectAll(PDO::FETCH_ASSOC);
        return $users;
    }
}

$database = new Database();
$user = new User($database);
$users = $user->getUsers();

foreach ($users as $user) {
    echo "ID : " . $user['id_user']. ", Username : " . $user['username'] . ", Email  : " . $user['email'] . "<br>";
}
?>