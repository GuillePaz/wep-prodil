<?php 
interface iControl {
    public function GET();
    public function POST();
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
}


