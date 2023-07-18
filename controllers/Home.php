<?php

include_once("./core/controll.php");

class Home extends Controll{
    
    public function piso(){
        echo "Piso";
    }
    public function GET(){
        echo $_GET["a"];
    }
}