<?php
class Prodotto
{
    public $nome;
    public $descrizione;
    public $prezzo;

    public function __construct($nome, $descrizione, $prezzo)
    {
        $this->nome = $nome;
        $this->descrizione = $descrizione;
        $this->prezzo = $prezzo;
    }
}
?>