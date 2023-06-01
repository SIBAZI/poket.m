<?php
function study()
{

    // 配列

    $arrya = [];

    $arrya2 = [1, 3, 5, 8, 9, 10, 11];

    echo ($arrya2[2]);
    $arrya2[2] = 9;
    echo ($arrya2[2]);
    $arrya2[] = 7;
    var_dump($arrya2);

    // 配列の要素をカウントする
    echo (count($arrya2));

    echo ("<br>");

    // 配列の最後の要素を表示
    echo ($arrya2[count($arrya2) - 1]);
    echo ("<br>");

    // 配列の全てを表示する
    for ($i = 0; $i <= count($arrya2) - 1; $i++) {
        echo ($arrya2[$i]);
        echo ("<br>");
    }

    // 上と一緒
    foreach ($arrya2 as $key => $value) {
        echo ("$key:$value");
        echo ("<br>");
    }

}

function lesson1()
{
    $ints = [6, 4, 3, 8, 9, 7];
    // $sum = 0;
    // foreach ($ints as $value) {
    //     $sum += $value;
    // }
    // echo ($sum);
    // echo ("<br>");
    echo (array_sum($ints));
}

// lesson1();

function lesson2()
{
    $ints = [6, 4, 3, 8, 9, 7];
    $max = $ints[0];
    $min = $ints[0];
    foreach ($ints as $value) {
        if ($max < $value) {
            $max = $value;
        }
        if ($min > $value) {
            $min = $value;
        }
    }
    echo ($max);
    echo ("<br>");
    echo ($min);
}

// lesson2();

/**
 * 偶数のみの配列を作る、奇数のみの配列を作る、バーダンプで出力
 */
function lesson3()
{
    $ints = [6, 4, 3, 8, 9, 7];
    $odds = [];
    $evens = [];
    foreach ($ints as $value) {
        if ($value % 2 === 0) {
            $odds[] = $value;
        } else {
            $evens[] = $value;
        }
    }
    var_dump($odds, $evens);
}

// lesson3();

function lesson4()
{
    $ints = [];
    for ($i = 2; $i <= 100; $i++) {
        // 初期化、皿洗い、trueになっても判定をtureで止めずにきちんと全ての判定をfalseまでやること
        $isDivisible = false;
        // 素数かどうかの判定
        // 2からそのひとつ前までの数字で割れるか確認
        for ($k = 2; $k < $i; $k++) {
            // もし割れたらフラグを立てる
            if ($i % $k === 0) {
                $isDivisible = true;
            }
        }
        // 素数の判定
        if ($isDivisible === false) {
            $ints[] = $i;
        }
    }
    var_dump($ints);
}

// lesson4();

// 配列を逆にする練習
function lesson5()
{
    $ints = [1, 2, 3, 4, 9, 6, 7, 8, 5, 6, 7, 6];
    $reverse = [];
    // $reverse[]= $ints[0];
    // $reverse[]= $ints[count($ints) - 1];
    for ($i = count($ints) - 1; $i >= 0; $i--) {
        $reverse[] = $ints[$i];
    }
    var_dump($reverse);
}

// lesson5();

// 先頭に追加する方法
function lesson5_1()
{
    $ints = [1, 2, 3, 4, 9, 6, 7, 8, 5, 6, 7, 6];
    $reverse = [];
    foreach ($ints as $value) {
        array_unshift($reverse, $value);
    }
    var_dump($reverse);
}

// lesson5_1();

// 配列を逆にする方法
function lesson5_2()
{
    $ints = [1, 2, 3, 4, 9, 6, 7, 8, 5, 6, 7, 6];
    var_dump(array_reverse($ints));
}

// lesson5_2();

// 連想配列
function study2()
{
    // 連想配列の定義、keyと値のペア
    $array = [
        'name' => 'sibaazi',
        'age' => 25,
        'sex' => 'man',
    ];

    //連想配列の更新 
    $array['age'] = 18;
    var_dump($array['age']);
    var_dump($array['name']);

    // 連想配列の追加
    $array['height'] = 185;
    var_dump($array);

    // 連想配列の削除
    unset($array['sex']);
    var_dump($array);

    foreach ($array as $key => $value) {
        var_dump($key, $value);
        echo ('....................');
    }

}

// study2();

//　menus keyはメニューの名前　値はメニューの値段、連想配列
// 注文するメニュー名の配列
// 注文の合計金額を出力する
function lesson6()
{
    $menus = [
        'pasta' => 1600,
        'yakiniku' => 2000,
        'sushi' => 1500,
        'tenpura' => 700,
        'sutte-ki' => 2100,
    ];
    $orders = [
        'pasta',
        'yakiniku',
        'tenpura',
        'sushi',
    ];

    $total = 0;
    foreach ($orders as $value) {
        // var_dump($menus[$value]);


        $total += $menus[$value];
    }


    var_dump($total);

    // var_dump($menus);
}


// lesson6();

// menusの値段を全て倍にする
function lesson7()
{
    $menus = [
        'pasta' => 1600,
        'yakiniku' => 2000,
        'sushi' => 1500,
        'tenpura' => 700,
        'sutte-ki' => 2100,
        'yasai' => 500,
    ];

    foreach ($menus as $key => $value) {
        $menus[$key] = $value * 2;
    }
    // var_dump($menus);

    // jsonをechoするとapi
    echo json_encode($menus);

}


lesson7();

function lesson8()
{
    // 連想配列で各それぞれ何回呼ばれたかカウントする
    // var_dumpした場合の集計結果
    //[
    //  'ToyotaCamry' =>  5,
    //  'HondaCivic' =>  3
    //];
    $cars = [
        'ToyotaCamry',
        'HondaCivic',
        'FordMustang',
        'ChevroletCorvette',
        'BMW3Series',
        'MercedesBenzEClass',
        'AudiA4',
        'ToyotaCamry',
        'HondaCivic',
        'FordMustang',
        'ChevroletCorvette',
        'BMW3Series',
        'MercedesBenzEClass',
        'AudiA4',
        'ToyotaCamry',
        'HondaCivic',
        'FordMustang',
        'ChevroletCorvette',
        'BMW3Series',
        'MercedesBenzEClass',
        'AudiA4',
        'ToyotaCamry',
        'HondaCivic',
        'FordMustang',
        'ChevroletCorvette',
        'BMW3Series',
        'MercedesBenzEClass',
        'AudiA4',
        'ToyotaCamry',
        'HondaCivic',
        'FordMustang'
      ];
}




// 多次元配列
