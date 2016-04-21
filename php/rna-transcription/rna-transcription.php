<?php

function toRna($dna)
{
  $dna_to_rna = [
    "G" => "C",
    "C" => "G",
    "T" => "A",
    "A" => "U"
  ];

  $result = "";

  for ($i=0; $i < strlen($dna); $i++) {
    $result .= $dna_to_rna[$dna[$i]];
  }

  return $result;
}
