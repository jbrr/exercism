<?php

function isLeap($year)
{
  switch($year) {
    case $year % 400 == 0:
      return true;
      break;
    case $year % 4 == 0 && $year % 100 == 0:
      return false;
      break;
    case $year % 4 == 0:
      return true;
      break;
    default:
      return false;
      break;
  }
}
