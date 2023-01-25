<?php
class Gioco extends Prodotto
{
    public $dimensione;

    public function __construct($nome, $descrizione, $prezzo, $categoria, $dimensione)
    {
        parent::__construct($nome, $descrizione, $prezzo, $categoria);
        $this->dimensione = $dimensione;
    }
}
$gioco1 = new Gioco("Palla in gomma", "Palla in gomma per cani", 5, "diametro 8cm", "Cani");
$gioco2 = new Gioco("Tunnel per gatti", "Tunnel per gatti in tessuto", 20, "lunghezza 120cm", "Gatti");
$gioco3 = new Gioco("Activity Fun Board", "Gioco d'intelligenza per tutti i gatti", 25, "30x40cm", "Gatti");

$giochi = [$gioco1, $gioco2, $gioco3];
?>