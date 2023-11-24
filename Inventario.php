<?php

class Inventario
{
    private int $capacidadeMaxima;
    private $itens;

    public function __construct($capacidadeMaxima)
    {
        $this->capacidadeMaxima = $capacidadeMaxima;
        $this->itens = array[]; 
    }

    public function getCapacidadeMaxima()
    {
        return $this->capacidadeMaxima;
    }
    
    public function setCapacidadeMaxima($capacidadeMaxima)
    {
        $this->capacidadeMaxima = $capacidadeMaxima;
    }

    public function adicionarItem($item)
    {
        return array_push($this->itens, $item);
    }

    public function removerItem($item)
    {
        return array_search($item, $this->itens);;
    }

    public function capactidadeLivre()
    {
        $valor = $this->capacidadeMaxima - count($this->itens)
        return $valor;
    }
}

