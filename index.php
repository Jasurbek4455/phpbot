<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#5d80a6">
<link rel="apple-touch-icon-precomposed" href="/inc/style/img/app-icon.png">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="/inc/style/style.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Хостинг, Посуточный оплата, Xvest.Ru Мобильный Хостинг,Мобильный Хостинг,Xvest.Ru, php 7, ffmpeg, GD,(pdo) MySQL(i), sqlite, Curl,IonCube, выбор версии php"/>
<meta name="description" content="Хостинг от Xvest – качественный веб hosting сайтов c круглосуточной поддержкой. Надежный linux хостинг в Азие PRAKUROR"/> 
<meta name="author" content="PRAKUROR"/>
<meta name="copyright" content="PRAKUROR system!"/>
<meta http-equiv="content-language" content="ru"/>
<title>Менеджер Файлов</title></head><body> <header>
         <table>
            <tr>
               <td class="l_bar">
<a href="/"><img src="/inc/style/img/home.png" width="23"  alt="home"></a>
               </td>
               <td class="c_bar">
                  <h1 id="logo"><b>Xvest.Ru - Sayt menedjeri</b></h1>
               </td>
               <td class="r_bar">
<a href="/user/menu" title="Кабинет"><img width="25" src="/img/us2.png" alt="Кабинет"></a>
</td> </tr>
         </table>
      </header><div class="mOm"><div class="block first"><?php
$be=file_get_contents("https://obhavo.uz/urgench/");
$ex=explode("\n",$be);

$hkun=str_replace("<strong>","",$ex[155]);
$hkun=str_replace("</strong>","",$hkun);
$hkun=str_replace(">","",$hkun);
$hkun = trim($hkun);

$hsana=str_replace("<div>","",$ex[156]);
$hsana=str_replace("</div>","",$hsana);
$hsana=str_replace("</td","",$hsana);
$hsana=str_replace(">","",$hsana);
$hsana = trim($hsana);

$day=str_replace('<span class="forecast-day">','',$ex[166]);
$day=str_replace('</span>','',$day);
$day = trim($day);

$night=str_replace('<span class="forecast-night">','',$ex[167]);
$night=str_replace('</span>','',$night);
$night = trim($night);

$havo=str_replace('<td class="weather-row-desc">','',$ex[170]);
$havo=str_replace('</td>','',$havo);
$havo = trim($havo);

$yogin=str_replace('<td class="weather-row-pop">','',$ex[173]);
$yogin=str_replace('</td>','',$yogin);
$yogin = trim($yogin);

$hkun2=str_replace("<strong>","",$ex[178]);
$hkun2=str_replace("</strong>","",$hkun2);
$hkun2 = trim($hkun2);

$hsana2=str_replace("<div>","",$ex[179]);
$hsana2=str_replace("</div>","",$hsana2);
$hsana2 = trim($hsana2);

$day2=str_replace('<span class="forecast-day">','',$ex[189]);
$day2=str_replace('</span>','',$day2);
$day2 = trim($day2);

$night2=str_replace('<span class="forecast-night">','',$ex[190]);
$night2=str_replace('</span>','',$night2);
$night2 = trim($night2);

$havo2=str_replace('<td class="weather-row-desc">','',$ex[193]);
$havo2=str_replace('</td>','',$havo2);
$havo2 = trim($havo2);

$yogin2=str_replace('<td class="weather-row-pop">','',$ex[196]);
$yogin2=str_replace('</td>','',$yogin2);
$yogin2 = trim($yogin2);

$hkun3=str_replace("<strong>","",$ex[201]);
$hkun3=str_replace("</strong>","",$hkun3);
$hkun3 = trim($hkun3);

$hsana3=str_replace("<div>","",$ex[202]);
$hsana3=str_replace("</div>","",$hsana3);
$hsana3 = trim($hsana3);

$day3=str_replace('<span class="forecast-day">','',$ex[212]);
$day3=str_replace('</span>','',$day3);
$day3 = trim($day3);

$night3=str_replace('<span class="forecast-night">','',$ex[213]);
$night3=str_replace('</span>','',$night3);
$night3 = trim($night3);

$havo3=str_replace('<td class="weather-row-desc">','',$ex[216]);
$havo3=str_replace('</td>','',$havo3);
$havo3 = trim($havo3);

$yogin3=str_replace('<td class="weather-row-pop">','',$ex[219]);
$yogin3=str_replace('</td>','',$yogin3);
$yogin3 = trim($yogin3);

$hkun4=str_replace("<strong>","",$ex[224]);
$hkun4=str_replace("</strong>","",$hkun4);
$hkun4 = trim($hkun4);

$hsana4=str_replace("<div>","",$ex[225]);
$hsana4=str_replace("</div>","",$hsana4);
$hsana4 = trim($hsana4);

$day4=str_replace('<span class="forecast-day">','',$ex[235]);
$day4=str_replace('</span>','',$day4);
$day4 = trim($day4);

$night4=str_replace('<span class="forecast-night">','',$ex[236]);
$night4=str_replace('</span>','',$night4);
$night4 = trim($night4);

$havo4=str_replace('<td class="weather-row-desc">','',$ex[239]);
$havo4=str_replace('</td>','',$havo4);
$havo4 = trim($havo4);

$yogin4=str_replace('<td class="weather-row-pop">','',$ex[242]);
$yogin4=str_replace('</td>','',$yogin4);
$yogin4 = trim($yogin4);

$hkun5=str_replace("<strong>","",$ex[247]);
$hkun5=str_replace("</strong>","",$hkun5);
$hkun5 = trim($hkun5);
$hkun5=str_replace("</strong>","",$hkun5);

$hsana5=str_replace("<div>","",$ex[248]);
$hsana5=str_replace("</div>","",$hsana5);
$hsana5=str_replace("</td>","",$hsana5);
$hsana5=str_replace("</strong>","",$hsana5);
$hsana5 = trim($hsana5);

$day5=str_replace('<span class="forecast-day">','',$ex[258]);
$day5=str_replace('</span>','',$day5);
$day5 = trim($day5);

$night5=str_replace('<span class="forecast-night">','',$ex[259]);
$night5=str_replace('</span>','',$night5);
$night5 = trim($night5);

$havo5=str_replace('<td class="weather-row-desc">','',$ex[262]);
$havo5=str_replace('</td>','',$havo5);
$havo5 = trim($havo5);

$yogin5=str_replace('<td class="weather-row-pop">','',$ex[265]);
$yogin5=str_replace('</td>','',$yogin5);
$yogin5 = trim($yogin5);

$hkun6=str_replace("<strong>","",$ex[270]);
$hkun6=str_replace("</strong>","",$hkun6);
$hkun6 = trim($hkun6);

$hsana6=str_replace("<div>","",$ex[271]);
$hsana6=str_replace("</div>","",$hsana6);
$hsana6=str_replace("</td>","",$hsana6);
$hsana6 = trim($hsana6);

$day6=str_replace('<span class="forecast-day">','',$ex[281]);
$day6=str_replace('</span>','',$day6);
$day6 = trim($day6);

$night6=str_replace('<span class="forecast-night">','',$ex[282]);
$night6=str_replace('</span>','',$night6);
$night6 = trim($night6);

$havo6=str_replace('<td class="weather-row-desc">','',$ex[285]);
$havo6=str_replace('</td>','',$havo6);
$havo6 = trim($havo6);

$yogin6=str_replace('<td class="weather-row-pop">','',$ex[288]);
$yogin6=str_replace('</td>','',$yogin6);
$yogin6 = trim($yogin6);

$hkun7=str_replace("<strong>","",$ex[293]);
$hkun7=str_replace("</strong>","",$hkun7);
$hkun7 = trim($hkun7);

$hsana7=str_replace("<div>","",$ex[294]);
$hsana7=str_replace("</div>","",$hsana7);
$hsana7 = trim($hsana7);

$day7=str_replace('<span class="forecast-day">','',$ex[304]);
$day7=str_replace('</span>','',$day7);
$day7 = trim($day7);

$night7=str_replace('<span class="forecast-night">','',$ex[305]);
$night7=str_replace('</span>','',$night7);
$night7 = trim($night7);

$havo7=str_replace('<td class="weather-row-desc">','',$ex[308]);
$havo7=str_replace('</td>','',$havo7);
$havo7 = trim($havo7);

$yogin7=str_replace('<td class="weather-row-pop">','',$ex[311]);
$yogin7=str_replace('</td>','',$yogin7);
$yogin7 = trim($yogin7);

echo "➖➖➖➖➖➖➖➖\n📆$hkun $hsana\n☀️$day ... $night $havo\n💦Namlik: $yogin\n➖➖➖➖➖➖➖➖\n📆$hkun2 $hsana2\n☀️$day2 ... $night2 $havo2\n💦Namlik: $yogin2\n➖➖➖➖➖➖➖➖\n📆$hkun3 $hsana3\n☀️$day3 ... $night3 $havo3\n💦Namlik: $yogin3\n ➖➖➖➖➖➖➖➖➖➖\n📆$hkun4 $hsana4\n☀️$day4 ... $night4 $havo4\n💦Namlik: $yogin4\n➖➖➖➖➖➖➖➖➖➖\n📆$hkun5 $hsana5\n☀️$day5 ... $night5 $havo5\n💦Namlik: $yogin5\n➖➖➖➖➖➖➖➖➖➖\n📆$hkun6 $hsana6\n☀️$day6 ... $night6 $havo6\n💦Namlik: $yogin6\n➖➖➖➖➖➖➖➖➖➖\n📆$hkun7 $hsana7\n☀️$day7 ... $night7 $havo7 \n💦Namlik: $yogin7\n➖➖➖➖➖➖➖➖➖➖";

?>