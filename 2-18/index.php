<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>index</title>
  <link rel="stylesheet" href="style.css?v=2">
</head>
<body>
  <div id="wrapper">
      <div class="border">
        <h1>2章チェックテスト</h1>
      </div>
    <!--名前を入力してquestion.phpに移動するフォームを作成-->
    <div class="top">
      <form action="question.php" method="post">
        <input type="text" name="my_name" placeholder="名前を入力してください">
        <input type="submit" value="テスト開始">
      </form>
    </div>
  </div>
</body>
</html>