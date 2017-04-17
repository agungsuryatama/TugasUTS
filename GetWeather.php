<?php
   // error_reporting (E_ALL^ (E_NOTICE|E_WARNING));
    //$QueryState = $_GET['state'];
    //$QueryCity = str_replace(' ', '_', $_GET['city']);

    $json_string = file_get_contents("http://api.wunderground.com/api/a657d7d2ba430b38/conditions/q/ID/mugassari.json");   
    $json_a = json_decode($json_string);

    $json_string = file_get_contents("http://api.wunderground.com/api/a657d7d2ba430b38/forecast10day/q/ID/mugassari.json");   
    $json_b = json_decode($json_string);

        //pencarian variabel
    $lctn = $json_a->{"current_observation"}->{"display_location"}->{"city"};
    $lctn2 = $json_a->{"current_observation"}->{"observation_location"}->{"city"};
    $lctn3 = $json_a->{"current_observation"}->{"observation_location"}->{"country"};
    $hari5 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"date"}->{"weekday"};
	$pressure = $json_a->{"current_observation"}->{"pressure_mb"};

    $hari = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"date"}->{"monthname"};
    $hari1 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"date"}->{"day"};
    $hari2 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"date"}->{"year"};
    $hari3 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"date"}->{"hour"};
    $hari4 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"date"}->{"min"};
    $hari6 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"conditions"};
    $hari7 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"icon"};
    $hari8 = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"low"}->{"fahrenheit"};
    
    

        //eksekusi variabel
    echo "<h3><center>${lctn} ${lctn2} City , ${lctn3} \n</center></h3>";
    echo "<center>${hari5}</center> \n";
    echo "<br>";
    echo "<center>${hari6}</center> \n";
    echo "<br>";
	echo "<center>Tekanan Udara ${pressure}</center>";
	echo "<br>";
    echo "<center><img src='http://icons.wxug.com/i/c/k/" . $hari7 . ".gif'></center><br/>";
    echo "<center><h3>${hari8} F|C\n</center></h3>";
    echo "<br>";
    echo "<center>Hari ini : ${hari} ${hari1}, ${hari2}  </center>\n";

   
    
	

?>