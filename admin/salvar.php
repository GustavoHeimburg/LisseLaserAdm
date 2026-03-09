<?php

$arquivo = "../data/servicos.json";

$servicos = json_decode(file_get_contents($arquivo), true);

$id = $_POST['id'];

$servicos[$id]['nome'] = $_POST['nome'];
$servicos[$id]['descricao'] = $_POST['descricao'];
$servicos[$id]['preco'] = $_POST['preco'];
$servicos[$id]['categoria'] = $_POST['categoria'];

if(isset($_FILES['imagem']) && $_FILES['imagem']['error']==0){

$nomeImagem = time() . "_" . $_FILES['imagem']['name'];

$destino = "../src/images/" . $nomeImagem;

move_uploaded_file($_FILES['imagem']['tmp_name'], $destino);

$servicos[$id]['imagem'] = "../src/images/servicos/" . $nomeImagem;

}

file_put_contents($arquivo, json_encode($servicos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

header("Location: painel.php");

?>