<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ささえ合いツール［利用者情報変更］</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <h1>地域ささえ合いツール</h1>
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="a001_index.php">ログイン画面</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->

  <div class="jumbotron">
   <fieldset>
      <h1>新規登録</h1>
      
      <form method="POST" action="a011_u_regist_act.php">
        <label>お名前</label><br>
            <input type="text" name="name" size="20px"><br>
        <label>住所（郵便番号）</label><br>
            <input type="text" name="adress_num" size="20px"><br>
        <label>住所</label><br>
            <input type="text" name="adress" size="80px"><br>
        <label>電話番号（ハイフンなし・半角）</label><br>
            <input type="text" name="tel" size="20px"><br>
        <label>Ｅメールアドレス</label><br>
            <input type="text" name="email" size="50px"><br>
        <label>登録区分</label><br>
            <input type="radio" name="kanri_flg" value="0">利用者
            <input type="radio" name="kanri_flg" value="1">管理者<br>
        <label>ログインＩＤ</label><br>
            <input type="text" name="lid" size="50px"><br>
        <label>ログインパスワード</label><br>
            <input type="text" name="lpw" size="50px"><br>
        <input type="submit" value="登録">
      </form>
    </fieldset>
  </div>

<!-- Main[End] -->


</body>
</html>