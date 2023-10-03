<?php 
namespace Core;

interface iControl {
    public function POST();
    public function RENDER();
    
    
}
class Controll implements iControl {
    public $parameters;
    function __construct($p = null)
    {
        $this->parameters = $p;
/*
        if(!empty($_GET)){
            $this->GET("");
        }
        else if (!empty($_POST)){
            $this->POST();
        }*/

    }

    function GET($id){

    }

    function POST(){
        
    }
    function SP_RENDER($f,$obj = null){

        include("./view/".$f.".php");
    }
    function RENDER(){

    }
    
}


