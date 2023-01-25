<?php
class Prodotto
{
    public $nome;
    public $descrizione;
    public $prezzo;
    public $categoria;

    public function __construct($nome, $descrizione, $prezzo, $categoria)
    {
        $this->nome = $nome;
        $this->descrizione = $descrizione;
        $this->prezzo = $prezzo;
        $this->categoria = $categoria;
    }
}
?>