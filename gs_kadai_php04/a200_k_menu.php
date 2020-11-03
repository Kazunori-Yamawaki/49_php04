<?php
// セッションスタート＆funcs.php読み込み＆セッションＩＤチェック
session_start();
include('x999_funcs.php');
sessionCheck();
echo $_SESSION['id'] ." ". $_SESSION['name'];

// 管理権限者以外をブロック
if($_SESSION['kanri_flg']!=1){
  exit('LOGIN ERROR');
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ささえ合いツール［利用・管理メニュー］</title>
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
        <div><a href="a210_k_order.php">依頼する</a></div>
        <div><a href="***.php">自分が発注した依頼の一覧をみる（※未実装）</a></div>
        <div><a href="a220_k_o_table.php">すべて依頼の一覧をみる</a></div>
        <div><a href="***.php">自分が受注した依頼の一覧をみる（※未実装）</a></div>
        <div><a href="a250_k_update.php">自分の利用者情報を変更する／退会する（※退会機能不具合）</a></div>
        <h1>管理メニュー</h1>
        <div><a href="a260_k_u-table.php">利用者情報の一覧を見る／編集する</a></div>
        <div><a href="***.php">依頼を編集する（※未実装）</a></div>
    </fieldset>
</div>

<!-- Main[End] -->


</body>
</html>