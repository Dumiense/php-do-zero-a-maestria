<?php

class Humano {

  public $olhos;
  public $braços = 2;
  public $cor;
  function falar(){
    echo "ola mundo <br>";
  }
}

class Professor extends Humano {


  public $materia = "historia";
  function ensinar() {
    echo "estou ensinando $this->materia <br>";

  }


}

$ze = new Professor;
$ze->olhos = "azul";
$ze->cor  = "preto";


echo "$ze->cor <br>";
echo "$ze->materia <br>";

$ze->falar();
$ze->ensinar();
