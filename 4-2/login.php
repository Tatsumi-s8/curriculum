<?php

require_once("db_connect.php");

session_start();

if (!empty($_POST)) {
    if (empty($_POST["name"])) {
        echo "ユーザー名が未入力です。";
    }

    if (empty($_POST["pass"])) {
        echo "パスワードが未入力です。";
    }
    
    if (!empty($_POST["name"]) && !empty($_POST["pass"])) {
        
        $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
        $pass = htmlspecialchars($_POST['pass'], ENT_QUOTES);
        
        $pdo = db_connect();
        try {
            
            $sql = "select * from users where name = :name";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->execute();
            
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            die();
        }
        
        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { 
            if (password_verify($pass, $row['password'])) {
                
                $_SESSION["user_id"] = $row['id'];
                $_SESSION["user_name"] = $row['name'];
                
                header("Location: main.php");
                exit;
            } else {   
                echo "パスワードに誤りがあります。";
            }
            } else {
            echo "ユーザー名かパスワードに誤りがあります。";
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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="wrapper">
        <div class="header clearfix">
            <h1 class="float_left">ログイン画面</h1><a href="sign_up.php" class="signup_link">新規ユーザー登録</a>
            <br>
        </div>
        <div>
                <form method="POST" action="">
                    <input type="text" name="name" placeholder="ユーザー名" class="entry_field">
                    <br>
                    <input type="text" name="pass" placeholder="パスワード" class="entry_field">
                    <br>
                    <input type="submit" value="ログイン" name="login" class="l_btn blue">
                </form>
        </div>

        
    </div>
</body>
</html>