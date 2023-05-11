<?php
require_once('db_connect.php');

$pass = $_POST["pass"];
$password_hash = password_hash($pass, PASSWORD_DEFAULT);

$pdo = db_connect();

if(isset($_POST["signup"])){

    if(empty($_POST["name"])){
        echo "名前が未入力です。";
    }elseif(empty($_POST["mail"])){
        echo "メールアドレスが未入力です。";
    }elseif(empty($_POST["pass"])){
        echo "パスワードが未入力です。";
    }

    if(!empty($_POST["name"]) && !empty($_POST["mail"]) && !empty($_POST["pass"])){
        try{
            $sql = "insert into user(name, email, password) values(:name, :email, :password)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":name", $_POST["name"]);
            $stmt->bindParam(":email", $_POST["mail"]);
            $stmt->bindParam(":password", $password_hash);
            $stmt->execute();
            
            echo "登録が完了しました。";
            exit;
        }catch(PDOException $e){
            echo 'Error'.$e->getMessage();
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
    <title>index</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="wrapper">
        <h1>新規登録</h1>

        <form method="POST" action="">
            <span>user:</span><br>
            <input type="text" name="name"><br>
            <span>email:</span><br>
            <input type="text" name="mail"><br>
            <span>password:</span><br>
            <input type="text" name="pass">
            <br><br>
            <input type="submit" name="signup">
        </form>
    
    
    </div>


</body>
</html>

