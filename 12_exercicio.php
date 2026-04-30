<?php
echo '<pre>';

$produtos = [
'Batata' => 3.99,
'Linguiça' =>  18.90,
'Tomate' =>  6.99,
'Limão' =>  3.99,
];
asort($produtos);
var_dump($produtos);
?>