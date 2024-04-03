<?php

use Components\Footer;

spl_autoload_register(function ($loadfile){
    $loadfile = str_replace(['/',"\\"],DIRECTORY_SEPARATOR,__DIR__."/".$loadfile);
    include_once $loadfile.".php";
});

function error(){
    include_once("./errors/404.php");
    new Footer;
            die;
            
}