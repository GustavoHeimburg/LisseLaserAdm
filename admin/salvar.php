<?php

$arquivo = "../data/servicos.json";

$servicos = json_decode(file_get_contents($arquivo), true);

$id = $_POST['id'];

$servicos[$id]['nome'] = $_POST['nome'];
$servicos[$id]['descricao'] = $_POST['descricao'];
$servicos[$id]['preco'] = $_POST['preco'];
$servicos[$id]['categoria'] = $_POST['categoria'];

$imagensSalvas = [];

if (!empty($_FILES['imagens']['name'][0])) {

    foreach ($_FILES['imagens']['tmp_name'] as $key => $tmp_name) {

        $nomeArquivo = time() . "_" . $_FILES['imagens']['name'][$key];
        $destino = "../src/images/" . $nomeArquivo;

        if (move_uploaded_file($tmp_name, $destino)) {
            $imagensSalvas[] = "../src/images/" . $nomeArquivo;
        }

    }

    $servicos[$id]['imagens'] = $imagensSalvas;
}

file_put_contents($arquivo, json_encode($servicos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

header("Location: painel.php");

?>