<?php

namespace Core;

class Uri
{
    function __construct()
    {
        $uri = "";
        
        if (isset($_GET["weawzahzcurqvznyqhdxtdiethizdh"])) { // get de la variable en .htaccess
            $uri = explode("/", $_GET["weawzahzcurqvznyqhdxtdiethizdh"]);
            unset($_GET["weawzahzcurqvznyqhdxtdiethizdh"]);
        }

        $page = $uri[0] ?? null;
        if(isset($uri[0])) {
            unset($uri[0]);
            $a =array();
            foreach($uri as $u){
                $a[] = $u; 
            }
            $uri = $a;
        }
        
        $this->controll($page,$uri);
    }

    function controll(string $control_file = null, $parameters)
    {
        $control_file = str_replace("-", "", $control_file);
        if (!empty($control_file) && file_exists("./controllers/$control_file.php")) {
            include_once("./controllers/$control_file.php");

            $page = new $control_file($parameters);
            $page->RENDER();
            
            
        } else if (empty($control_file)) {
            include_once("./view/home.php");
        } else {
            error();
        }
    }
}
