<?php
require_once("config/status_codes.php");
$random_numbers = array_rand($status_codes, 4);
/* --ランダムに連想配列のキーを4つずつ取り出す。ここでは配列要素0、配列要素1･･･の添字[0],[1]になる？ということか！-- */

foreach ($random_numbers as $index) { 
/* --4つのキー($status_codesから)を、変数indexに格納する-- */

    $options[] = $status_codes[$index]; 
    /* --ここが難しい！具体的にどういうことが起きているか想像しづらい。
    配列optionsにキーを指定せず、配列status_codesのランダムの配列要素の中身を入れていく･･･？-- */

}
/*var_dump($options);*/
$question = $options[mt_rand(0, 3)]; 
/* --options(連想配列の配列要素から、更に1つの要素をランダムに取り出し、変数questionに代入する-- */

/*var_dump($question);*/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Code Quiz</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">

</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/php04">
                Status Code Quiz
            </a>
        </div>
    </header>

    <main>
        <div class="quiz__content">
            <div class="question">
                <p class="question__text">Q.以下の内容に当てはまるステータスコードを選んでください</p>
                <p class="question__text">
                    <?php echo $question["description"]?> <! --変数question(正解)のdescriptionキーを呼び出す-- >
                </p>
            </div>
            <form class="quiz-form" action="result.php" method="post"> <!-- データの送信が出来るようにformタグ使用 -->
                <input type="hidden" name="answer_code" value="<?php echo $question["code"]?>">
                <! --hiddenはユーザーには表示されず、submit時にサーバーにデータとして送られる。
                     valueは初期値の設定なので、ユーザーが任意に入力することはなく、必ず正解のcodeが送られる。-- >
                
                <div class="quiz-form__item">
                    <?php foreach ($options as $option): ?> <! --ランダム4つを取り出して格納する変数option-- >
                        <!--以下foreachのループ処理-->
                    <div class="quiz-form__group">
                        <input class="quiz-form__radio" id="<?php echo $option['code'] ?>" type="radio" name="option" value="<?php echo $option['code'] ?>">
                        <label class="quiz-form__label" for="<?php echo $option["code"] ?>">
                        <! --for属性とid属性を同じものに指定する (1)視覚的に紐付く (2)データ的にも紐付く-- >
                        <?php echo $option['code'] ?><! --labelタグで挟んだランダムなcodeが4つ表示される-- >
                        </label>
                    </div>
                    <?php endforeach; ?>
                    <! --foreach文の終了処理-- >

                </div>
                <div class="quiz-form__button">
                    <button class="quiz-form__button-submit" type="submit">回答</button>
                </div>
            </form>
        </div>
    </main>
    
</body>
</html>