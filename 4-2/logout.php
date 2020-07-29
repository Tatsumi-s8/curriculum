<?php
session_start();
// セッション変数のクリア
$_SESSION = array();
// セッションクリア
session_destroy();
?>


<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>logout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

</head>
    <body>
        <div id="wrapper">
            <h1>ログアウト画面</h1>
            <p>ログアウトしました。</p>
            <a href="login.php" class="l_btn blue">ログイン画面に戻る</a>
        </div>
    </body>
</html>