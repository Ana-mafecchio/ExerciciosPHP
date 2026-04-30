<?php
echo '<pre>';

$carrinho = ['Arroz', 'Sabão', 'Feijão', 'Balinhas'];
unset($carrinho[1]);
var_dump($carrinho);
?>