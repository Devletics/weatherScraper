<?php

$contents = file_get_contents("http://www.weather-forecast.com/locations/Salt-Lake-City/forecasts/latest");

preg_match("/3 Day Weather Forecast Summary:/i", $contents, $matches); //this is extracting our piece of information
echo '<pre>';
print_r($matches);
echo '</pre>';
 ?>
