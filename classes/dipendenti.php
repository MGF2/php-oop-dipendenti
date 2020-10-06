<?php
require_once __DIR__ .'/../traits/GetContratto.php';

 class Dipendenti {
   use GetContratto;
   protected $codiceDipendente;
   protected $nomeDipendente;
   protected $cognomeDipendente;
   protected $indirizzoDipendente;
   protected $email;
   protected $codiceFiscale;
   public $ruolo;
   public $contratto;

   public function __construct($_codiceDipendente, $_nomeDipendente,$_cognomeDipendente,$_indirizzoDipendente, $_email, $_codiceFiscale) {

     //controlli

     if (is_string($_codiceDipendente)) {
       throw new Exception('Codice dipendente non valido');
     }

     if ( (is_numeric($_nomeDipendente)) || (!is_string($_nomeDipendente)) ){
       throw new Exception('Nome dipendente non valido');
     }

     if (is_numeric($_cognomeDipendente)) {
       throw new Exception('Cognome dipendente non valido');
     }

     if(!filter_var($_email, FILTER_VALIDATE_EMAIL)) {
         throw new Exception('Email non valido');
     }

     if(strlen($_codiceFiscale)<>16 || !is_string($_codiceFiscale)){
         throw new Exception('Codice fiscale errato');
     }

     $this->codiceDipendente = $_codiceDipendente;
     $this->nomeDipendente = $_nomeDipendente;
     $this->cognomeDipendente = $_cognomeDipendente;
     $this->indirizzoDipendente = $_indirizzoDipendente;
     $this->email = $_email;
     $this->codiceFiscale = $_codiceFiscale;

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
       die('cognome non valido');
     } else {
        $this->cognomeDipendente = $_cognomeDipendente;
     }
   }

   public function getCognome() {
     return $this->cognomeDipendente;
   }

 }
