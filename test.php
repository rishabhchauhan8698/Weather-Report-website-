<?php

 $string = "http://api.openweathermap.org/data/2.5/weather?q=srinagar&appid=60cfdb775b698374d9487c630f0e4576";
 $data = json_decode(file_get_contents($string),true);

  echo "<img src='http://openweathermap.org/img/w/".$data['weather'][0]['icon'].".png'>";
 
?>