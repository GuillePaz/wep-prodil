<?php
namespace Core;

class DataBase {
  
  function __construct(){
      self::Connection();
      
  }
  public static function Connection(){
      
      try{
          $base=new \PDO("mysql:host=locahost; dbname=planificacion121", "root","");
          $base->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
          $base->exec("SET CHARACTER SET UTF8");

      }catch(\Exception $e) {
          die("Error ".$e->getMessage());
          echo "Linea del error ".$e->getLine();
      }
      return $base;
  }
}


