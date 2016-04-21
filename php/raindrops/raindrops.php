<?php

function raindrops($num)
{
  $result = "";

  $raindrops_array = [
    3 => "Pling",
    5 => "Plang",
    7 => "Plong"
  ];

  foreach ($raindrops_array as $key => $value) {
    if ($num%$key == 0)
      $result .= $value;
  }

  if (strlen($result) == 0)
    return "$num";
  else
    return $result;
}
