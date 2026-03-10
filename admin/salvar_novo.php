<?php

$arquivo = "../data/servicos.json";

$servicos = json_decode(file_get_contents($arquivo), true);

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$categoria = $_POST['categoria'];

$imagemPath = "";

if(isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0){

    $nomeImagem = time() . "_" . $_FILES['imagem']['name'];

    $destino = "../src/images/" . $nomeImagem;

    move_uploaded_file($_FILES['imagem']['tmp_name'], $destino);

    $imagemPath = "images/" . $nomeImagem;
}

$novoServico = [
    "nome" => $nome,
    "descricao" => $descricao,
    "preco" => $preco,
    "categoria" => $categoria,
    "imagem" => $imagemPath
];

$servicos[] = $novoServico;

file_put_contents($arquivo, json_encode($servicos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

header("Location: painel.php");