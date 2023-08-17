<?php

use Core\Controll;

class NuestrosProductos extends Controll{
    
    function __construct()
    {
        parent::__construct();
        $this->RENDER("productos");
    }
    
    }
    