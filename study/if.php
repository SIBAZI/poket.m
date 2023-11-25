<?php


$num1 = 11;
$num2 = 11;
$year = 2000;

if ($num1 > $num2) {
    echo ('num1の方が大きいです');
} elseif ($num1 < $num2) {
    echo ('num2の方が大きいです');
} else {
    echo ('同じです');
}

echo '<br>';
if ($num1 >= 1 && $num1 <= 10) {
    echo ('範囲内です');
} else {
    echo ('範囲外です');
}

echo '<br>';
if($num1 >=1 || $num2 <=10) {
    echo ('OK');
} else {
    echo ('NG');
}

echo '<br>';
if($num1 !== 1){
    echo '1じゃない';
}

echo '<br>';
if($num1 % 2 === 0){
    echo '偶数です';
}else {
    echo '奇数です';
}

echo '<br>';
if($year % 400 ===0 || ($year % 4 ===0 && $year % 100 !==0 )){
    echo 'うるう年です';
}else{
    echo 'うるう年ではない';
}

echo '<br>';
echo $num1,$num2;

// echoの下位互換
echo '<br>';
print $num1;