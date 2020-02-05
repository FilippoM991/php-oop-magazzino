<?php

class Prodotto {
    public $nome;
    public $prezzo;
    public $quantita;
    public $peso;

    public function stampaNomePrezzo(){
        echo "Nome prodotto: " . $this->nome . "<br>" . "Prezzo: " .  $this->prezzo . " euro" . "<br>";
    }
    public function calcolaSconto($perc_sconto){
        $sconto= $this->prezzo * $perc_sconto / 100;
        $prezzo_scontato = $this->prezzo - $sconto;
        return $prezzo_scontato;

    }
    public function __construct($_nome, $_prezzo){
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
    }
}

 ?>
