<?php

//数字に関する関数

echo "「数字に関する関数」"."<br>";

$x = 3.2;
echo ceil($x)."<br>";

echo floor($x)."<br>";

//例題)1〜100の数字がランダムに出力される「変数y」(㎡)を半径とした、円の面積を求めよ。答えは四捨五入するように。

$y = mt_rand(1,100);

$circle_area = $y * $y * pi();
echo "円の面積：".round($circle_area)."㎡<br>";

echo "<br>";




//文字列に関する関数

echo "「文字列に関する関数」"."<br>";

//例題)自分のフルネーム(ローマ字・漢字)の「文字数」、「「a」と「佐」が何番目に出てくるか」を求めよ。また「自分の苗字のみを出力」、「名前のみを大文字に変えて出力(ローマ字のみ)」も求めよ。

$my_name = "tatsumi sato";
$ja_name = "佐藤巽";

echo "・ローマ字"."<br>";

echo "文字数：".strlen($my_name)."<br>";

echo "aの順番：".strpos($my_name,"a")."<br>";

echo "苗字のみ：".substr($my_name, -4, 4)."<br>";

echo "名前大文字：".str_replace("tatsumi","TATSUMI",$my_name)."<br>";

echo "<br>";

echo "・漢字"."<br>";

echo "文字数：".mb_strlen($ja_name)."<br>";

echo "「佐」の順番：".mb_strpos($ja_name,"佐")."<br>";

echo "苗字のみ：".mb_substr($ja_name, 0, 2)."<br>";


echo "<br>";



//表示に関する関数

echo "「表示に関する関数」"."<br>";

//例題)マラソンのタイム(〇〇時間〇〇分〇〇秒)と選手の名前を生成する文字列を制作せよ。なお、printf、sprintf両方で出力するように。

$player_name = "tatsumi";
$time_hours = 4;
$time_minites = 30;
$time_seconds = 5;

printf("%sさんのタイムは%02d時間%02d分%02d秒です",$player_name,$time_hours,$time_minites,$time_seconds);

echo "<br>";

$results = sprintf("%sさんのタイムは%02d時間%02d分%02d秒です",$player_name,$time_hours,$time_minites,$time_seconds);
echo $results;

echo "<br>";


?>

<br><br>

<!-- IT用語調べ -->

<?php

echo "1. PostgreSQL・Oracle SQL"."<br>";
echo "「PostgreSQL」・・・PostgreSQL Global Development Groupによって開発が行われている、オープンソースのリレーショナルデータベース管理システム（RDBMS）。<br>非常に緩やかなライセンスを採用しているため、独自に機能の改変や追加を行っても公開義務はない。"."<br>";
echo "「Oracle SQL」・・・Oracleが開発しているRDBMS。他のデータベースに比べて安全性に優れており、様々な機能を付け加えられるため拡張しやすい。だが圧倒的に高価...。"."<br>";
echo "2. TortoiseGit・TortoiseSVN"."<br>";
echo "「TortoiseSVN」・・・バージョン管理システムであるSubversionのクライアントフロントエンド（各種入力をユーザーから受け取り、バックエンドが使える仕様に合うようにそれを加工する役目を担う）となるソフトウェア。<br>例）Windowsエクスプローラと直接統合されて動作し、エクスプローラ上からファイルとディレクトリの状態をひとめで確認できるなど。<br>";
echo "「TortoiseGit」・・・分散型バージョン管理システムである Git のクライアントで、TortoiseSVNをもとに、 Microsoft Windowsシェル拡張として実装されている。CUIのGitより、直感的で簡単に扱うことが出来る。<br>";
echo "3. 外部設計・内部設計<br>";
echo "「外部設計」・・・要件定義で決定した機能や性能、制約条件などを基にしたシステムの基本となる設計を作ること。<br>操作画面や操作方法、データ出力など、ユーザーから見えるインターフェース部分の仕様を決定したり、
セキュリティや運用規定、システム開発のスケジュールや費用などを設計したりと、基本的にユーザーに向けた仕様を設計するのが外部設計。<br>";
echo "「内部設計」・・・外部設計を基に、システム内部の動作や機能、物理データなど、ユーザーから見えにくい詳細な部分の設計すること。<br>プログラム機能を単体に分割し、そこで使用する物理データや入出力を設計する。外部設計の結果をプログラミングしやすくするのが内部設計の役割である。";
?>