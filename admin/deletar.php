<?php

$arquivo = "../data/servicos.json";

$servicos = json_decode(file_get_contents($arquivo), true);

$id = $_GET['id'];

unset($servicos[$id]);

$servicos = array_values($servicos);

file_put_contents($arquivo, json_encode($servicos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

header("Location: painel.php");

?>