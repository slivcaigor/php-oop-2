<?php
class Gioco extends Prodotto
{
    public $dimensione;

    public function __construct($nome, $descrizione, $prezzo, $dimensione)
    {
        parent::__construct($nome, $descrizione, $prezzo);
        $this->dimensione = $dimensione;
    }
}
?>