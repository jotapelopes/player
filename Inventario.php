<?php

class Inventario
{
    private int $capacidadeMaxima;
    private array $itens;

    public function __construct($capacidadeMaxima)
    {
        $this->capacidadeMaxima = $capacidadeMaxima;
        $this->itens = [];
    }

    public function getCapacidadeMaxima()
    {
        return $this->capacidadeMaxima;
    }

    public function setCapacidadeMaxima($capacidadeMaxima)
    {
        $this->capacidadeMaxima = $capacidadeMaxima;
    }

    public function adicionarItem(Item $item)
    {
        if (count($this->itens) < $this->capacidadeMaxima) {
            $this->itens[] = $item;
        } else {
            echo "Inventário cheio, não foi possível adicionar o item!  <br>";
        }
    }

    public function removerItem(Item $item)
    {
        $index = array_search($item, $this->itens);
        if ($index !== false) {
            unset($this->itens[$index]);
        }
    }

    public function capacidadeLivre()
    {
        return $this->capacidadeMaxima - count($this->itens);
    }

    public function listarItens()
    {
        return $this->itens;
    }
}
