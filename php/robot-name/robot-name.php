<?php

class Robot
{
  var $name;

  public function getName() {
    if(!isset($this->name)) {
      $name = "";

      $a_z = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

      $name .= $a_z[rand(0, 25)];
      $name .= $a_z[rand(0, 25)];
      $name .= rand(0, 9);
      $name .= rand(0, 9);
      $name .= rand(0, 9);
      $this->name = $name;
    }

    return $this->name;
  }

  public function reset()
  {
    $this->name = null;
  }
}
