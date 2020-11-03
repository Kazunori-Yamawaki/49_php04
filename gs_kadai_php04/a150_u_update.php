<?php
session_start();
include('x999_funcs.php');
sessionCheck();
echo $_SESSION['id'] ." ". $_SESSION['name'];

$id = $_SESSION['id'];

$pdo = db_conn();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM sasae_user_table WHERE id=" . $id);
$status = $stmt->execute();

//３．データ表示
$view = "";
if ($status == false) {
    sql_error($status);
} else {
    $result = $stmt->fetch();
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ささえ合いツール［利用者情報変更・退会］</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <h1>地域ささえ合いツール</h1>
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="a100_u_menu.php">利用メニュー</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->

  <div class="jumbotron">
   <fieldset>
      <h1>利用者情報変更／退会</h1>
      
      <form method="POST" action="a151_u_update_act.php">
        <label>お名前</label><br>
            <input type="text" name="name" size="20px" value=<?= $result['name'] ?>><br>
        <label>住所（郵便番号）</label><br>
            <input type="text" name="adress_num" size="20px" value=<?= $result['adress_num'] ?>><br>
        <label>住所</label><br>
            <input type="text" name="adress" size="80px" value=<?= $result['adress'] ?>><br>
        <label>電話番号（ハイフンなし・半角）</label><br>
            <input type="text" name="tel" size="20px" value=<?= $result['tel'] ?>><br>
        <label>Ｅメールアドレス</label><br>
            <input type="text" name="email" size="50px" value=<?= $result['email'] ?>><br>
          <label>登録区分</label><br>
            <input type="radio" name="kanri_flg" value="0" <?= $result['kanri_flg']==0 ? 'checked':''?>>利用者
            <input type="radio" name="kanri_flg" value="1" <?= $result['kanri_flg']==1 ? 'checked':''?>>管理者<br>
        <label>ログインＩＤ</label><br>
            <input type="text" name="lid" size="50px" value=<?= $result['lid'] ?>><br>
        <label>ログインパスワード</label><br>
            <input type="text" name="lpw" size="50px" value=<?= $result['lpw'] ?>><br>
        <input type="hidden" name="id" value=<?= $result['id'] ?>>
        <input type="submit" value="変更登録">
     </form>
     <div><a href="a152_u_delete_act.php?id=<? $id ?>">退会する</a></div>
    </fieldset>
  </div>

<!-- Main[End] -->


</body>
</html>