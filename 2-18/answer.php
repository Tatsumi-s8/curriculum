<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>answer</title>
    <link rel="stylesheet" href="style.css?v=2">
</head>
<body>

    <div id="wrapper">

        <?php 
        //[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成

        // 結果
        $q1_ans = $_POST["ans_1"];
        $q2_ans = $_POST["ans_2"];
        $q3_ans = $_POST["ans_3"];

        // 答え
        $q1_true = $_POST["true_1"];
        $q2_true = $_POST["true_2"];
        $q3_true = $_POST["true_3"];

        ?>
        
        <p class="empty"><?php echo $_POST['next_name'] ?>さんの結果は・・・？</p>
        <!-- //選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する -->
        <!--作成した関数を呼び出して結果を表示-->
        <p class="empty">①の答え</p>
        <p class="empty">
            <?php 
                if($q1_ans == $q1_true){
                    echo "正解！";
                }else{
                    echo "残念・・・";
                }
            ?>
        </p>

        <p class="empty">②の答え</p>
        <p class="empty">
            <?php 
                if($q2_ans == $q2_true){
                    echo "正解！";
                }else{
                    echo "残念・・・";
                }
            ?>
        </p>


        <p class="empty">③の答え</p>
        <p class="empty">
            <?php 
                if($q3_ans == $q3_true){
                    echo "正解！";
                }else{
                    echo "残念・・・";
                }
            ?>
        </p>
    </div>

</body>
</html>