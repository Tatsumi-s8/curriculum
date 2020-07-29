<?php

define('DB_DATABASE', 'checktest4');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('PDO_DNS','mysql:host=localhost;charset=utf8;dbname='.DB_DATABASE);

function connect(){
    try{
        // インスタンスの作成
        $pdo=new PDO(PDO_DNS, DB_USERNAME, DB_PASSWORD);
        // エラー処理の方法
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }catch(PDOException $e){
        echo'Error：'.$e->getMessage();
        die();
    }
}

?>