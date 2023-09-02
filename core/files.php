<?php

namespace Core;

class File
{
    private $path;
    private $filename;

    function __construct($carpeta_temporal, $carpeta_galeria = "", $carpeta_objetiva = "")
    {
        $this->path = array(
            "TEMP" => "$carpeta_temporal",
            "GALLERY" => $carpeta_galeria,
            "TARGET" => $carpeta_objetiva
        );
    }
    function selectFile($filename,){

    }
    function moveToGalery(){

    }
}
