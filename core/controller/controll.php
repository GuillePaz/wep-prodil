<?php 
interface iControl {
    public function GET();
    public function POST();
}
class Controll {
    function __construct()
    {
        if(
            !empty($_SERVER['HTTP_X_REQUESTED_WITH']) &&
            strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'
         ){
            # Ejecuta si la petición es a través de AJAX.
         }else{
            # Ejecuta si la petición NO es a través de AJAX.
         }
    }
}