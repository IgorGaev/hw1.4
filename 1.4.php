<?php
$city = 'Moscow';
define("LINK", "http://api.openweathermap.org/data/2.5/weather?q=$city&units=metric&APPID=bbc7ff8c01ce37372a6d27feac90261a" );
$data = file_get_contents(LINK);
$weather = json_decode($data, true);

$temperature = $weather['main']['temp'];
$humidity = $weather['main']['humidity'];
$wind_speed = $weather['wind']['speed'];

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Погода в Москве </title>
</head>
<body>
<!--<pre> --><?php //print_r($weather) ?><!-- </pre> ;-->
<h1>Weather in <?php echo $city?> </h1>
<p>Температура воздуха: <?php echo round($temperature,1) ?> &degC </p>
<p>Влажность: <?php echo $humidity?> %</p>
<p>Скорость ветра: <?php echo $wind_speed?> м/с</p>
</body>
</html>