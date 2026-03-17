<?php

$arquivo = "../data/servicos.json";

$servicos = json_decode(file_get_contents($arquivo), true);

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$categoria = $_POST['categoria'];

$imagensSalvas = [];

if (!empty($_FILES['imagens']['name'][0])) {

    foreach ($_FILES['imagens']['tmp_name'] as $key => $tmp_name) {

        $nomeArquivo = uniqid() . "_" . $_FILES['imagens']['name'][$key];
        $destino = "../src/images/" . $nomeArquivo;

        if (move_uploaded_file($tmp_name, $destino)) {
            $imagensSalvas[] = "../src/images/" . $nomeArquivo;
        }

    }

}

$novoServico = [
    "nome" => $_POST['nome'],
    "descricao" => $_POST['descricao'],
    "preco" => $_POST['preco'],
    "categoria" => $_POST['categoria'],
    "imagens" => $imagensSalvas
];

$servicos[] = $novoServico;

file_put_contents($arquivo, json_encode($servicos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

header("Location: painel.php");