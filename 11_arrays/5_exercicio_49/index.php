<?php



$patas = 4;
$nome = "toby";
$cor = "transparente";

$arr = compact("patas", "nome", "cor");

for ($i=0; $i < count($arr); $i++) {

  echo " $arr[$i] <br>";

}