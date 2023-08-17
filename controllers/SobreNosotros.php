<?php

use Core\Controll;

class SobreNosotros extends Controll{
    function __construct()
    {
        parent::__construct();
        
        
    }
    function RENDER(){
        $this->SP_RENDER("sobrenosotros");
    }
    
}