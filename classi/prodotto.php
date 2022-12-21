<?php

include_once __DIR__ . '/generi.php';

class Prodotto{
  public $nome;
  public $autore;
  public $prezzo;
  public $generi;
  public $pubblicato;
  public $immagine;

  public function __construct(
    String $nome,
    String $autore,
    Float $prezzo,
    Generi $generi,
    Bool $pubblicato,
    String $immagine
    ) {
    $this->nome = $nome;
    $this->autore = $autore;
    $this->prezzo = $prezzo;
    $this->generi = $generi;
    $this->pubblicato = $pubblicato;
    $this->immagine = $immagine;
  }

}

?>