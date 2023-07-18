<?php 


class Uri {
    function __construct()
    {
        $uri = explode("/",$_GET["url"]);
        $page = $uri[0] ?? null;
        $subpage = $uri[1] ?? null ;
        
        $this->controll($page,$subpage);
    }

    function controll(string $control_file, string $subpage = null){

        include_once("./controllers/$control_file.php");
        
        
            if($subpage!=null){
                
                    $page = new $control_file;
                    @$page->$subpage();
                
            }
        
        
       
    }
}
    new Uri;


