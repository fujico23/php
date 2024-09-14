<?php
function searchCityTime($city_name)/* --関数searchCityTimeを作成し、仮引数city_nameを指定する-- */
{
require ('config/cities.php'); /* --変数citiesを作成したcities.phpを、関数requireで読み込む-- */


foreach ($cities as $city) { 
    /* --連想配列の変数citiesの「値」を変数cityに格納し、配列要素0～6まで繰り返す処理をする-- */
    
    if ($city['name'] === $city_name) {
        /* --条件:変数cityのキー:nameが仮引数city_nameに等しくかつ同じ型だった場合-- */
        
        $date_time = new DateTime('', new DateTimeZone($city['time_zone']));
        /* --変数date_timeにDateTimeクラスのインスタンスを作成し、代入。
        　　更にDateTimeのインスタンスに、変数cityのキー：time_zoneを指定したDateTimeZoneクラスをインスタンスする-- */ 
        
        $time = $date_time->format('H:i'); 
        /* --変数timeに変数date_timeのフォーマットを設定するし代入する-- */
        
        $city['time'] = $time; 
        /* --変数cityにキー:time、値:$timeを配列に追加する-- */
        
        return $city; 
        /* --返り値(戻り値)を指定する-- */
    
    }/* --if文の処理はここまで-- */
    
}/* --繰り返し文foreach文の処理はここまで-- */

}/* --関数searchCityTimeここまで-- */


/* --関数searchCityTimeに
　　if文『もし変数city「name」が変数cities_nameと同じ時』に
　　　　『変数cityにtime_zoneが追加されたキー：time、値:変数timeが代入される。』ということを
　　forearch文『連想配列の変数citisに格納された変数cityをループする』という
　　関数『処理をする』　-- */
?>