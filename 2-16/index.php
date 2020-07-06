<!-- 課題 -->
【課題】
<br>
<?php

// ファイルの書き込み

$testFile = "test.txt";
$contents = "こんにちは！";

if(is_writable($testFile)){
    // is_writable(対象のファイル)で書き込み可能かを、T/Fで返す。
    // ここから
    $fp = fopen($testFile, "w");
    fwrite($fp, $contents);
    fclose($fp);
    //ここまでがセット
    // $fp = fopen(書き込みたいファイル, "書き込みモードの選択"); 開始
    // fwrite($fp, 書き込む内容); 内容
    //  fclose($fp); 終了
    echo "finish writable!";
}else{
    echo "not writable!";
    exit;
}

// index.phpに接続すると、write($fp, 書き込む内容);によって書き込まれた内容がtest.txtに反映される。

// 「書き込みモードの種類」
// "w"...上書き。アクセスすると内容が上書きされる。
// "a"...追記モード。アクセスする度に、末尾に内容が追加される。
// "r"...読み込みモード。次で使う。

echo "<br>";

// ファイルの読み込み

$test_file = "test2.txt";

if(is_readable($test_file)){
    // is_readable(読み込みたいファイル)で読み込めるか判断。
    $fp = fopen($test_file, "r");
    while ($line = fgets($fp)){
        echo $line."<br>";
    }
    // $fp = fopen(読み込むファイル, "r"); 開始
    // fgets関数はファイルを1行ずつ読み込む関数なので
    // while ($line = fgets($fp)) { echo $line."<br>"; } で読みこんだファイルを１行ずつ表示するループを作成。
}else{
    echo "not readable!";
    exit;
}

echo "<br><br>";

// IT用語調べ

echo "【IT用語】<br>";

echo "1. CakePHPの2系・3系の違い<br>";
echo "3系ではモデル周りが一新。QueryBuilderにより、配列が書きやすくなったなど。３系の方が学習コストは高くなるが、覚えれば拡張性が非常に使いやすい。<br>";
echo "2. LAMP<br>";
echo "データベースを利用したWebアプリケーションを開発・運用するのに適した、人気の高いオープンソースソフトウェアの組み合わせの一つ。<br>OSの「Linux」、Webサーバの「Apache」、データベースの「MySQL」、プログラミング言語および実行環境の「PHP」「Perl」「Python」の頭文字を繋いだもの。<br>";
echo "3. AWS<br>";
echo "Amazonが提供している100以上のクラウドコンピューティングサービスの総称。コスト削減や俊敏性を高めビジネスの効率化、ビジネススピードの加速化しイノベーションの加速を実現する。";

?>


