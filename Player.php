<?php

class Player
{
    private string $nickname;
    private int $nivel;
    private $inventario;

    public function __construct($nickname, $nivel, $inventario)
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
        return $this->nivel;
    }

    public function setInventario($inventario)
    {
        $this->inventario = $inventario; 
    }

    public function coletarItem($item)
    {
        return array_push($item);
    }

    public function removerItem($item)
    {
        return array_push($array, $item);
    }

    public function soltarItem($item)
    {
        return array_search($item, $array);;
    }

}
