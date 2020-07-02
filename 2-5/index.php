<?php

//提出課題

$names = "taro";
$pass = "pass";

//IF文
if($names == "taro" && $pass == "pass"){
    echo "ログイン成功です";
}elseif($names == "taro"){
    echo "パスワードが間違っています。";
}elseif($pass == "pass"){
    echo "名前が間違っています。";
}else{
    echo "入力情報が間違っています";
}

?>