<?php

function defineCorCarro ($cor = "vermelho") {

  echo "o carro é $cor <br>";


}

$a = defineCorCarro();
$b = defineCorCarro("preto");
$c = defineCorCarro("branco");
$d = defineCorCarro();




print_r($a);
print_r($b);
print_r($c);
print_r($d);