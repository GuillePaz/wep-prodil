<?php 
interface iControl {
    public function GET();
    public function POST();
}
class Controll {
    function __construct()
    {
        echo "Test";
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


