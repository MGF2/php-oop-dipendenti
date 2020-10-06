<?php
require_once 'classes/dipendenti.php';

// $nuovoDipendente = new Dipendenti(15324,'Mario','Dessi', 'via tot', 'isbvisb@g.');
// var_dump($nuovoDipendente);
//
// $nuovoDipendente2 = new Dipendenti(8544,'no','no', 'via tot', 'schbfiws@.c');
// var_dump($nuovoDipendente2);
//
// $nuovoDipendente2->setNome('Gianni');
// echo $nuovoDipendente2->getNome();
// $nuovoDipendente2->setCognome('Rodari');
// echo $nuovoDipendente2->getCognome();
//
// $nuovoDipendente2->setContratto('part');
// echo $nuovoDipendente2->getContratto();

try {
  $nuovoDipendente3 = new Dipendenti(24585,'Mia','Pera','st.da tre','gmail@mail.com', 'NCUS12825V5VSFEE');
  var_dump($nuovoDipendente3);
} catch (Exception $e) {
    echo 'Eccezione: ' . $e->getMessage();
}
