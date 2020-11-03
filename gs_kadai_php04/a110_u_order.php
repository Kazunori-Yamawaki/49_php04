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
  <title>ささえ合いツール［依頼登録］</title>
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
      <h1>依頼登録</h1>
      
      <form method="POST" action="a111_u_order_act.php">
        <label>依頼の種類</label><br>
            <input type="radio" name="o_type" value="移動">移動
            <input type="radio" name="o_type" value="買物">買物
            <input type="radio" name="o_type" value="配送">配送<br>
        <label>依頼の内容</label><br>
            <textarea name="o_content" rows="10" cols="80"></textarea><br>
        
        <input type="submit" value="依頼登録">
      </form>
    </fieldset>
  </div>

<!-- Main[End] -->


</body>
</html>