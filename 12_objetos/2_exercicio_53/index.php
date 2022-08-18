<?php

class Cachorro {

  function latir(){
    echo "au au <br>";
  }

  function andar(){
    echo "andando <br>";
  }

}

$tobias = new Cachorro;

$tobias -> latir();
$tobias -> andar();