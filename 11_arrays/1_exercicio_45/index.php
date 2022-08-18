<?php

$arr = range(10, 45);
$arrsom = [];

for ($i =0; $i < count($arr); $i++) {

  if ($arr[$i] %6 === 0) { 
    
    $arrsom [] = $arr[$i]; 

    if ( $arr[$i] > 30) {
    echo "o número $arr[$i] é muito alto <br>";
  }
}


  }

print_r($arrsom);