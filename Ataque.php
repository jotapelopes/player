<?php

class Ataque extends Item {
    protected $ataque;

    public function __construct($name, $tamanho, $classe, $ataque) {
        parent::__construct($name, $tamanho, $classe);
        $this->ataque = $ataque;
    }

    public function getAtaque() {
        return $this->ataque;
    }

    public function setAtaque($ataque) {
        $this->ataque = $ataque;
    }
}

?>