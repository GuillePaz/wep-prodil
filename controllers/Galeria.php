<?php

use Core\Controll;

class Galeria extends Controll
{
    private $page;
    private $obj;
    function __construct($p)
    {
        parent::__construct($p);
        var_dump($this->parameters);
        if($this->parameters[1] == "") $this->page = "galeria";
        elseif ($this->parameters[1] == "post") {
            $this->page = "galeria";
        } elseif (is_numeric($this->parameters[1])) {
        } else error();
    }
    
    function RENDER()
    {
        $this->SP_RENDER($this->page,$this->obj);
    }
}
