<?php

class Item 
{
    protected $name;
    protected $tamanho;
    protected $classe;

    public function __construct($name, $tamanho, $classe) {
        $this->name = $name;
        $this->tamanho = $tamanho;
        $this->classe = $classe;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name; 
    }

    public function getTamanho() {
        return $this->tamanho;
    }

    public function setTamanho($tamanho) {
        $this->tamanho = $tamanho; 
    }

    public function getClasse() {
        return $this->classe;
    }

    public function setClasse($classe) {
        $this->classe = $classe; 
    }
}
?>
