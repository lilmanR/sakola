<?php
class Produk {

}

$televisi = new Produk();
$mesincuci = new Produk();
$speaker = new Produk();

var_dump($televisi); //object(Produk)#1 (0) {}
echo "<br>";
var_dump($mesincuci); //object(Produk)#2 (0) {}
echo "<br>";
var_dump($speaker); //object(Produk)#3 (0) {}