<?php

require_once "Item.php"
{
class Magia extends Item {
    protected $magia;

    public function __construct($name, $tamanho, $classe, $magia) {
        parent::__construct($name, $tamanho, $classe);
        $this->magia = $magia;
    }

    public function getMagia() {
        return $this->magia;
    }

    public function setMagia($magia) {
        $this->magia = $magia;
    }
}

}

?>