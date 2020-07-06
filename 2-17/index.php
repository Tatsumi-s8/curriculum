<?php

// ループ文 × 条件分岐

echo "■ループ文 × 条件分岐";
echo "<br>";

$goal = 0;
$num = 1;
// サイコロの関数
function diceRoll(){
    return rand(1,6);
}

// すごろくのループ

    
    while($goal < 50){
        if($goal >= 40){
            $num --;
            echo "合計".$num."回でゴールしました。";
        break;
        }else{
            $move = diceRoll();
            echo $num."回目＝".$move."<br>";
            $goal += $move;
            $num ++;
        }
    }


echo "<br>";
echo "<br>";

// 関数 × 条件分岐
echo "■関数 × 条件分岐<br>";

date_default_timezone_set('Asia/Tokyo');
$ja_time = intval(date('H'));


if($ja_time >= 4 && $ja_time <= 11){
    echo "現在".$ja_time."時台です。<br>おはようございます。";
}elseif($ja_time >= 12 && $ja_time <= 17){
    echo "現在".$ja_time."時台です。<br>こんにちは。";
}else{
    echo "現在".$ja_time."時台です。<br>こんばんは。";
}







?>