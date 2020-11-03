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

//1. POSTデータ取得
$id = $_GET["id"];

//2. DB接続します
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare("DELETE FROM sasae_user_table WHERE id=:id");
$stmt->bindValue(':id', $id, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //実行

//４．データ登録処理後
if($status==false){
  sql_error($stmt);
}else{
  redirect("a001_index.php");
}
?>