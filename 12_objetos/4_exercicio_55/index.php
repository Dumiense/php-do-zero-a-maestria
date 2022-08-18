<?php

class Carro {

  public $cor;
  public $marca;
  public $velocidade_maxima;
  function setVelocidadeMaxima($x) {
    $this -> velocidade_maxima = $x;

  }
  function getVelocidadeMaxima() {
    echo " a velocidade m. é $this->velocidade_maxima ";
  }
}

$car = new Carro;
$car -> setVelocidadeMaxima(299);
$car -> getVelocidadeMaxima();

