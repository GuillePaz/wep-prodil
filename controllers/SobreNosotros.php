<?php

use Core\Controll;

class SobreNosotros extends Controll{
    function __construct()
    {
        parent::__construct();
        $this->RENDER("sobrenosotros");
        
    }
    
    
}