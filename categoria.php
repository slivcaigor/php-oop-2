<?php
class Categoria
{
    public $nome;
    public $descrizione;

    public function __construct($nome, $descrizione)
    {
        $this->nome = $nome;
        $this->descrizione = $descrizione;
    }
}
?>