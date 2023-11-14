<?php 
require_once("config/status_codes.php");
$answer_code = htmlspecialchars($_POST["answer_code"], ENT_QUOTES); /* --type=hiddenから、正解のコードがデータとして送られている-- */
$option = htmlspecialchars($_POST["option"], ENT_QUOTES); /* --ランダムに選ばれた4つの要素のうち、ユーザーが選択した要素のコードが送られている-- */
if (!$option) {
    /* --もし変数optionの値が偽(あるいはNULL)の場合-- */
    header("Location: index.php");
    /* --処理：header(‘Location: 遷移先のURL’)-- */
}

foreach ($status_codes as $status_code) {
    if ($status_code["code"] === $answer_code) { 
        /* --もし配列status_codeのキー:codeと変数answer_codeが等しく同じ型の場合-- */

        $code = $status_code["code"];
        /* --変数codeに配列status_codeを代入する(つまり正解)-- */
        $description = $status_code["description"];
        /* --変数descriptionに配列descriptionを代入する(つまり正解)-- */
    }
}
$result = $option === $code;
/* --変数option(ユーザーが選択したコード)と変数code(最終的に正解のコード)が合致した時に変数resultを代入する-- */

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
    <link rel="stylesheet" href="css/result.css">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                Status Code Quiz
            </a>
        </div>
    </header>
    <main>
        <div class="result__content">
            <div class="result">
                <?php if ($result): ?><!--もし変数resultが正しい場合-->
                <h2 class="result__text-correct">正解</h2>
                    <!--正解が表示される-->
                <?php else: ?><!--そうじゃなければ-->
                <h2 class="result__text-incorrect">不正解</h2>
                    <!--不正解が表示される-->
                <?php endif; ?>
            </div>
            <div class="answer-table">
                <table class="answer-table__inner">
                    <tr class="answer-table__row">
                        <th class="answer-table__header">ステータスコード</th>
                        <td class="answer-table__text">
                            <?php echo $code ?>
                        </td>
                    </tr>
                    <tr class="answer-table__row">
                        <th class="answer-table__header">説明</th>
                        <td class="answer-table__text">
                            <?php echo $description ?>
                        </td>
                    </tr>
                </table>
            </div>

        </div>
    </main>
</body>
</html>