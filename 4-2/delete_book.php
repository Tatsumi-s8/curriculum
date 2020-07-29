<?php

require_once('db_connect.php');
check_user_logged_in();

$id = $_GET['id'];

if(empty($id)){
    header("Location: main.php");
    exit;
}

$pdo = db_connect();

try{
    $sql = "delete from books where id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    header("Location: main.php");
    exit;
}catch(PDOExeption $e){
    echo 'Error：'.$e->getMessage();
    die();
}
?>