<?php
class Batmobile2 {
    protected $sopir;
    public function __construct($sopir){
        $this->sopir=$sopir;
    }
    public function getSopir(){
        return $this->sopir;
    }
}
class Batman{
    public function nama($nama){
        return $nama;
    }
}
$batman = new Batman();
$batmobile = new Batmobile($batman);
echo $batmobile->getSopir()->nama("Sopir adalah Batman");