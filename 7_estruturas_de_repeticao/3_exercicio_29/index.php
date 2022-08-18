<?php

$aa =[10,20,30,40,50,60,70,80,90,100];

$n = 0;
$end = count($aa);

while ($n < $end || $n < 10) {
  if($n == 2 || $n== 3){
    $n++;
    continue;
  }
  echo "$aa[$n] <br>";
  $n++;

}