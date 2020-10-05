<?php
require_once __DIR__ .'/../traits/GetContratto.php';

 class Dipendenti {
   use GetContratto;
   protected $codiceDipendente;
   protected $nomeDipendente;
   protected $cognomeDipendente;
   protected $indirizzoDipendente;
   public $ruolo;
   public $contratto;

   public function __construct($_codiceDipendente, $_nomeDipendente,$_cognomeDipendente,$_indirizzoDipendente) {
     if ( (!empty($this->codiceDipendente)) || (is_nan($this->codiceDipendente)) ) {
       die('Codice dipendente non valido');
     } else {
       $this->codiceDipendente = $_codiceDipendente;
     }

     if (!empty($this->nomeDipendente)) {
       die('Non hai inserito il nome');
     } else {
       $this->nomeDipendente = $_nomeDipendente;
     }

     if (!empty($this->cognomeDipendente)) {
       die('Non hai inserito il cognome');
     } else {
       $this->cognomeDipendente = $_cognomeDipendente;
     }

     if (!empty($this->indirizzoDipendente)) {
       die("Non hai inserito l'indirizzo");
     } else {
       $this->indirizzoDipendente = $_indirizzoDipendente;
     }

   }

   public function setNome($_nomeDipendente) {
     if (is_numeric($this->nomeDipendente)) {
       die('nome non valido');
     } else {
        $this->nomeDipendente = $_nomeDipendente;
     }
   }

   public function getNome() {
     return $this->nomeDipendente;
   }

   public function setCognome($_cognomeDipendente) {
     if (is_numeric($this->nomeDipendente)) {
       die('nome non valido');
     } else {
        $this->cognomeDipendente = $_cognomeDipendente;
     }
   }

   public function getCognome() {
     return $this->cognomeDipendente;
   }

 }
 ?>
