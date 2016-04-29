<?php

function toDecimal($num) {
  $dec = 0;
  $num = strrev($num);
  for ($i=0; $i < strlen($num); $i++) {
    if ($num[$i] > 2){
      $dec = 0;
      break;
    } else {
      $dec += $num[$i] * (3 ** ($i));
    }
  }
  return $dec;
}
