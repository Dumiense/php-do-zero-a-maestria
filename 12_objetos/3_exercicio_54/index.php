<?php

class Pessoa {

  public $nome;
  public $idade;
  function andar ($m){
    echo "$m metros andados <br>";
  }

}

$deb = new Pessoa;
$deb -> idade= 15;

echo $deb -> idade; 
$deb ->andar(10);