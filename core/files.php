<?php

namespace Core;

use Core\Math\ConvertBytes;

$C=new ConvertBytes;

class File
{
    private $path;
    private $filename;
    private $limit_size;

    function __construct()
    {
        $this->path = array(
            "TEMP" => __DIR__."/temp",
            "GALLERY" => __DIR__."/assets/gallery",
            "TARGET" => __DIR__."/assets/"
        );
        $this->limit_size=$C::MBToByte(5);
    }
    function selectFile($filename,string $target = null){
        if($target!=null){

        }
    }
    function moveToGalery(){

    }
}
