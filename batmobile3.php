<?php
class Batmobile{
    protected $sopir;
    public function __construct($sopir){
        $this ->sopir=$sopir;
    }
    public function getSopir(){
        return $this->sopir;
    }
}

interface Sopir{
    public function nama($nama);
}
class Batman implements Sopir {
    public function nama($nama){
        return "Halo saya ".$nama."<br>";
    }
}
class Android implements Sopir{
    public function nama($nama){
        return "Beep..beep..saya..".$nama."<br>";
    }
}
$batman = new Batman();
$Batmobile = new Batmobile($batman);
echo $Batmobile->getSopir()->nama("Sopir adalah batman");

$android = new Android();
$android = new $Batmobile($android);
echo $Batmobile->getSopir()->nama("Android 14 is upside down cake");