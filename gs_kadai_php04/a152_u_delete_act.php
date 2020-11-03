<?php
session_start();
include('x999_funcs.php');
sessionCheck();
echo $_SESSION['id'] ." ". $_SESSION['name'];

//1. POSTデータ取得
$id = $_GET["id"];

//2. DB接続します
$pdo = db_conn();

//ログアウト処理をした後でデータ削除
//SESSIONを初期化（空っぽにする）
$_SESSION = array();

//Cookieに保存してある"SessionIDの保存期間を過去にして破棄
if (isset($_COOKIE[session_name()])) { //session_name()は、セッションID名を返す関数
    setcookie(session_name(), '', time() - 42000, '/');
}

//サーバ側での、セッションIDの破棄
session_destroy();

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