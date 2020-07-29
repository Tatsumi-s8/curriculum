<?php

require_once("db_connect.php");

$password = $_POST["pass"];
$password_hash = password_hash($password, PASSWORD_DEFAULT);

$pdo = db_connect();

if(isset($_POST["sign_up"])){

    if(!empty($_POST['name']) && !empty($_POST['pass'])){
          
        try{
            $sql = "insert into users(name, password) values(:name, :password)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(":name", $_POST['name']);
            $stmt->bindValue(":password", $password_hash);
            $stmt->execute();

            header("Location: login.php");
            exit;
        }catch(pdoexception $e){
            echo 'Error：'.$e->getMessage();
            die();
        }
    }
}


?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign_up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="wrapper">
        <div class="main">
            <h1>ユーザー登録画面</h1>
            <div>
                <form method="POST" action="">
                    <input type="text" name="name" placeholder="ユーザー名" class="entry_field">
                    <br>
                    <input type="text" name="pass" placeholder="パスワード" class="entry_field">
                    <br>
                    <input type="submit" value="新規登録" name="sign_up" class="l_btn blue">
                </form>
            </div>
        </div>
    </div>
</body>
</html>