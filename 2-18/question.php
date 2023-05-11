<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>question</title>
    <link rel="stylesheet" href="style.css?v=2">
</head>
<body>
    
    <?php
        // 各問題の選択肢の配列一覧
        $question_1 = array(80,22,20,21);
        $question_2 = array("PHP","CSS","Python","HTML");
        $question_3 = array("join","select","insert","update");
    ?>

    <div id="wrapper">

        <!-- 名前の表示 -->
        <p class="top">お疲れ様です<?php echo $_POST['my_name'] ?>さん</p>
        
        <br>
        <form action="answer.php" method="post">

            <!-- 名前と正解の送信 -->
            <input type="hidden" name="next_name" value="<?php echo $_POST['my_name'] ?>">
            <input type="hidden" name="true_1" value="<?php echo $question_1[0] ?>">
            <input type="hidden" name="true_2" value="<?php echo $question_2[0] ?>">
            <input type="hidden" name="true_3" value="<?php echo $question_3[1] ?>">

            <!-- 問題 -->

            <div class="question">
                <h2>①HTTPプロトコルで使用されるポート番号は何番？</h2>
                <br>
                <?php foreach($question_1 as $ans_1){  ?>
                    <input type="radio" name="ans_1" value="<?php echo $ans_1;?>"> <?php echo $ans_1;?>
                <?php }?>
            </div>

            <div class="question">
                <h2>②動的Webページを作成するための言語は？</h2>
                <br>
                <?php foreach($question_2 as $ans_2){ ?>
                    <input type="radio" name="ans_2" value="<?php echo $ans_2;?>"> <?php echo $ans_2;?>
                <?php }?>
            </div>

            <div class="question">
                <h2>③MySQLで情報を取得するためのコマンドは？</h2>
                <br>
                <?php foreach($question_3 as $ans_3){  ?>
                    <input type="radio" name="ans_3" value="<?php echo $ans_3;?>"> <?php echo $ans_3;?>
                <?php }?>
            </div>
            
            <input type="submit" value="回答する">
        </form>
    </div>


</body>
</html>

<!-- POST送信で送られてきた名前を受け取って変数を作成 -->
<!-- ①画像を参考に問題文の選択肢の配列を作成してください。 -->
<!-- ② ①で作成した、配列から正解の選択肢の変数を作成してください -->
<!--フォームの作成 通信はPOST通信で-->
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
    
