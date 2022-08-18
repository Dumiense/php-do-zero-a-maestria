<?php

class Cachorro {

  public $raca ;
  public $cor;
  public $nome;

  function __construct($a, $b, $c){
    $this->raca = $a;
    $this->cor = $b;
    $this->nome =$c;

  }

  public function dados() {
    echo "cachorro da raça $this->raca, $this->cor de nome $this->nome <br>";
  }
}

$dog = new Cachorro("vira lata", "caramelo", "gato" );
$dog->dados();
