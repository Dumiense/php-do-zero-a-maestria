<?php

$arr = [[1,2,3,4],[5,6,7,8],[9,10,11,12],[13,14,15,16]];

for ($i= 0; $i < count($arr); $i++){

  $ar = $arr[$i];
  for ($j=0; $j< count($ar); $j++ ){
  echo " $ar[$j],";
  }
  echo " mudando de array <br>";

}