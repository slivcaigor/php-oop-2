<?php
class Gioco extends Prodotto
{
    public $dimensione;

    public function __construct($nome, $descrizione, $prezzo, $dimensione)
    {
        parent::__construct($nome, $descrizione, $prezzo);
        $this->dimensione = $dimensione;
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
}
$gioco1 = new Gioco("Palla in gomma", "Palla in gomma per cani", 5, "diametro 8cm");
$gioco2 = new Gioco("Tunnel per gatti", "Tunnel per gatti in tessuto", 20, "lunghezza 120cm");
$gioco3 = new Gioco("Puzzle per uccelli", "Puzzle in legno per uccelli domestici", 15, "20x20x20cm");

$giochi = [$gioco1, $gioco2, $gioco3];
?>