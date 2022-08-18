<?php

$caracs=  ['nome' => 'juliano' , 'idade' => 18 , 'altura' => 1.65 , 'profissao' => 'feia em tempo integral'];

$n = $caracs['nome'];
$i = $caracs['idade'];

print_r($caracs);
echo "<br>";
echo " $n  tem $i anos";
echo "<br>";

if ($i < 18) {
  echo "atenção, $n é menor de idade!";
}