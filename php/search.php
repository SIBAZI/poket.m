<form action="" method="get">
  <p>検索したいキーワードを入力してください。</p>
  <input type="search" name="car_name" placeholder="キーワードを入力">
  <input type="submit" name="submit" value="検索">
</form>

<?php
require_once 'db.php';
if(empty($_GET["car_name"])) exit();
// echo $_GET["car_name"];
$dbh = mysql();
$sql = "SELECT * FROM cars WHERE car_name = :car_name";
// $sqlの情報を出力「文字数、型、内容など」
var_dump($sql);
// PDOStatementクラスのインスタンスを生成します。
$prepare = $dbh->prepare($sql);
// セキュリティ保護
$prepare->bindValue(':car_name', $_GET["car_name"] , PDO::PARAM_STR);


// プリペアドステートメントを実行する
$prepare->execute();

// PDO::FETCH_ASSOCは、対応するカラム名にふられているものと同じキーを付けた 連想配列として取得します。SELECTの場合fetchAllがいる
$result = $prepare->fetchAll(PDO::FETCH_ASSOC);

// 結果を出力
var_dump($result);

$text = "さようなら";
echo "<p>{$text}</p>";