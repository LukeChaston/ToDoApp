<?php
 namespace ToDo;

 class DBConnector

 {
     public static function getdatabase(): \PDO
     {
         $db = new \PDO('mysql:host = db; dbname=toDO', 'root','password');

         $db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);

         $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

         return $db;
     }
 }