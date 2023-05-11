<?php
require_once('db_connect.php');

session_start();

if(!empty($_POST)){
    if (empty($_POST["email"])) {
        echo "メールアドレスが未入力です。";
    }

    if (empty($_POST["password"])) {
        echo "パスワードが未入力です。";
    }

    if(!empty($_POST["email"]) && !empty($_POST["password"])){

        $email = htmlspecialchars($_POST["email"], ENT_QUOTES);
        $password = htmlspecialchars($_POST["password"], ENT_QUOTES);

        $pdo = db_connect();

        try{
            $sql = "select * from user where email = :email";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":email", $email);
            $stmt->execute();
        }catch(PDOException $e){
            echo 'Error'.$e->getMessage();
            die();
        }

        if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            if(password_verify($password, $row['password'])){

                $_SESSION['user_email'] = $row['email'];
                $_SESSION['user_name'] = $row['name'];
                header("Location: main.php");
                exit;

            }else{
                echo "パスワードが間違っています。";
            }
        }else{
            echo "ユーザー名かパスワードが間違っています。";
        }
    }

    
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
<div id="wrapper">
            <h1>ログインフォーム</h1>
            <br>
                <form method="POST" action="">
                    <span>email:</span><br>
                    <input type="text" name="email" placeholder="メールアドレス">
                    <br>
                    <span>password:</span><br>
                    <input type="text" name="password" placeholder="パスワード">
                    <br>
                    <input type="submit" value="ログイン" name="login">
                </form>
        
</div>

</body>
</html>