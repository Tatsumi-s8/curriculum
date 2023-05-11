<?php
require_once("db_connect.php");

check_user_logged_in();

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main</title>
</head>
<body>
<div id="wrapper">
            <h1>メインページ</h1>
            <br>
            <p>ようこそ<?php echo $_SESSION['user_name']?>さん</p>
            <a href="logout.php">ログアウト</a>
        
    </div>
</body>
</html>