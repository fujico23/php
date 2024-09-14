<?php
$status_codes = [
    /* --キーは指定されていないので添字は[0][1][2]･･･となる-- */
    
    /* --配列要素0-- */
[
    "code" => "102",
    "meaning" => "Processing",
    "description" => "処理中である"
],
    /* --配列要素1-- */
[
    "code" => "200",
    "meaning" => "OK",
    "description" => "リクエストが正常に成功できた"
],
    /* --配列要素2-- */
[
    "code" => "301",
    "meaning" => "Moved",
    "description" => "リクエストしたリソースが恒久的に移動されている"
],
    /* --配列要素3-- */
[
    "code" => "304",
    "meaning" => "Not Modified",
    "description" => "リクエストしたリソースは更新されていない"
],
    /* --配列要素4-- */
[
    "code" => "400",
    "meaning" => "Bad Request",
    "description" => "クライアントのリクエストに異常がある"
],
    /* --配列要素5-- */
[
    "code" => "401",
    "meaning" => "Unauthorized",
    "description" => "アクセストークンが無効なときや、認証がされていない"
],
    /* --配列要素6-- */
[
    "code" => "403",
    "meaning" => "Forbidden",
    "description" => "閲覧権限が無いファイルやフォルダである"
],
    /* --配列要素7-- */
[
    "code" => "404",
    "meaning" => "Not found",
    "description" => "Webページが見つからない"
],
    /* --配列要素8-- */
[
    "code" => "500",
    "meaning" => "Internal Server Erro",
    "description" => "何らかのサーバ内でエラーが起きた"
],
    /* --配列要素9-- */
[
    "code" => "502",
    "meaning" => "Bad Gateway",
    "description" => "サーバーがリクエストに満たすのに必要な機能をサポートしていない"
],
    /* --配列要素10-- */
[
    "code" => "503",
    "meaning" => "Service Unavailable",
    "description" => "一時的にサーバにアクセスが出来ない"
]

];
//var_dump($status_codes);