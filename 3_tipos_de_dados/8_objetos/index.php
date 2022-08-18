<?php

class pessoa {

  function falar(){
    echo "estou falando!";
  }

}

$juliano = new pessoa();

$juliano-> nome='juliano';

echo $juliano->nome;
$juliano-> falar();
