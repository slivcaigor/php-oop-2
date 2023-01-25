<?php
class Cucce extends Prodotto
{
    public $dimensione;
    public $materiale;

    public function __construct($nome, $descrizione, $prezzo, $dimensione, $materiale)
    {
        parent::__construct($nome, $descrizione, $prezzo);
        $this->dimensione = $dimensione;
        $this->materiale = $materiale;
    }
}
?>