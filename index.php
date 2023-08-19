<?php

use Components\Footer;
use Components\Navbar;
use Core\Uri;



include_once("constantes.php");
include_once("load.php"); 




?>
<!DOCTYPE html>
<html langs="es">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODIL GROUP</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo STYLES ?>/base.css">
    <link rel="stylesheet" href="<?php echo STYLES ?>/slider.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
    <script src="https://code.jquery.com/jquery-3.7.0.slim.min.js"></script>

    <script type="text/javascript" src="<?php echo LIBRARIES ?>/ResizeSensor.js"></script>
    <script type="text/javascript" src="<?php echo LIBRARIES ?>/ElementQueries.js"></script>

    <script type="text/javascript" src="<?php echo URL_HOST ?>/js/main.js"></script>
   
</head>
<body>

    <?php


new Navbar;
echo "<br>";
 
new Uri;
    
new Footer;

?>
</body>

</html>