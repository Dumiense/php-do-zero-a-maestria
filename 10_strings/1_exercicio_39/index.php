<?php

$arr = [" carro" => 25000 , " sofá" => 2000 , "cafeteira" => 300 , " carteira" => 8 ];

foreach ($arr as $p => $n) {

  if ($n < 10) {
    echo "$p custa somente R$$n,00 reais <br>";

  }
}