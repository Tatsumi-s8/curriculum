<!-- 課題 -->

<form action="result.php" method="post">
お名前：<input type="text" name="my_name">
<br>
ご希望景品：
    <input type="radio" name="present" value="A賞">A賞
    <input type="radio" name="present" value="B賞">B賞
    <input type="radio" name="present" value="C賞">C賞
<br>
個数：
    <select name="number">
        <?php for($i=1;$i <= 10;$i ++){?>
            <option value="<?php echo $i;?>">
                <?php echo $i;?>
            </option>
        <?php } ?>
    </select>
<br>
<input type="submit" value="申込">

</form>

<br>

<!-- IT用語調べ -->

<?php
    echo "1. モジュール"."<br>";
    echo "ハードウェアやソフトウェアにおける、ひとまとまりの機能・要素のこと。"."<br>";
    echo "2. バージョン管理システム"."<br>";
    echo "データのバージョン管理を行うためのシステム。特定のファイルに加えられていく変更履歴を記録・管理していくもので、ファイルの数やバージョンの更新回数、更新に関わる人数が多くなっても正確にデータの管理ができる。"."<br>";
    echo "3. サブクエリ"."<br>";
    echo "SQLステートメントの内部に入れ子状態で入っているSQL文（クエリ）のこと。"."<br>".
         "「SELECT * FROM (SELECT column1 FROM tbl1)」における「SELECT column1 FROM tbl1」の部分のように、入れ子になって書かれているSQL文における中に書いてある方のSQL文のこと"."<br>";

?>