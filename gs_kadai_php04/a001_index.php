<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ささえ合いツール［ログイン］</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <h1>地域ささえ合いツール</h1>
    <p>会員登録した過疎地域の住民同士で生活を支え合うツールです</p>
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="a010_u_regist.php">新規登録</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="POST" action="a020_login_act.php">
  <div class="jumbotron">
   <fieldset>
    <h1>ログイン</h1>
     <label>ログインＩＤ</label><br>
        <input type="text" name="lid" size="50px"><br>
     <label>ログインパスワード</label><br>
        <input type="password" name="lpw" size="50px"><br>
     <input type="submit" value="ログイン">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
