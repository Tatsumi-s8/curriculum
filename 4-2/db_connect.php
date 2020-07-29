<?php

define('DB_DATABASE','test4');
define('DB_USERNAME','root');
define('DB_PASSWORD','root');
define('PDO_DNS','mysql:host=localhost;charset=utf8;dbname='.DB_DATABASE);

function db_connect(){
    try{
        $pdo = new PDO(PDO_DNS, DB_USERNAME, DB_PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }catch(pdoexception $e){
        echo'Error：'.$e->getMessage();
        die();
    }
}


// function
function check_user_logged_in() {
    session_start();
    if (empty($_SESSION["user_name"])) {
        header("Location: login.php");
        exit;
    }
}

?>