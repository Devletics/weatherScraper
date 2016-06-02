<?php


$city=$_GET['city'];

$city=str_replace(" ", "", $city);

$contents = file_get_contents("http://www.weather-forecast.com/locations/Salt-Lake-City/forecasts/latest");

preg_match('/3 Day Weather Forecast Summary:<\/b><span class="phrase">(/*?)</s', $contents, $matches); //this is extracting our piece of information


echo $matches[1];


?>
