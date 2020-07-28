<?php
require_once('db_connect.php');

$sql = "insert into posts(title, content) values(:title, :content)";
$pdo = db_connect();

$title = $_POST['title'];
$content = $_POST['content'];


if (!empty($_POST)) {
    // titleとcontentの入力チェック
    if (empty($_POST["title"])) {
        echo 'タイトルが未入力です。';
    } elseif (empty($_POST["content"])) {
        echo 'コンテンツが未入力です。';
    }
    if (!empty($_POST["title"]) && !empty($_POST["content"])) {
        
        try{
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':title', $title);
            $stmt->bindValue(':content' ,$content);
            $stmt->execute();
            header('Location: main.php');
            exit;
        
        }catch(PDOException $e){
            echo $e->getmessage;
            echo "投稿できませんでした。";
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
    <title>create_post</title>
</head>
<body>
    <h1>記事登録</h1>
    <form method="POST" action="">
    <p>title:</p>
    <textarea name="title" id="title" cols="30" rows="3"></textarea>
    <p>content:</p>
    <textarea name="content" id="content" cols="30" rows="7"></textarea>
    <br>
    <input type="submit" name="submit" value="投稿する">
    
    
    </form>
    
</body>
</html>