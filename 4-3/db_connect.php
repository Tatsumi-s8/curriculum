<?php

define('DB_DATABASE', 'test');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('PDO_DNS', 'mysql:host=localhost;charset=utf8;dbname='.DB_DATABASE);

function db_connect(){
    try{
        $pdo = new PDO(PDO_DNS, DB_USER, DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }catch(pdoexception $e){
        echo'Error：'.$e->getMessage();
        die();
    }
}
?>