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

// 登録データ読み込み
$o_id = $_SESSION['id'];
$o_name = $_SESSION['name'];
$o_type = $_POST['o_type'];
$o_content = $_POST['o_content'];

// ＤＢ接続
$pdo = db_conn();

// 登録データ作成
$stmt = $pdo->prepare("INSERT INTO sasae_order_table(id,o_time,o_id,o_name,o_type,o_content)
        VALUES(NULL,sysdate(),:o_id,:o_name,:o_type,:o_content)");
$stmt->bindValue(':o_id', h($o_id), PDO::PARAM_INT);      //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':o_name', h($o_name), PDO::PARAM_STR);      //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':o_type', h($o_type), PDO::PARAM_STR);      //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':o_content', h($o_content), PDO::PARAM_STR);      //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //実行

// データ登録後処理
if ($status == false) {
    sql_error($stmt);
} else {
    redirect("a220_k_o_table.php");
}
?>