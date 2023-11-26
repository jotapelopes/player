<?php

require_once "Inventario.php";

class Player
{
    private string $nickname;
    private int $nivel;
    private Inventario $inventario;

    public function __construct($nickname, $nivel, Inventario $inventario)
    {
        $this->nickname = $nickname;
        $this->nivel = $nivel;
        $this->inventario = $inventario;
    }

    public function getNickname()
    {
        return $this->nickname;
    }

    public function setNickname($nickname)
    {
        $this->nickname = $nickname;
    }

    public function getNivel()
    {
        return $this->nivel;
    }

    public function setNivel($nivel)
    {
        $this->nivel = $nivel;
    }

    public function getInventario()
    {
        return $this->inventario;
    }

    public function setInventario(Inventario $inventario)
    {
        $this->inventario = $inventario;
    }

    public function coletarItem(Item $item)
    {
        $this->inventario->adicionarItem($item);
    }

    public function soltarItem(Item $item)
    {
        $this->inventario->removerItem($item);
    }

    public function subirNivel()
    {
        $this->nivel++;
        $aumentoCapacidade = $this->nivel * 3;
        $this->inventario->setCapacidadeMaxima($this->inventario->getCapacidadeMaxima() + $aumentoCapacidade);
    }
    
}