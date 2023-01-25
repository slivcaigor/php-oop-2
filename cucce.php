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

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getDescrizione(): string
    {
        return $this->descrizione;
    }

    public function getPrezzo(): string
    {
        return $this->prezzo;
    }

    public function getDimensione(): string
    {
        return $this->dimensione;
    }
    public function getMateriale(): string
    {
        return $this->materiale;
    }
}
$prodotto1 = new Cucce("Cuccia in legno", "Cuccia in legno per cani di piccola taglia", 50, "60x40x50cm", "legno");
$prodotto2 = new Cucce("Cuccia in plastica", "Cuccia in plastica per gatti", 30, "50x35x40cm", "plastica");
$prodotto3 = new Cucce("Cuccia in tessuto", "Cuccia in tessuto per animali domestici", 40, "50x35x40cm", "tessuto");

$prodotti = [$prodotto1, $prodotto2, $prodotto3];
?>