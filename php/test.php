<?php
require_once 'db.php';

// ドライバ呼び出しを使用して MySQL データベースに接続します
// $dsn = 'mysql:dbname=test;host=localhost';
// $user = 'sibazi';
// $password = '123456';

// try {
//     $dbh = new PDO($dsn, $user, $password);
//     echo "接続成功\n";
// } catch (PDOException $e) {
//     echo "接続失敗: " . $e->getMessage() . "\n";
//     exit();
// }
$dbh = mysql();

// 素敵な処理
// SQL文を準備します。「:id」「:name」がプレースホルダーです。
// $sql = 'INSERT INTO cars (car_name,car_length,car_width,car_height) VALUE (:car_name,:car_length,:car_width,:car_height)';
// $prepare = $dbh->prepare($sql);

// $prepare->bindValue(':car_name', 'プリウス', PDO::PARAM_STR);
// $prepare->bindValue(':car_length', 1000, PDO::PARAM_INT);
// $prepare->bindValue(':car_width', 1200, PDO::PARAM_INT);
// $prepare->bindValue(':car_height', 1300, PDO::PARAM_INT);
// $prepare->execute();

$sql = 'SELECT * FROM cars';


// PDOStatementクラスのインスタンスを生成します。
$prepare = $dbh->prepare($sql);

// プリペアドステートメントを実行する
$prepare->execute();

// PDO::FETCH_ASSOCは、対応するカラム名にふられているものと同じキーを付けた 連想配列として取得します。
$result = $prepare->fetchAll(PDO::FETCH_ASSOC);

// 結果を出力
var_dump($result);

$num1 = 320;
$num2 = & $num1;