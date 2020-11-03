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
$name = $_POST["name"];
$adress_num = $_POST["adress_num"];
$adress = $_POST["adress"];
$tel = $_POST["tel"];
$email  = $_POST["email"];
$kanri_flg = $_POST["kanri_flg"];
$lid = $_POST["lid"];
$lpw = $_POST["lpw"];
$id = $_POST["id"];

//2. DB接続
$pdo= db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare("UPDATE sasae_user_table
                        SET
                            name = :name,
                            adress_num = :adress_num,
                            adress = :adress,
                            tel = :tel,
                            email = :email,
                            kanri_flg = :kanri_flg,
                            lid = :lid,
                            lpw = :lpw
                        WHERE
                            id = :id;
                        ");
$stmt->bindValue(':name', h($name), PDO::PARAM_STR);      //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':adress_num', h($adress_num), PDO::PARAM_INT);      //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':adress', h($adress), PDO::PARAM_STR);      //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':tel', h($tel), PDO::PARAM_INT);      //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':email', h($email), PDO::PARAM_STR);      //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':kanri_flg', h($kanri_flg), PDO::PARAM_INT);      //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lid', h($lid), PDO::PARAM_STR);      //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lpw', h($lpw), PDO::PARAM_STR);      //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':id', h($id), PDO::PARAM_STR);      //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //実行


//４．データ登録処理後
if($status==false){
    sql_error($stmt);
}elseif($kanri_flg==0){
    redirect('a150_u_update.php');
}else{
    redirect('a250_k_update.php');
}
?>