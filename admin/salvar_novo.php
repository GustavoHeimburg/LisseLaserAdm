<?php

$arquivo = "../data/servicos.json";

$servicos = json_decode(file_get_contents($arquivo), true);
if (!is_array($servicos)) {
    $servicos = [];
}

$imagensSalvas = [];

if (!empty($_FILES['images']['name'][0])) {

    foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {

        $nomeArquivo = uniqid() . "_" . $_FILES['images']['name'][$key];
        $destino = "../src/images/" . $nomeArquivo;

        if (move_uploaded_file($tmp_name, $destino)) {
            $imagensSalvas[] = "src/images/" . $nomeArquivo; // 👈 FIX PRINCIPAL
        }
    }
}

$servicos[] = [
    "nome" => $_POST['nome'],
    "descricao" => $_POST['descricao'],
    "preco" => $_POST['preco'],
    "categoria" => $_POST['categoria'],
    "publico" => $_POST['publico'] ?? null,
    "avaliacoes" => $_POST['avaliacoes'] ?? 0,
    "ativo" => true,
    "imagens" => $imagensSalvas
];

file_put_contents($arquivo, json_encode($servicos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

header("Location: painel.php");
exit;