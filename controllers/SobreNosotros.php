<?php

include_once("./core/controll.php");

class SobreNosotros extends Controll{
    function __construct()
    {
        parent::__construct();
        echo "sobre ";
    }
    public function piso(){
        echo "Piso";
    }
    public function GET(){
        echo $_GET["a"];
    }
}