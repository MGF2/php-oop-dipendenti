<?php
require_once 'classes/dipendenti.php';

$nuovoDipendente = new Dipendenti('15324','Mario','Dessi', 'via tot');
var_dump($nuovoDipendente);

$nuovoDipendente2 = new Dipendenti('8544','','', 'via tot');
var_dump($nuovoDipendente2);

$nuovoDipendente2->setNome('Gianni');
echo $nuovoDipendente2->getNome();
$nuovoDipendente2->setCognome('Rodari');
echo $nuovoDipendente2->getCognome();

$nuovoDipendente2->setContratto('part');
echo $nuovoDipendente2->getContratto();

$nuovoDipendente->setContratto('f');
echo $nuovoDipendente->getContratto();

var_dump($nuovoDipendente);
var_dump($nuovoDipendente2);

 ?>
