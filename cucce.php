<?php
class Cucce extends Prodotto
{
    public $dimensione;
    public $materiale;

    public function __construct($nome, $descrizione, $prezzo, $categoria, $dimensione, $materiale)
    {
        parent::__construct($nome, $descrizione, $prezzo, $categoria);
        $this->dimensione = $dimensione;
        $this->materiale = $materiale;
    }
}
$prodotto1 = new Cucce("Cuccia in legno", "Cuccia in legno per cani di piccola taglia", 50, "60x40x50cm", "legno", "Cani");
$prodotto2 = new Cucce("Cuccia in plastica", "Cuccia in plastica per gatti", 30, "50x35x40cm", "plastica", "Gatti");
$prodotto3 = new Cucce("Cuccia in tessuto", "Cuccia in tessuto per animali domestici", 40, "50x35x40cm", "tessuto", "Gatti");

$prodotti = [$prodotto1, $prodotto2, $prodotto3];
?>