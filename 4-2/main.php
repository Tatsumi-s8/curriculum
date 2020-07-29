<?php
require_once('db_connect.php');
check_user_logged_in();

$pdo = db_connect();

$sql = "select * from books order by id asc";
$stmt = $pdo->prepare($sql);
$stmt->execute();

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div id="wrapper_2">
        <div class="header clearfix">
            <h1>在庫一覧画面</h1>
            <div class="main">
                <a href="newbook.php" class="btn blue">新規登録</a>
                <a href="logout.php" class="btn grey">ログアウト</a>
            </div>
        </div>

        <table>
            <tr class="light_grey">
                <td>タイトル</td>
                <td>発売日</td>
                <td>在庫数</td>
                <td>   </td>
            </tr>
            
            <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                <tr>
                    <td><?php echo $row["title"]; ?></td>
                    <td><?php echo $row["date"]; ?></td>
                    <td><?php echo $row["stock"]; ?></td>
                    <td><a href="delete_book.php?id=<?php echo $row['id']; ?>" class="red">削除</a></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>