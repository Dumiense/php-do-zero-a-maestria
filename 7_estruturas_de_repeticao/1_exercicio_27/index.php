<?php

$arr = [true, false, 12, "oi", 13.4 , "ola" , 0, "alô" , 12, 24];

$n = 0;

while ($n <10) {
  if (is_string($arr[$n])) {
    echo "$arr[$n] <br>";
  }

  $n++;

}