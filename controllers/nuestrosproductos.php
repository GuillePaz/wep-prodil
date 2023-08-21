<?php

use Core\Controll;

class NuestrosProductos extends Controll{
    
    function __construct()
    {
        parent::__construct();
        
    }
    function RENDER(){
        $this->SP_RENDER("productos");
    }
    function procom(){
        $this->SP_RENDER("productos/procom");
    }
    function verigas(){
        $this->SP_RENDER("productos/verigas");
    }
    function construnow(){
        $this->SP_RENDER("productos/construnow");
    }
    function prodilmat(){
        $this->SP_RENDER("productos/prodilmat");
    }
    }
    