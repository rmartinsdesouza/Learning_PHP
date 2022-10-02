<?php

$temp = -50;

while ($temp <= 50) {
    printf("Temp:" . $temp . "  =>  %0.2f". "ºC</br>", ((($temp - 32) * 5 ) / 9) );
    $temp += 1;
 }




?>