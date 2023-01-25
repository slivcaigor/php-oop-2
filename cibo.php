<?php
class Cibo extends Prodotto
{
    public $marca;
    public $etaAnimale;
    public $quantitaConfezione;

    public function __construct($nome, $descrizione, $prezzo, $categoria, $marca, $etaAnimale, $quantitaConfezione)
    {
        parent::__construct($nome, $descrizione, $prezzo, $categoria);
        $this->marca = $marca;
        $this->etaAnimale = $etaAnimale;
        $this->quantitaConfezione = $quantitaConfezione;
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

    public function getMarca(): string
    {
        return $this->marca;
    }

    public function getEtaAnimale(): string
    {
        return $this->etaAnimale;
    }

    public function getQuantitaConfezione(): string
    {
        return $this->quantitaConfezione;
    }

    public function getCategoria(): string
    {
        return $this->categoria;
    }
}

$cibo1 = new Cibo("Optimanova Adult", "All Breeds Salmone e Patate", 70, "Optima", "Adulto", 12, "Cane");
$cibo2 = new Cibo("Crocchette Super Premium", "Ricca di ingredienti di origine animale", 41, "Ultra Premium Direct", "Media", 12, "Cane");
$cibo3 = new Cibo("PURINA ONE BIFENSIS", "Crocchette Gatto Appetito Difficile Ricco in Merluzzo con Trota", 9, "Purina", "Adulto", 2, "Gatto");

$cibi = [$cibo1, $cibo2, $cibo3];
?>