<?php

$arr = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

$c = 0;
 
$f = count($arr);

for ($c = 0; $c < $f; $c++) {
  if ($arr[$c] % 2 ==0) {
    echo "$arr[$c] <br>";
  }
}