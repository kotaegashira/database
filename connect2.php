<?php 
/**
 * 例外処理 try ~ catch
 * 
 * try {
 *  エラーの起こりうる処理A
 * } catch(例外 変数) {
 *  例外発生時の処理B
 * }
 * 処理Aでエラーが発生したら、処理Bが実行される
 */

 // tryで括った部分でEXCEPTION(例外)が発生した場合にcatch(~)の部分の処理を行う。
 try {
    $user = "root";
    $password = "root";
    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,
    ];
    $dbh = new PDO('mysql:host=localhost;dbname=lesson_db', $user, $password, $opt);
    var_dump($dbh);
    // 下記の処理で例外発生時は$eにPDOExceptionの例外情報が代入！
 } catch (PDOException $e) {
    echo "エラー！: <br>";
    exit();
 }



?>