<?php
// セッションスタート・funcs読み込み・セッションＩＤチェック
session_start();
include('x999_funcs.php');
sessionCheck();
echo $_SESSION['id'] ." ". $_SESSION['name'];

//1.  DB接続します
$pdo = db_conn();

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM sasae_order_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if ($status == false) {
    //execute（SQL実行時にエラーがある場合）
    sql_error($stmt);
}else{
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $id = $result['id'];
    $o_time = $result['o_time'];
    $o_id = $result['o_id'];
    $o_name = $result['o_name'];
    $o_type = $result['o_type'];
    $o_content = $result['o_content'];
    $r_flg = $result['r_flg'];
    $r_time = $result['r_time'];
    $r_id = $result['r_id'];
    $r_name = $result['r_name'];

      $view .= '<tr>';
      $view .= '<td>'.$id.'</td>';
      $view .= '<td>'.$o_time.'</td>';
      $view .= '<td>'.$o_id.'</td>';
      $view .= '<td>'.$o_name.'</td>';
      $view .= '<td>'.$o_type.'</td>';
      $view .= '<td>'.$o_content.'</td>';
      $view .= '<td>'.$r_flg.'</td>';
      $view .= '<td>'.$r_time.'</td>';
      $view .= '<td>'.$r_id.'</td>';
      $view .= '<td>'.$r_name.'</td>';
      $view .= '</tr>';
  }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ささえ合いツール［ユーザー管理］</title>
<link rel="stylesheet" href="stylesheet.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
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
<h1>依頼状況一覧</h1>
<table border="1">
<tr>
<th>依頼ＩＤ</th><th>依頼日時</th><th>依頼者ＩＤ</th><th>依頼者名</th><th>依頼区分</th><th>依頼内容</th><th>受注状況</th><th>受注日時</th><th>受注者ＩＤ</th><th>受注者名</th>
</tr>
<?= $view ?>
</table>

<!-- Main[End] -->

</body>
</html>