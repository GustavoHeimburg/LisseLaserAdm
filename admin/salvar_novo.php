<?php

$arquivo = "../data/servicos.json";

$servicos = [];

if (file_exists($arquivo)) {
    $conteudo = file_get_contents($arquivo);
    $servicos = json_decode($conteudo, true);

    if (!is_array($servicos)) {
        $servicos = [];
    }
}

$preco = str_replace(',', '.', $_POST['preco']);

$imagensSalvas = [];

if (!empty($_FILES['imagens']['name'][0])) {

    foreach ($_FILES['imagens']['tmp_name'] as $key => $tmp_name) {

        if ($_FILES['imagens']['error'][$key] !== 0) {
            continue;
        }

        $nomeOriginal = $_FILES['imagens']['name'][$key];
        $extensao = pathinfo($nomeOriginal, PATHINFO_EXTENSION);

        $nomeArquivo = uniqid() . "." . $extensao;

        $destino = "../src/images/" . $nomeArquivo;

        if (move_uploaded_file($tmp_name, $destino)) {

            $imagensSalvas[] = "src/images/" . $nomeArquivo;
        }
    }
}

$novoServico = [
    "nome" => $_POST['nome'],
    "descricao" => $_POST['descricao'],
    "preco" => $preco,
    "categoria" => $_POST['categoria'],
    "publico" => $_POST['publico'] ?? null,
    "avaliacoes" => $_POST['avaliacoes'] ?? 0,
    "ativo" => true,
    "imagens" => $imagensSalvas
];

$servicos[] = $novoServico;

file_put_contents(
    $arquivo,
    json_encode($servicos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
);

header("Location: painel.php");
exit;