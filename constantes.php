<?php 
define("URL_HOST",$_SERVER["REQUEST_SCHEME"]."://".$_SERVER["HTTP_HOST"]."/web-prodil");
define("LOCAL",__DIR__);

define("ASSETS",URL_HOST."/assets");
define("IMG",ASSETS."/img");
define("IMG_PRODIL",IMG."/empresa");
define("STYLES",URL_HOST."/css");
define("LIBRARIES",URL_HOST."/libs");
define("PRODUCTOS",ASSETS."/img/prodilproducts");

//DATABASE
define("USER_ROOT","root");
define("ROOT_PSWD","");
define("DB","");
