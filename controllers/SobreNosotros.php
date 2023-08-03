<?php

include_once("./core/controll.php");

class SobreNosotros extends Controll{
    function __construct()
    {
        parent::__construct();
        $this->RENDER("sobrenosotros");
        
    }
    
    
}