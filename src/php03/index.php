<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!--ここを教材通りに付け足した -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/sanitize.css"> <!-- リセットCSS -->
    <link rel="stylesheet" href="css/common.css">   <!-- header用CSS -->
    <link rel="stylesheet" href="css/index.css">    <!-- body用CSS -->
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a href="/php03/index.php" class="header__logo">
            World Clock
            </a>
        </div>
    </header>

    <main>
        <div class="search-form__content">
            <div class="search-form__heading">
                <h2>日本と世界の時間を比較</h2>
            </div>
            <form action="result.php" class="search-form" method="get">
                <div class="search-form__item">
                    <select class="search-form__item-select" name="city">
                        <option value="シドニー">シドニー</option>
                        <option value="上海">上海</option>
                        <option value="モスクワ">モスクワ</option>
                        <option value="ロンドン">ロンドン</option>
                        <option value="ヨハネスブルグ">ヨハネスブルグ</option>
                        <option value="ニューヨーク">ニューヨーク</option>
                    </select>
                </div>
                <div class="search-form__button">
                    <button class="search-form__button-submit" type="submit">検索</button>
                </div>
            </form>            
        </div>
    </main>
    
</body>
</html>