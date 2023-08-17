<?php 
namespace Core;

class Uri {
    function __construct()
    {   
        $uri = "";
        if(isset($_GET["weawzahzcurqvznyqhdxtdiethizdh"])){ // get de la variable en .htaccess
            $uri = explode("/",$_GET["weawzahzcurqvznyqhdxtdiethizdh"]);
            unset($_GET["weawzahzcurqvznyqhdxtdiethizdh"]);
        }
        
        $page = $uri[0] ?? null;
        $subpage = $uri[1] ?? null ;
        
        $this->controll($page,$subpage);
    }

    function controll(string $control_file = null, string $subpage = null){
        $control_file = str_replace("-","",$control_file);
        $subpage = str_replace("-","",$subpage);
        if(!empty($control_file) && file_exists("./controllers/$control_file.php")){
            include_once("./controllers/$control_file.php");
        
            $page = new $control_file();
            if($subpage!=null){
                
                    
                    if(method_exists($page,$subpage) && $subpage!="get" && $subpage!="post") $page->$subpage(); 
                    else { include_once("./errors/404.php"); die;}
                    

                
            }
        }
        else if(empty($control_file)){
            include_once("./view/home.php");
        }
        else {
            include_once("./errors/404.php");
            die;
        }
        
        
        
        
       
    }
}



