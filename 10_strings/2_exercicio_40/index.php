<?php

$s = "o rato roeu a roupa do rei de roma";
$c = 0;

for ($i = 0; $i < strlen($s); $i++) {

  if ($s[$i] === "a") {
    global $c;
    $c++;
  }
  
}

echo $c;