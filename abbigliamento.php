<?php

include_once 'prodotto.php';

class Abbigliamento extends Prodotto {
    public $tessuto;
    public $sesso;

    public function __construct($_nome, $_prezzo){
        parent::__construct($_nome, $_prezzo);
    }
}


 ?>
