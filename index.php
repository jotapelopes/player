<?php

require_once "Player.php";
require_once "Inventario.php";
require_once "Item.php";
require_once "Ataque.php";
require_once "Defesa.php";
require_once "Magia.php";

$player1 = new Player("Jogador1", 1, new Inventario(20));
$player2 = new Player("Jogador2", 1, new Inventario(20));

$ataqueItem = new Ataque("Espada interestelar", 7, "Ataque", 10);
$defesaItem = new Defesa("Escudo dos dragões", 4, "Defesa", 5);
$magiaItem = new Magia("Varinha do Rari Poter", 2, "Magia", "Expelliarmus");

$player1->getInventario()->adicionarItem($ataqueItem);
$player1->getInventario()->adicionarItem($defesaItem);

$player2->getInventario()->adicionarItem($magiaItem);

echo "Status inicial: <br>";
echo "Player 1:<br>";
echo "Nickname: " . $player1->getNickname() . "<br>";
echo "Nível: " . $player1->getNivel() . "<br>";
echo "Itens no Inventário:<br>";
foreach ($player1->getInventario()->listarItens() as $item) {
    echo "  - " . $item->getName() . " (Tamanho: " . $item->getTamanho() . ", Classe: " . $item->getClasse() . ")<br>";
}

echo "Status inicial:<br>";
echo "Player 2: <br>";
echo "Nickname: " . $player2->getNickname() . "<br>";
echo "Nível: " . $player2->getNivel() . "<br>";
echo "Itens no Inventário:<br>";
foreach ($player2->getInventario()->listarItens() as $item) {
    echo "  - " . $item->getName() . " (Tamanho: " . $item->getTamanho() . ", Classe: " . $item->getClasse() . ")<br>";
}

//A função abaixo foi inserida para facilitar nossa vida no teste de lotação de inventário. 
echo "<br>Inventário lotado de coisa:<br>";
for ($i = 0; $i < 20; $i++) {
    $player1->getInventario()->adicionarItem(new Ataque("Espada$i", 7, "Ataque", 10));
}

echo "Status Final: <br>";
echo "Player 1:<br>";
echo "Nickname: " . $player1->getNickname() . "<br>";
echo "Nível: " . $player1->getNivel() . "<br>";
echo "Itens no Inventário:<br>";
foreach ($player1->getInventario()->listarItens() as $item) {
    echo "  - " . $item->getName() . " (Tamanho: " . $item->getTamanho() . ", Classe: " . $item->getClasse() . ")<br>";
}

echo "<br>Subindo de nivel: <br>";
$player1->subirNivel();
$player1->getInventario()->adicionarItem($magiaItem);
$player1->getInventario()->adicionarItem($magiaItem);

echo "Status Final: <br>";
echo "Player 1:<br>";
echo "Nickname: " . $player1->getNickname() . "<br>";
echo "Nível: " . $player1->getNivel() . "<br>";
echo "Itens no Inventário:<br>";
foreach ($player1->getInventario()->listarItens() as $item) {
    echo "  - " . $item->getName() . " (Tamanho: " . $item->getTamanho() . ", Classe: " . $item->getClasse() . ")<br>";
} 

?>