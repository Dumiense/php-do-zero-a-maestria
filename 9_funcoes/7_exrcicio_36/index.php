<?php

$arr = [2,3,5,7,9];
$b = [];

function prims($a) {

  $b = [];

  for ($i=0 ; $i< count($a) ; $i++) {
    
    if ($a[$i] > 7) {
     
      array_push($b, $a[$i] );
      

    }
  }
  return $b;

}

$end = prims($arr);
print_r($end);