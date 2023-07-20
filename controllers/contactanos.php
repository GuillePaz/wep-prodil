<?php

include_once("./core/controll.php");

class Contactanos extends Controll{
    
    function __construct()
    {
        parent::__construct();
        $this->RENDER("contactanos");
    }
    
    }
    