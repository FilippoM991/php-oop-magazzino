<?php

include_once 'prodotto.php';

class Alimentare extends Prodotto {
    public $ingredienti;
    public $scadenza;

    public function __construct($_nome, $_prezzo, $_ingredienti){
        parent::__construct($_nome, $_prezzo);
        $this->ingredienti = $_ingredienti;
    }
}


 ?>
