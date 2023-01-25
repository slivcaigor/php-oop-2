<?php
class Cibo extends Prodotto
{
    public $marca;
    public $etaAnimale;
    public $quantitaConfezione;

    public function __construct($nome, $descrizione, $prezzo, $marca, $etaAnimale, $quantitaConfezione)
    {
        parent::__construct($nome, $descrizione, $prezzo);
        $this->marca = $marca;
        $this->etaAnimale = $etaAnimale;
        $this->quantitaConfezione = $quantitaConfezione;
    }
}
?>