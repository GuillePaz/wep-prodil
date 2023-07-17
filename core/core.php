<?php 


class Uri {
    function __construct()
    {
        $uri = explode("/",$_GET["url"]);
        $page = $uri[0];
        $subpage = $uri[1];
        

    }

    function controll(string $control_file, string $subpage){
        include_once("./controllers/$control_file.php");

       
    }
}
