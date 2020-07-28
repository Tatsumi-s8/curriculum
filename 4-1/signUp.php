<?php

require_once("db_connect.php");

$sql = "insert into users(name, password) values(:name, :password)";

$pdo = db_connect();

// パスワードのハッシュ化
$password = $_POST["password"];
$password_hash = password_hash($password, PASSWORD_DEFAULT);

if (isset($_POST["signUp"])) {
    try{    
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':password', $password_hash);
        $stmt->bindValue(':name', $_POST["name"]);
        $stmt->execute();
        echo '登録が完了しました。';
    
    }catch(PDOException $e){
        echo 'Error：'.$$e->getMessage();
        die();
    }
}

?>




<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <h1>新規登録</h1>
    <form method="POST" action="">
        user:<br>
        <input type="text" name="name" id="name">
        <br>
        password:<br>
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="submit" id="signUp" name="signUp">
    </form>
</body>
</html>