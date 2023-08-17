<?php 

spl_autoload_register(function ($loadfile){
    $loadfile = str_replace(['/',"\\"],DIRECTORY_SEPARATOR,__DIR__."/".$loadfile);
    include_once $loadfile.".php";
});

