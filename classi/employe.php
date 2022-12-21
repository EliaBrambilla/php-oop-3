<?php

class Employe {
  public $nome;
  public $immagine;
  public $eta;
  public $role;
  public $gender;


  public function __construct(

    String $nome,
    String $immagine,
    String $role,
    Int    $eta,
    String $gender


    ) {

    $this->nome = $nome;
    $this->immagine = $immagine;
    $this->role = $role;
    $this->eta = $eta;
    $this->gender = $gender;

    }


}
?>