<?php

function squareOfSums($num)
{
  $result = 0;

  do {
    $result += $num;
    $num -= 1;
  } while ($num > 0);

  return $result**2;
}

function sumOfSquares($num)
{
  $result = 0;

  do {
    $result += $num**2;
    $num -= 1;
  } while ($num > 0);

  return $result;
}

function difference($num)
{
  return squareOfSums($num) - sumOfSquares($num);
}
