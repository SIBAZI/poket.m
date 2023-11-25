<!-- <form action="" method="get">
  <p>検索したいキーワードを入力してください。</p>
  <input type="text" name="total" placeholder="キーワードを入力">
  <input type="text" name="pay" placeholder="キーワードを入力">
  <input type="submit" name="submit" value="検索">
</form> -->

<?php

/* 例 1 */

// for ($i = 1; $i <= 100; $i+=2) {
//     echo"<br>";
//     echo $i;
// }

function sum()
{
    $sum = 0;
    for ($i = 1; $i <= 100; $i++) {
        $sum += $i;
    }
    echo ($sum);
}

function even()
{
    for ($i = 1; $i <= 10; $i++) {
        echo "<br>";
        if ($i % 2 === 0) {
            echo ($i . "は偶数です");
        } else {
            echo ($i . "は奇数です");
        }
    }
}

function fizzbuzz($max)
{
    for ($i = 1; $i <= $max; $i++) {
        echo ("<br>");
        if ($i % 3 === 0 && $i % 5 === 0) {
            echo ("fizzbuzz");
        } elseif ($i % 5 === 0) {
            echo ("buzz");
        } elseif ($i % 3 === 0) {
            echo ("fizz");
        } else {
            echo ($i);
        }
    }
}

// fizzbuzz(100);

function cc()
{
    // echo('<table border="1">');
    // echo("<tr>");
    // echo("<td>田中</td>");
    // echo("<td>27</td>");
    // echo("</tr>");
    // echo("<tr>");
    // echo("<td>佐藤</td>");
    // echo("<td>42</td>");
    // echo("</tr>");
    // echo("</table>");

    echo ('<table border="1">');
    for ($i = 1; $i <= 9; $i++) {
        echo ("<tr>");
        for ($k = 1; $k <= 9; $k++) {
            # code...
            $num = $i * $k;
            echo ("<td>{$num}</td>");
        }
        echo ("</tr>");
    }
    echo ("</table>");



}

// cc();

function magicCircle()
{
    set_time_limit(1200);
    for ($n1 = 1; $n1 <= 9; $n1++) {
        for ($n2 = 1; $n2 <= 9; $n2++) {
            for ($n3 = 1; $n3 <= 9; $n3++) {
                for ($n4 = 1; $n4 <= 9; $n4++) {
                    for ($n5 = 1; $n5 <= 9; $n5++) {
                        for ($n6 = 1; $n6 <= 9; $n6++) {
                            for ($n7 = 1; $n7 <= 9; $n7++) {
                                for ($n8 = 1; $n8 <= 9; $n8++) {
                                    for ($n9 = 1; $n9 <= 9; $n9++) {
                                        // 各値の出現回数を数える
                                        $value_count = array_count_values([$n1, $n2, $n3, $n4, $n5, $n6, $n7, $n8, $n9]);
                                        // 最大の出現回数を取得する
                                        if (max($value_count) !== 1)
                                            continue;
                                        if (
                                            $n1 + $n2 + $n3 === 15
                                            && $n4 + $n5 + $n6 === 15
                                            && $n7 + $n8 + $n9 === 15
                                            && $n1 + $n4 + $n7 === 15
                                            && $n2 + $n5 + $n8 === 15
                                            && $n3 + $n6 + $n9 === 15
                                            && $n1 + $n5 + $n9 === 15
                                            && $n3 + $n5 + $n7 === 15
                                        ) {
                                            echo "
                                            <table border=\"1\">
                                                <tr>
                                                    <td>{$n1}</td>
                                                    <td>{$n2}</td>
                                                    <td>{$n3}</td>
                                                </tr>
                                                <tr>
                                                    <td>{$n4}</td>
                                                    <td>{$n5}</td>
                                                    <td>{$n6}</td>
                                                </tr>
                                                <tr>
                                                    <td>{$n7}</td>
                                                    <td>{$n8}</td>
                                                    <td>{$n9}</td>
                                                </tr>
                                            </table>
                                            ";
                                            exit();
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}

// magicCircle();

function primenumber()
{
    for ($i = 2; $i <= 100; $i++) {
        // 初期化
        $isDivisible = false;
        for ($k = 2; $k < $i; $k++) {
            if ($i % $k === 0) {
                $isDivisible = true;
            }
        }
        if ($isDivisible === false) {
            echo ("<br>");
            echo ($i);
        }
    }
}

// primenumber();


// お金算出




function oturi(int $totale, int $pay)
{
    $oturi = $pay - $totale;
    echo('お釣りの額は'.$oturi);
    echo ("<br>");
    echo ("5000円札の枚数は");
    echo ((int) ($oturi / 5000));
    // oturi-5000*枚数
    $oturi -= 5000 * (int) ($oturi / 5000);
    echo ("<br>");
    echo ("1000円札の枚数は");
    echo ((int) ($oturi / 1000));
    $oturi -= 1000 * (int) ($oturi / 1000);
    echo ("<br>");
    echo ("500円玉の枚数は");
    echo ((int) ($oturi / 500));
    $oturi -= 500 * (int) ($oturi / 500);
    echo ("<br>");
    echo ("100円玉の枚数は");
    echo ((int) ($oturi / 100));
    $oturi -= 100 * (int) ($oturi / 100);
    echo ("<br>");
    echo ("50円玉の枚数は");
    echo ((int) ($oturi / 50));
    $oturi -= 50 * (int) ($oturi / 50);
    echo ("<br>");
    echo ("10円玉の枚数は");
    echo ((int) ($oturi / 10));
    $oturi -= 10 * (int) ($oturi / 10);
    echo ("<br>");
    echo ("5円玉の枚数は");
    echo ((int) ($oturi / 5));
    $oturi -= 5 * (int) ($oturi / 5);
    echo ("<br>");
    echo ("1円玉の枚数は");
    echo ((int) ($oturi / 1));
    $oturi -= 1 * (int) ($oturi / 1);

}

// oturi(32561, 40000);

function oturi_juki(int $totale, int $pay)
{
    $oturi = $pay - $totale;
    echo $oturi;
    echo ("<br>");
    foreach ([5000,1000,500,100,50,10,5,1] as $value) {
        echo $value . "は";
        echo (int)($oturi / $value);
        echo ("<br>");

        $oturi %= $value;
    }
}
// エラー防止
// if(empty($_GET["total"]) || empty($_GET["pay"])) exit();
// oturi_juki($_GET["total"], $_GET["pay"]);

// 

function fibonacci(int $max){
    $before2 = 0;
    $before1= 1;
    echo($before2);
    echo ("<br>");
    echo($before1);
    echo ("<br>");
    while ($before2 + $before1 <= $max) {
        echo($before2+$before1);
        echo ("<br>");
        // $next2 = $before1;
        $next1 = $before1 + $before2;
        $before2 = $before1;
        $before1 = $next1;
    }

}

// fibonacci(1000);


// 関数とは
// 引数
function bai (int $i){
// 戻り値
    return $i*2;
}
// 戻り値受け取り
$int = bai(220);
// 出力
// echo($int);


/**
 * 与えられた引数を累乗で返す
 *
 * @param integer $i　元の数
 * @param integer $j　累乗
 * @return integer　元の数を累乗した数
 */
function rui (int $i,int $j){
    return $i**$j;
}
echo(rui(10,4));

// 再起処理
// ツリーの検索などにつかう
// ソート
function loop(int $i)
{
    echo($i);
    if($i <=10 ){
        $i++;
        loop($i);
    }
}

loop(1);

