<?php
session_start();
include('x999_funcs.php');
sessionCheck();
echo $_SESSION['id'] ." ". $_SESSION['name'];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ささえ合いツール［利用メニュー］</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <h1>地域ささえ合いツール</h1>
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="a021_logout_act.php">ログアウト</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->

<div>
    <fieldset>
        <h1>利用メニュー</h1>
        <div><a href="a110_u_order.php">依頼する</a></div>
        <div><a href="***.php">自分が依頼した依頼の一覧をみる（※未実装）</a></div>
        <div><a href="a120_u_o_table.php">すべて依頼の一覧をみる</a></div>
        <div><a href="***.php">自分が受注した依頼の一覧をみる（※未実装）</a></div>
        <div><a href="a150_u_update.php">自分の利用者情報を変更する／退会する（※退会機能不具合）</a></div>
    </fieldset>
</div>

<!-- Main[End] -->


</body>
</html>