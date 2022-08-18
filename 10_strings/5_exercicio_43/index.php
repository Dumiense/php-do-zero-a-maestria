<?php

$str = "carro - navio - helicoptero - barco - jangada";

$a = explode(" - ", $str);
for ($i=0; $i < count($a); $i++) {
  echo "item: $a[$i] <br>";

}



print_r($a);