<?php
echo '<pre>';

$produtosLista1 = ['tomate', 'carne-moida', 'batata', 'molho de tomate'];
$produtosLista2 = ['macarrão', 'refri', 'papel-toalha'];
$carrinho_total = array_merge($produtosLista1, $produtosLista2);
$carrinho_total = array_unique($carrinho_total);
var_dump($carrinho_total);
?>