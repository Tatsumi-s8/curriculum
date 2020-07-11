<!-- データ追加、インサートの値 -->
<?php

// 作成したdb_connect.phpを読み込む。こうすることでDBにも接続でき、向こうの関数も利用可。
require_once('db_connect.php');

$name = 'Jiro Yamada';
$password = 'Jiro';

// 実行したいSQL文を準備
// 今回はusersテーブルにレコードを追加
$sql = "INSERT INTO users (name, password) VALUES (:name, :password)";
// 関数db_connect()からPDOを取得する
$pdo = db_connect();
try {
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    echo 'インサートしました。';
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
}

?>

<br>

<!-- データの取得 -->

<?php

require_once('db_connect.php');

$sql = "select * from users";

$pdo = db_connect();

try {
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo $row['id'].'、'.$row['name'].'、'.$row['password'];
        echo '<br />';
    }
} catch (PDOException $e){
    echo 'Error: '. $e->getMessage();
    die();
}
?>

<br>

<!-- 条件の指定 -->

<br>

<?php
require_once('db_connect.php');

$id = 1;

$sql = "select * from users where id = :id";

$pdo = db_connect();

try {
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo $row['id'].'、'.$row['name'].'、'.$row['password'];
        echo '<br>';
    }
}catch (PDOException $e){
    echo 'Error：'. $e->getMessage();
    die();
}

?>

<br>

<!-- データの更新 -->

<?php

require_once("db_connect.php");

$id = 1;
$name = "Hanako Yamada";

$sql = "update users set name = :name where id = :id";

$pdo = db_connect();

try {
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    echo "更新完了です。";
}catch(PDOException $e){
    echo "Error：".$e->getMessage();
    die();
}

?>

<!-- データの削除 -->

<?php

require_once("db_connect.php");

$id = 2;

$sql = "delete from users where id = :id";
$pdo = db_connect();

try{
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    echo "削除完了です。";
}catch(PDOException $e){
    echo "Error：". $e->getMessage();
    die();
}
?>