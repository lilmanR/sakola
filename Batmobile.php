<?php
class Batmobile {
    protected $driver;
    public function __construct(){
        $this->driver = new Batman();
    }
    public function GetDriver(){
        return $this->driver;
    }
}

class Batman {
    public function Name($name){
        return $name;
    }
}
$batmobile = new Batmobile();
echo $batmobile->GetDriver()->Name("Batman manusia kelelawar");