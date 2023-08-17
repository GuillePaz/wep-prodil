<?php 
namespace Core;

interface iControl {
    public function GET();
    public function POST();
    public function RENDER();
    
}
class Controll implements iControl {
    function __construct()
    {
        

        if(!empty($_GET)){
            $this->GET();
        }
        else if (!empty($_POST)){
            $this->POST();
        }

    }

    function GET(){

    }

    function POST(){
        
    }
    function SP_RENDER($f){
        $file = "./view/".$f.".php";
        include($file);
    }
    function RENDER(){

    }
}


