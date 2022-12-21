<?php

include_once __DIR__ . '/prodotto.php';

class Dvd extends prodotto {
  

  public $durata;
  public $dvdName;
  public function __construct(
    String $nome,
    String $autore,
    Float $prezzo,
    Generi $generi,
    Bool $pubblicato,
    String $immagine,

    Float $durata,
    String $dvdName
    
    ) {
    
    $this->durata = $durata;
    $this->dvdName = $dvdName;    
    parent::__construct($nome,$autore,$prezzo,$generi,$pubblicato,$immagine );
  }
}
?>