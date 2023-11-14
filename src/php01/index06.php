<!-- 関数
※今回はユーザー定義関数を学ぶ
関数とは特定の動作をまとめて入れておく箱のようなイメージ -->

<?php
//引数なし・戻り値なしの場合
function outputhello(/*引数省略*/){
    //(2)function outputHello()に処理が飛ぶ
    
    echo "Hello,world";  //処理内容記載
    //(3)function outputhello()の中に記述している処理が実行される
}
outputhello(); //(1)関数()の引数省略の場合は左のように関数outputhelloの呼出しをする。
echo "<br />";

//引数あり

function eat($food,$count,$unit){
    //(2)関数eatに処理が飛び、受け皿(仮引数)に実際の値(実引数)が渡される
    $text = "私は{$food}を{$count}{$unit}食べました";
    //(3)関数eatの中に記述されている処理
    echo $text;
    //(4)関数eatの処理
}
eat ("みかん","3","個");//(1)関数eatを呼び出す。その時に実引数を設定する
echo "<br />";
eat ("プリン","2","個");//メリット1：実引数の中身を変えれば何度も同じ処理を書かなくて済む！
echo "<br />";
eat ("バナナ","1","本");
//メリット2：仮に、「食べました」を「食べたよ」に書き換えるとなると何度も書き直さないといけないが、関数の処理を直せば良いのでラク
echo "<br />";

//return文
function traiangle_area($bottom, $height) {
    $area = $bottom * $height / 2;
    echo "面積は{$area}平方センチメートルです";
}
traiangle_area(15, 7);
//三角形の面積を求める関数を作成したが、この関数traiangle_areaをまた別のところで使うかもしれない
echo "<br />";
function triangle_area ($bottom, $height) {
    $area = $bottom * $height / 2;
    return $area;
}
$area_A = triangle_area(15, 7); //return文が無いと関数triangle_areaの結果が返せず$area_Aに代入できない
$area_B = triangle_area(8, 12);
echo "三角形Aの面積は"."$area_A";
echo "<br />";
echo "三角形Bの面積は"."$area_B";
echo "<br />";


function outputCount($num1) {
    echo $num1;
}
outputCount(5);
echo "<br />";

function score($score1, $score2, $score3) {
    $total = $score1 + $score2 + $score3;
    if ($total > 210){
        echo $total . "点なので合格です";
    }else {
        echo $total . "点なので不合格です";
    }
}
echo (score(100, 10, 130));
echo "<br />";

function traiangleArea($bottom, $height) {
    return $bottom * $height / 2;
}
echo traiangleArea(2 , 5) . "\n";
echo "<br />";

function square($bottom, $height) {
    $squareArea = $bottom * $height;
    return $squareArea;
}
echo (square(2 , 5));
echo "<br / >";

function trapezoid($top, $bottom, $height) {
    $trapezoidArea = ($top + $bottom) * $height /2;
    return $trapezoidArea;
}
echo (trapezoid(10, 10, 5));

?>