<?php
include 'alimentare.php';
include 'abbigliamento.php';

$alimentareUno = new Alimentare("Biscotti", 4 , "latte, farina, uova");
// $alimentareUno->nome = 'biscotti';
// $alimentareUno->prezzo = '4';
$alimentareUno->quantita = '20';
$alimentareUno->peso = '500';
$alimentareUno->ingredienti = 'latte, farina, uova';
$alimentareUno->scadenza = '20 aprile 2020';

// var_dump($alimentareUno);
echo "<br>";
$alimentareUno->stampaNomePrezzo();
$scontoAlimentareUno = $alimentareUno->calcolaSconto(20);
echo "Prezzo scontato: ". $scontoAlimentareUno. " euro";
echo "<br>";
echo "Data scadenza: " . $alimentareUno->scadenza;

$abbigliamentoUno = new Abbigliamento("Maglia" ,15);
// $abbigliamentoUno->nome = 'maglia';
// $abbigliamentoUno->prezzo = '15';
$abbigliamentoUno->quantita = '12';
$abbigliamentoUno->peso = '600';
$abbigliamentoUno->tessuto = 'cotone';
$abbigliamentoUno->sesso = 'uomo';

echo "<br>";
$abbigliamentoUno->stampaNomePrezzo();
$scontoAbbigliamentoUno = $abbigliamentoUno->calcolaSconto(20);
echo "Prezzo scontato: ". $scontoAbbigliamentoUno. " euro";
echo "<br>";


 ?>
