<?php

use Core\Controll;
use Module\Post;
new Post;
class Galeria extends Controll
{
    private $page;
    private $obj;
    function __construct($p)
    {
        parent::__construct($p);
        
        if(empty($this->parameters[0])) $this->page = "galeria";
        elseif ($this->parameters[0] == "post") {
            isset($_GET["id"]) && !empty($_GET["id"]) ?: error();
        
            $this->POSTS($_GET["id"]);
        } elseif (is_numeric($this->parameters[0])) {
            $this->obj=$this->parameters[0];
            $this->page = "galeria";
        } else error();
    }
    
    function RENDER()
    {
        $this->SP_RENDER($this->page,$this->obj);
    }
    function POSTS($id){
        $this->page = "galeria";
    }
    function pagination($number){
        $this->page = "galeria";
    }
}
