<?php

include_once __DIR__ . '/prodotto.php';

class libro extends prodotto {
  public $pagine;
  public $copertina;

  public function __construct(
    String $nome,
    String $autore,
    Float $prezzo,
    Generi $generi,
    Bool $pubblicato,
    String $immagine,

    Int $pagine,
    String $copertina
    ) {
    $this->pagine = $pagine;
    $this->copertina = $copertina;
    parent::__construct($nome,$autore,$prezzo,$generi,$pubblicato,$immagine );
  }
}

?>