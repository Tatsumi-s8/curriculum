<?php

require_once('function.php');
check_user_logged_in();

require_once('db_connect.php');

$pdo = db_connect();
$sql = "select * from posts order by id desc";
$stmt = $pdo->query($sql);

?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>メイン</title>
</head>
<body>
    <h1>メインページ</h1>
    <p>ようこそ<?php echo $_SESSION["user_name"]; ?>さん</p>
    <a href="create_post.php">記事を投稿する</a>
    <br>
    <a href="logout.php">ログアウト</a>

    <table>
    <tr>
        <td>記事ID</td>
        <td>タイトル</td>
        <td>本文</td>
        <td>投稿日</td>
    </tr>
    <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['content']; ?></td>
            <td><?php echo $row['time']; ?></td>
            <td><a href="detail_post.php?id=<?php echo $row['id']; ?>">詳細</a></td>
            <td><a href="edit_post.php?id=<?php echo $row['id']; ?>">編集</a></td>
           <td><a href="delete_post.php?id=<?php echo $row['id']; ?>">削除</a></td>
        </tr>
    <?php } ?>
    </table>
</body>
</html>