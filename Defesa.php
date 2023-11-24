<?php

class Defesa extends Item {
    protected $defesa;

    public function __construct($name, $tamanho, $classe, $defesa) {
        parent::__construct($name, $tamanho, $classe);
        $this->defesa = defesa;
    }

    public function getDefesa() {
        return $this->defesa;
    }

    public function setDefesa($defesa) {
        $this->defesa = $defesa;
    }
}

?>