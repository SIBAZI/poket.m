<?php
function mysql()
{
    // ドライバ呼び出しを使用して MySQL データベースに接続します
    $dsn = 'mysql:dbname=test;host=localhost';
    $user = 'sibazi';
    $password = '123456';

    try {
        $dbh = new PDO($dsn, $user, $password);
        return $dbh;
    } catch (PDOException $e) {
        echo "接続失敗: " . $e->getMessage() . "\n";
        exit();
    }


}