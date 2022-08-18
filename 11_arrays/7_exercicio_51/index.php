<?php

$arr = ["mateus" => 25, "deb" => 1, "joao" => 69];

arsort($arr);


?>

<h1> ranking </h1>

<ol>
  <?php foreach ($arr as $pessoa => $pontuacao): ?>
    <li>
      <?= $pessoa ?> -> <?= $pontuacao ?> pontos 
    </li>
  
    <?php endforeach; ?>
</ol>