<?php

class Game {
  var $totalPins = [];

  function roll($pins) {
    array_push($this -> totalPins, $pins);
    if ($pins == 10) {
      array_push($this -> totalPins, 0);
    }
  }

  function score() {
    for ($i=0; $i < count($this -> totalPins); $i++) {
      if ($this -> totalPins[$i] == 10) {
        $strikeScore = array_sum(array_slice($this -> totalPins, $i + 2, $i + 3));
        $this -> totalPins[$i] += $strikeScore;
      }
    }
    return array_sum($this -> totalPins);
  }
}
