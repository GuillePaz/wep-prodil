<?php

use Core\Controll;

class NuestrosProductos extends Controll{
    
    function __construct($p)
    {
        parent::__construct($p);
        
    }
    function RENDER(){
      
        if($this->parameters!=null){
            $this->SP_RENDER("productos/{$this->parameters[0]}");
        }
        else 
        {
            $this->SP_RENDER("productos");
        }
        
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
    