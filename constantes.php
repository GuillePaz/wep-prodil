<?php 
define("URL_HOST",$_SERVER["REQUEST_SCHEME"]."://".$_SERVER["HTTP_HOST"]."/wep-prodil");
define("LOCAL",__DIR__);

define("ASSETS",URL_HOST."/assets");
define("PRODUCTOS",ASSETS."/img/prodilproducts");
