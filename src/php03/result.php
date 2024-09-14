<?php
require_once('functions/search_city_time.php'); 
$tokyo = searchCityTime('東京'); /* --変数tokyoに関数searchCityTimeの東京を代入する-- */
$city = htmlspecialchars($_GET['city'], ENT_QUOTES); /* --index.phpのformタグのselectタグをGET方式で取得する-- */
$comparison = searchCityTime($city); /* --変数comparisonに関数searchCityeTimeの引数cityを入れた時の結果を代入する-- */
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>World Clock</title>
  <link rel="stylesheet" href="css/sanitize.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/result.css">
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/php03/index.php"> /* --ロゴを押すとindex.phpのホーム画面に戻る--*/
        World Clock
      </a>
    </div>
  </header>
  <main>
    <div class="result__content">
        <div class="result-cards">
            <div class="result-card">
                <div class="result-card__img-wrapper">
                   <img class="result-card__img" src="img/<?php echo $tokyo['img']?>" alt="国旗">
                </div>
                <div class="result-card__body">
                    <p class="result-card__city">
                      <?php echo $tokyo['name']?>
                    </p>
                    <p class="result-card__time">
                      <?php echo $tokyo['time']?>
                    </p>
                </div>
            </div>
            <div class="result-card">
                <div class="result-card__img-wrapper">
                   <img class="result-card__img" src="img/<?php echo $comparison['img']?>" alt="国旗">
                </div>
                <div class="result-card__body">
                    <p class="result-card__city">
                      <?php echo $comparison['name']?>
                    </p>
                    <p class="result-card__time">
                      <?php echo $comparison['time']?>
                    </p>
                </div>
            </div>
        </div>
    </div>
  </main>
</body>

</html>