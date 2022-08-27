<?php 
// データベース接続

$user = "root";
$password = "root";
// $opt= オプション
$opt = [
    // PDO::ATTR_ERRMODEという属性でPDO::ERRMODE_EXCEPTIONの値を設定することでエラーが発生したときに、PDOExceptionの例外を投げてくれる。
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,

    // falseにするとは、静的プレースホルダを使用することを意味する。
    /**
     * 静的プレースホルダーとは
     * SQL文を書くときの手法の一つで、ユーザーが入力するデータの挿入される場所をあらかじめ確保し、それ以外の部分の構文解析をあらかじめ行っておきます。
     * これにより、ユーザーがSQL文をWEBフォームなどに入力してもデータベースのSQLは反応しなくなります。
     * この処理をデータベースで行うため原理上不正なデータの挿入が起きない。
     */
    PDO::ATTR_EMULATE_PREPARES => false,
    PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,
];
// newはオブジェクトのインスタンス化(新しいオブジェクトを生成する)
$dbh = new PDO('mysql:host=localhost;dbname=lesson_db', $user, $password, $opt);
var_dump($dbh);

?>