<?php

include_once __DIR__ . '/prodotto.php';

class Cd extends prodotto {


  public $cdName;

  public function __construct(
    String $nome,
    String $autore,
    Float $prezzo,
    Generi $generi,
    Bool $pubblicato,
    String $immagine,



    Int $cdName

    ) {

    $this->cdName = $cdName;
    parent::__construct($nome,$autore,$prezzo,$generi,$pubblicato,$immagine );
    }
}
?>