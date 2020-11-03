<?php
//1. POSTデータ取得
$name = $_POST["name"];
$adress_num = $_POST["adress_num"];
$adress = $_POST["adress"];
$tel = $_POST["tel"];
$email  = $_POST["email"];
$kanri_flg = $_POST["kanri_flg"];
$lid = $_POST["lid"];
$lpw = $_POST["lpw"];

if($id==""||$adress_num==""||$adress==""||$tel==""||$email==""||$kanri_flg==""||$id==""||$lid==""){
    exit('未記入の項目があります');
};

//2. DB接続します
include("x999_funcs.php");
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO sasae_user_table(id,name,adress_num,adress,tel,email,kanri_flg,lid,lpw)
        VALUES(NULL,:name,:adress_num,:adress,:tel,:email,:kanri_flg,:lid,:lpw)");
$stmt->bindValue(':name', h($name), PDO::PARAM_STR);      //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':adress_num', h($adress_num), PDO::PARAM_INT);      //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':adress', h($adress), PDO::PARAM_STR);      //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':tel', h($tel), PDO::PARAM_INT);      //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':email', h($email), PDO::PARAM_STR);      //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':kanri_flg', h($kanri_flg), PDO::PARAM_INT);      //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lid', h($lid), PDO::PARAM_STR);      //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lpw', h($lpw), PDO::PARAM_STR);      //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //実行

//４．データ登録処理後
if ($status == false) {
    sql_error($stmt);
} else {
    redirect("a001_index.php");
}
?>