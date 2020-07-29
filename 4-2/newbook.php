 <?php
    require_once('db_connect.php');
    check_user_logged_in();

    $sql = "insert into books(title, date, stock) values(:title, :date, :stock)";
    $pdo = db_connect();


    $title = $_POST['title'];
    $date = $_POST['date'];
    $stock = $_POST['stock'];

    if(!empty($_POST)){
        if(empty($title)){
            echo 'タイトルが未入力です。';
        }elseif(empty($date)){
            echo '日付が未入力です。';
        }elseif(empty($stock)){
            echo '在庫の数を選択して下さい。';
        }
    
        if(!empty($title) && !empty($date) && !empty($stock)){
            try{
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(":title", $title);
                $stmt->bindParam(":date", $date);
                $stmt->bindParam(":stock", $stock);
                $stmt->execute();

                header("Location: main.php");
                exit;
            }catch(PDOException $e){
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
    <title>newbook</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="wrapper">
        <div class="header">
            <h1>本 登録画面</h1>
        </div>

        <div>
            <form method="POST" action="">
                <input type="text" name="title" placeholder="タイトル" class="entry_field">
                <br>
                <input type="text" name="date" placeholder="発売日" class="entry_field">
                <br>
                <p>在庫数</p>
                <select name="stock" placeholder="選択してください" class="stock">
                    <option class="first_option">選択してください</option>
                    <?php for($i=0; $i<51; $i += 5){?>
                        <option value="<?php echo $i;?>">
                            <?php echo $i;?>
                        </option>
                    <?php } ?>
                </select>
                <br>
                <input type="submit" value="登録" class="l_btn blue">
            </form>
        </div>
    </div>
</body>
</html>