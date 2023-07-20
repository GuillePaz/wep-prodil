<?php 
interface iControl {
    public function GET();
    public function POST();
    public function RENDER($f);
}
class Controll implements iControl {
    function __construct()
    {
        

        if(!empty($_GET)){
            $this->GET();
        }
        else if (!empty($_POST)){

        }

    }

    function GET(){

    }

    function POST(){
        
    }
    function RENDER($f){
        $file = "./view/".$f.".php";
        include($file);
    }
}


