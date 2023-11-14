<?php
//配列
$people = array("Taro", "Jiro", "Saburo");
var_dump($people);
echo $people[0];
echo "<br />";

//連想配列

$people = array (
    "person1" => "Taro",
    "peason2" => "Jiro",
    "peason3" => "Saburo"
);
var_dump($people);

$people = [
    "person1" => "taro",
    "person2" => "jiro",
];
echo $people["person1"];
echo "<br />";


//多次元配列
$people = [
    [
        "last_name" => "山田",
        "first_name" => "太郎",
        "age" => 29,
        "gender" => "男性"
    ],
    [
        "last_name" => "鈴木",
        "first_name" => "次郎",
        "age" => 25,
        "gender" => "男性"
    ],
    [
        "last_name" => "佐藤",
        "first_name" => "花子",
        "age" => 20,
        "gender" => "女性"
    ]
    ];

    echo $people[0]["last_name"];
    echo "<br />";
//foreach文
    $people = array("taro", "jiro", "saburo");
    foreach ($people as $person) {
        //$peopleは要素を取り出す配列。この配列の要素の数だけループが繰り替えされる
        //$personは$peopleから取り出された要素を格納する変数。ループ1回で配列内の1つの要素が代入される。毎ループ毎に変数peasonに格納される。
        echo $person;
        //配列から取り出した要素を格納した変数が呼びだされる。ループが終わるまで。
        echo "<br />";
    }

    $people = array (
        "person1" => "Taro",
        "person2" => "Jiro",
        "person3" => "Saburo"
    );

    foreach ($people as $person => $name) {
        echo $person . "は" . $name . "です"."<br />";
    }

    $people = [
        ["Taro", "25", "men"],
        ["Jiro", "20", "men"],
        ["hanako", "16", "women"]
    ];

    foreach ($people as $person) {
        echo $person[0]."(".$person[1]."歳".$person[2].")";
        echo "<br />";
    }


?>