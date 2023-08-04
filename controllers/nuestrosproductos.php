<?php

include_once("./core/controll.php");

class NuestrosProductos extends Controll{
    
    function __construct()
    {
        parent::__construct();
        $this->RENDER("productos");
    }
    
    }
    