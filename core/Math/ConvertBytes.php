<?php
namespace Core\Math;

class ConvertBytes {
    function byteToKB(int $number){
        return round($number/pow(2,10),2);
    }
    function byteToMB(int $number){
        return round($number/pow(2,20),2);
    }
    function byteToGB(int $number){
        return round($number/pow(2,30),2);
    }
    function KBToByte(int $number){
        return round($number*pow(2,10),2);
    }
    function MBToByte(int $number){
        return round($number*pow(2,20),2);
    }
    function GBToByte(int $number){
        return round($number*pow(2,30),2);
    }
}
