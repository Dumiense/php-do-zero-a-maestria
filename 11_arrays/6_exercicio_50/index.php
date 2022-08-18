<?php

$arr = ["mateus"=> 19, "eduarda" => 16, "henrique" => 17, "sofia" => 14 ];



?>

<h1> idades </h1>

<table>
  <tr> <?= $arr["mateus"] ?> </tr>
  <tr> <?= $arr["eduarda"] ?> </tr>
  <tr> <?= $arr["henrique"] ?> </tr>
  <tr> <?= $arr["sofia"] ?> </tr>
</table>