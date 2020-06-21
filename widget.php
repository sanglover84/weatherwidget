<!DOCTYPE html>
<html><head>
<title>Weather Widget</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">

<style>
    #widg{
        position:absolute;
        width: 60%;
        left: 18%;
        right: 18%;
      margin: 2%;
    }
</style>
</head>
<body>

<?php
$user_ip = getenv('REMOTE_ADDR');
$geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
$country = $geo["geoplugin_countryName"];
$city = $geo["geoplugin_city"];


$apikey = <>




$VARIABLE1 = fopen("https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$apikey&units=metric", "r");
$VARIABLE2 = stream_get_contents($VARIABLE1);
fclose($VARIABLE1);
$arr= json_decode($VARIABLE2);
//echo $arr->weather[0]->id;
//print "<br><br><i>";
//print $VARIABLE2;

print "<div class='w3-card-4' id='widg'>";

print "<header class='w3-container w3-flat-pomegranate'>";
print "<h1 id='demo'>";
echo $arr->name;
print ", ";
echo $arr->sys->country;

print "</h1>";
print "</header>";

print "<div class='w3-container w3-center w3-text-dark-gray'>";

 $icon = $arr->weather[0]->id;
print "<div id='icon'>";
if ($icon == 200 || $icon == 202 || $icon == 210 || $icon == 211 || $icon == 212 || $icon == 221 || $icon == 230 || $icon == 231 || $icon == 232) {
    print "<img src='http://openweathermap.org/img/wn/10d@2x.png'>";
} elseif ($icon == 300 || $icon == 301 || $icon == 302 || $icon == 310 || $icon == 311 || $icon == 312 || $icon == 313 || $icon == 314 || $icon == 321) {
    print "<img src='http://openweathermap.org/img/wn/09d@2x.png'>";
} elseif 
    ($icon == 500 || $icon == 501 || $icon == 502 || $icon == 503 || $icon == 504 || $icon == 511 || $icon == 520 || $icon == 521 || $icon == 522 || $icon == 531) {
        print "<img src='http://openweathermap.org/img/wn/10d@2x.png'>";
} elseif ($icon == 600 || $icon == 601 || $icon == 602 || $icon == 611 || $icon == 612 || $icon == 613 || $icon == 615 || $icon == 616 || $icon == 620 || $icon == 621 || $icon == 622) {
    print "<img src='http://openweathermap.org/img/wn/13d@2x.png'>";
} elseif  ($icon == 701 || $icon == 711 || $icon == 721 || $icon == 731 || $icon == 741 || $icon == 751 || $icon == 761 || $icon == 762 || $icon == 771 || $icon == 781) {
    print "<img src='http://openweathermap.org/img/wn/50d@2x.png'>";
} elseif ($icon == 800) {
    print "<img src='http://openweathermap.org/img/wn/01d@2x.png'>";
} elseif ($icon == 801) {
    print "<img src='http://openweathermap.org/img/wn/02d@2x.png'>";
  }  elseif ($icon == 802) {
        print "<img src='http://openweathermap.org/img/wn/03d@2x.png'>";
  } elseif ($icon == 803 || $icon == 804) {
      print "<img src='http://openweathermap.org/img/wn/04d@2x.png'>";
} else {
    print "You seem to have no weather";
}
print "</div>";
print "<h3 id='loggo'>";
echo $arr->weather[0]->main;
echo ", ";
echo $arr->weather[0]->description;
print "</h3><h4>";
echo $arr->clouds->all;
print "% cloud coverage / ";
print "Humidity ";
echo $arr->main->humidity;
echo "%</h4>";
// c to f



echo "<span id='temp' data-units='c'>";
print " <h4>Currently ";
echo $arr->main->temp;
$cel1 = $arr->main->temp;
$min = $arr->main->temp_min;
$max = $arr->main->temp_max;
function celToFah(float $degrees)
{
    return $degrees * 1.8 + 32;
}

 $fah1 = celToFah($cel1);
// echo $arr->main->temp;
  $fah1Msg = " <font color='red'>&deg;C</font> <font color='#cccccc'>/</font> $fah1 <font color='blue'>&deg;F</font>";
  //   cel to f
   echo $fah1Msg;
echo "<br> Feels like ";
echo $arr->main->feels_like;
$cel2 = $arr->main->feels_like;
 $fah2 = celToFah($cel2);
  $fmin = celToFah($min);
  $fmax = celToFah($max);
    $fahMsg2 = "$cel2 <font color='red'>&deg;C</font> <font color='#cccccc'>/</font> $fah2 <font color='blue'>&deg;F</font>";
echo $fahMsg2;
echo "<br>Min Temp: ";
echo $min;
echo "<font color='red'>&deg;C</font> <font color='#cccccc'>/</font> ";
echo $fmin;
echo "<font color='blue'>&deg;F</font><br>";
echo "Max Temp: ";
echo $max;
echo "<font color='red'>&deg;C</font> <font color='#cccccc'>/</font> ";
echo $fmax;
echo "<font color='blue'>&deg;F</font><br>";




// end c to f
print "</h4></p></span>";

print "<h4>Wind ";
echo $arr->wind->speed;
print " knots <font color='#cccccc'>/</font> ";
echo $arr->wind->deg;
echo "&deg;";
//
print "</h4></div>";

print "<footer class='w3-container w3-light-gray'>";
//echo $arr->coord->lon;
//echo "<br>";
//echo $arr->coord->lat;

$lon = $arr->coord->lon;
 $lat = $arr->coord->lat;

$apikey = <>



$VARIABLE14 = fopen("https://api.openweathermap.org/data/2.5/onecall?lat=$lat&lon=$lon&exclude=current,minutely,hourly&appid=$apikey", "r");
$VARIABLE24 = stream_get_contents($VARIABLE14);
fclose($VARIABLE14);
$arr4= json_decode($VARIABLE24);






print "<div class='w3-row'>";
 print "<div class='w3-col w3-padding w3-light-gray' style='width:20%;'><h5><strong>";

 // weather 1
$ts = $arr4->daily[0]->dt;
$date1 = date("Y-m-d H:i", $ts);
$date2 = DateTime::createFromFormat("U", $ts)->setTimeZone(new DateTimeZone(date_default_timezone_get()))->format("F j, Y");
//$date1===$date2
 echo $date2;
echo "</strong></h5><b>";
echo $arr4->daily[0]->weather[0]->main;
echo "</b>, ";
echo $arr4->daily[0]->weather[0]->description;
$tempmin = $arr4->daily[0]->temp->min;
$tempmax = $arr4->daily[0]->temp->max;

// kelven to celcius
// kelvin - 273.15 = celcius
$kToC = $tempmin - 273.15;
$kToCM = $tempmax - 273.15;
print "<br>Min ";
echo $kToC;
echo "&deg;C <br>Max: ";
echo $kToCM;
echo "&deg;C<br>";
echo "Humidity: ";
echo $arr4->daily[0]->humidity;
echo "%<br> Rain: ";
echo $arr4->daily[0]->rain;
echo "mm <br>UV: ";
echo $arr4->daily[0]->uvi;

// end weather 1
print "  </div>";



 print "<div class='w3-col w3-w3-padding w3-light-gray' style='width:20%;'>";
 // weather 2

 echo "<h5><strong>";
$ts = $arr4->daily[1]->dt;
$date1 = date("Y-m-d H:i", $ts);
$date2 = DateTime::createFromFormat("U", $ts)->setTimeZone(new DateTimeZone(date_default_timezone_get()))->format("F j, Y");
//$date1===$date2
 echo $date2;
echo "</strong></h5><b>";
echo $arr4->daily[1]->weather[0]->main;
echo "</b>, ";
echo $arr4->daily[1]->weather[0]->description;
$tempmin = $arr4->daily[1]->temp->min;
$tempmax = $arr4->daily[1]->temp->max;

// kelven to celcius
// kelvin - 273.15 = celcius
$kToC = $tempmin - 273.15;
$kToCM = $tempmax - 273.15;
print "<br>Min ";
echo $kToC;
echo "&deg;C <br>Max: ";
echo $kToCM;
echo "&deg;C<br>";
echo "Humidity: ";
echo $arr4->daily[1]->humidity;
echo "%<br> Rain: ";
echo $arr4->daily[1]->rain;
echo "mm <br>UV: ";
echo $arr4->daily[1]->uvi;

// end weather 2


 print " </div>";
 print "<div class='w3-col w3-padding w3-light-gray' style='width:20%;'>";

 // weather 3
 echo "<h5><strong>";
$ts = $arr4->daily[2]->dt;
$date1 = date("Y-m-d H:i", $ts);
$date2 = DateTime::createFromFormat("U", $ts)->setTimeZone(new DateTimeZone(date_default_timezone_get()))->format("F j, Y");
//$date1===$date2
 echo $date2;
echo "</strong></h5><b>";
echo $arr4->daily[2]->weather[0]->main;
echo "</b>, ";
echo $arr4->daily[2]->weather[0]->description;
$tempmin = $arr4->daily[2]->temp->min;
$tempmax = $arr4->daily[2]->temp->max;

// kelven to celcius
// kelvin - 273.15 = celcius
$kToC = $tempmin - 273.15;
$kToCM = $tempmax - 273.15;
print "<br>Min ";
echo $kToC;
echo "&deg;C <br>Max: ";
echo $kToCM;
echo "&deg;C<br>";
echo "Humidity: ";
echo $arr4->daily[2]->humidity;
echo "%<br> Rain: ";
echo $arr4->daily[2]->rain;
echo "mm <br>UV: ";
echo $arr4->daily[2]->uvi;
// end weather 3

print "  </div>";
 print "<div class='w3-col w3-padding w3-light-gray' style='width:20%;'>";
  // weather 4
 echo "<h5><strong>";
$ts3 = $arr4->daily[3]->dt;
$date1 = date("Y-m-d H:i", $ts3);
$date2 = DateTime::createFromFormat("U", $ts3)->setTimeZone(new DateTimeZone(date_default_timezone_get()))->format("F j, Y");
//$date1===$date2
 echo $date2;
echo "</strong></h5><b>";
echo $arr4->daily[3]->weather[0]->main;
echo "</b>, ";
echo $arr4->daily[3]->weather[0]->description;
$tempmin = $arr4->daily[3]->temp->min;
$tempmax = $arr4->daily[3]->temp->max;

// kelven to celcius
// kelvin - 273.15 = celcius
$kToC = $tempmin - 273.15;
$kToCM = $tempmax - 273.15;
print "<br>Min ";
echo $kToC;
echo "&deg;C <br>Max: ";
echo $kToCM;
echo "&deg;C<br>";
echo "Humidity: ";
echo $arr4->daily[3]->humidity;
echo "%<br> Rain: ";
echo $arr4->daily[3]->rain;
echo "mm <br>UV: ";
echo $arr4->daily[3]->uvi;
// end weather 4
 
print "  </div>";
 print "<div class='w3-col w3-padding w3-light-gray' style='width:20%;'>";
// weather 5
 echo "<h5><strong>";
$ts3 = $arr4->daily[4]->dt;
$date1 = date("Y-m-d H:i", $ts3);
$date2 = DateTime::createFromFormat("U", $ts3)->setTimeZone(new DateTimeZone(date_default_timezone_get()))->format("F j, Y");
//$date1===$date2
 echo $date2;
echo "</strong></h5><b>";
echo $arr4->daily[4]->weather[0]->main;
echo "</b>, ";
echo $arr4->daily[4]->weather[0]->description;
$tempmin = $arr4->daily[4]->temp->min;
$tempmax = $arr4->daily[4]->temp->max;

// kelven to celcius
// kelvin - 273.15 = celcius
$kToC = $tempmin - 273.15;
$kToCM = $tempmax - 273.15;
print "<br>Min ";
echo $kToC;
echo "&deg;C <br>Max: ";
echo $kToCM;
echo "&deg;C<br>";
echo "Humidity: ";
echo $arr4->daily[4]->humidity;
echo "%<br> Rain: ";
echo $arr4->daily[4]->rain;
echo "mm <br>UV: ";
echo $arr4->daily[4]->uvi;

// end weather 5
 print " </div>";
 
print "</div>";



print "</footer>";
print "</div>";


?>


 
</body>
</html>
