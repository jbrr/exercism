<?php

class Game {
  var $totalPins = [];

  function roll($pins) {
    if ($pins == 10) {
      array_push($this -> totalPins, 10);
    } elseif (end($this -> totalPins) + $pins == 10 && (key($this -> totalPins) % 2 == 0) ) {
      // var_dump($this -> totalPins);
      array_push($this -> totalPins, "/");
    } else {
      array_push($this -> totalPins, $pins);
    }
  }

  function score() {
    var_dump($this -> totalPins);
    for ($i=0; $i < count($this -> totalPins); $i++) {
      if ($this -> totalPins[$i] == 10) {
        $strikeScore = array_sum(array_slice($this -> totalPins, $i + 1, $i + 2));
        $this -> totalPins[$i] += $strikeScore;
      }
      if ($this -> totalPins[$i] === "/") {
        $spareScore = @$this -> totalPins[$i + 1];
        $spareScore += (10 - $this -> totalPins[$i - 1]);
        $this -> totalPins[$i] = $spareScore;
      }
    }
    // var_dump($this -> totalPins);
    return array_sum($this -> totalPins);
  }
}
