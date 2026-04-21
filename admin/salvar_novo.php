<?php

$arquivo = "../data/servicos.json";

/* =========================
   CARREGAR JSON
========================= */
$servicos = [];

if (file_exists($arquivo)) {
    $conteudo = file_get_contents($arquivo);
    $servicos = json_decode($conteudo, true);

    if (!is_array($servicos)) {
        $servicos = [];
    }
}

/* =========================
   TRATAR PREÇO
========================= */
$preco = str_replace(',', '.', $_POST['preco']);

/* =========================
   UPLOAD DE IMAGENS
========================= */
$imagensSalvas = [];

if (!empty($_FILES['imagens']['name'][0])) {

    foreach ($_FILES['imagens']['tmp_name'] as $key => $tmp_name) {

        // verifica erro no upload
        if ($_FILES['imagens']['error'][$key] !== 0) {
            continue;
        }

        $nomeOriginal = $_FILES['imagens']['name'][$key];
        $extensao = pathinfo($nomeOriginal, PATHINFO_EXTENSION);

        // nome único
        $nomeArquivo = uniqid() . "." . $extensao;

        $destino = "../src/images/" . $nomeArquivo;

        if (move_uploaded_file($tmp_name, $destino)) {
            // salva caminho correto (SEM ../)
            $imagensSalvas[] = "src/images/" . $nomeArquivo;
        }
    }
}

/* =========================
   NOVO SERVIÇO
========================= */
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

/* =========================
   SALVAR
========================= */
$servicos[] = $novoServico;

file_put_contents(
    $arquivo,
    json_encode($servicos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
);

/* =========================
   REDIRECIONAR
========================= */
header("Location: painel.php");
exit;