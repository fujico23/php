<?php

//条件分岐

//if文
$a = 5;
if ($a === 5) {
    echo "\$aは5です";
}// バックスラッシュをつけると後の要素に特別な意味を持たせない

echo "<br / >";
$a = 7;
if ($a === 5) {
    echo "\$aは5です";
}else {
    echo "\$aは5以外です";
}
echo "<br />";

$a = 7;
if ($a === 7) {
    echo "\$aは7です";
}elseif ($a < 7) {
    echo "\$aは7より大きいです";
}else {
    echo "\$aは7より小さいです";
}

echo "<br />" ;

//switch文
$peaple = "Saburo";

switch ($peaple){
case "Taro";
echo "太郎です";
break;
case "Jiro";
echo "次郎です";
break;
case "Saburo";
echo "三郎です";
break;
}
echo "<br />";

//三項演算子
$a = 7;
$result = ($a === 7) ? "TRUE" : "FALSE";
echo $result;
echo "<br />";
$b = ($a > 5) ? "TRUE" : "FALSE" ;
echo $b;