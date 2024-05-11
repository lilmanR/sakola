<?php
$link = new PDO("mysql:host=localhost;dbname=db_oopnvc", "root", "");
$result = $link ->query("SELECT * from anggota");

$anggota = array();
while ($row = $result->fetch(PDO::FETCH_ASSOC)){
    $anggota[]=$row;
}

$link = null;
require "view/anggota/list.php";
?>
