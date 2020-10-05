<?php
  trait GetContratto{
    public $contratto;
    public $ore;

    public function setContratto($_contratto) {
      $this->contratto = $_contratto;
    }

    public function getContratto(){
      if ($this->contratto = 'part') {
        $this->contratto . $this->ore = 20;
      } elseif ($this->contratto = 'full'){
        $this->contratto . $this->ore = 40;
       }
       return $this->contratto . $this->ore;
    }
  }
