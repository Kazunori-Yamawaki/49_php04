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

//1.  DB接続します
$pdo = db_conn();

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM sasae_user_table");
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
    $name = $result['name'];
    $adress_num = $result['adress_num'];
    $adress = $result['adress'];
    $tel= $result['tel'];
    $email = $result['email'];
    $kanri_flg = $result['kanri_flg'];
    $lid = $result['lid'];
    $lpw = $result['lpw'];

      $view .= '<tr>';
      $view .= '<td>'.$id.'</td>';
      $view .= '<td>'.$name.'</td>';
      $view .= '<td>'.$adress_num.'</td>';
      $view .= '<td>'.$adress.'</td>';
      $view .= '<td>'.$tel.'</td>';
      $view .= '<td>'.$email.'</td>';
      $view .= '<td>'.$kanri_flg.'</td>';
      $view .= '<td>'.$lid.'</td>';
      $view .= '<td>'.$lpw.'</td>';
      $view .= '<td><a href="a261_k_user-edit.php?id='.$id.'">編集</a></td>';
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
    <div class="navbar-header"><a class="navbar-brand" href="a200_k_menu.php">管理メニュー</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<h1>ユーザー一覧・編集［管理者］</h1>
<table border="1">
<tr>
<th>ユニークＩＤ</th><th>名前</th><th>郵便番号</th><th>住所</th><th>電話番号</th><th>Ｅメールアドレス</th><th>管理フラグ</th><th>ログインＩＤ</th><th>ログインＰＷ</th><th>編集</th>
</tr>
<?= $view ?>
</table>

<!-- Main[End] -->

</body>
</html>