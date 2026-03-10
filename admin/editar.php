<?php

$arquivo = "../data/servicos.json";

$servicos = json_decode(file_get_contents($arquivo), true);

$id = $_GET['id'];

$servico = $servicos[$id];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="UTF-8">
<title>Editar Serviço</title>

<link rel="stylesheet" href="../src/styles/style.css">

<style>

body{
    background:#f4f6f9;
    font-family:Arial;
    padding:40px;
}

/* CARD DO FORM */

.form-container{
    max-width:600px;
    margin:auto;
    background:white;
    padding:40px;
    border-radius:12px;
    box-shadow:0 10px 25px rgba(0,0,0,0.08);
}

/* TITULO */

.form-container h2{
    margin-bottom:25px;
    font-size:28px;
    border-left:6px solid #E9A209;
    padding-left:12px;
}

/* LABEL */

.form-group{
    margin-bottom:20px;
}

.form-group label{
    display:block;
    margin-bottom:6px;
    font-weight:600;
}

/* INPUTS */

input[type=text],
textarea,
select{

    width:100%;
    padding:12px;
    border:1px solid #ddd;
    border-radius:8px;
    font-size:15px;
    transition:0.2s;

}

input[type=text]:focus,
textarea:focus,
select:focus{

    border-color:#E9A209;
    outline:none;
    box-shadow:0 0 0 2px rgba(233,162,9,0.15);

}

textarea{
    min-height:100px;
}

/* FILE */

input[type=file]{
    margin-top:5px;
}

/* BOTÃO */

.btn-save{

    width:100%;
    background:#E9A209;
    color:white;
    border:none;
    padding:14px;
    font-size:16px;
    border-radius:8px;
    font-weight:bold;
    cursor:pointer;
    transition:0.2s;

}

.btn-save:hover{
    background:#d89208;
}

</style>

</head>

<body>

<div class="form-container">

<h2>Editar Serviço</h2>

<form action="salvar.php" method="POST" enctype="multipart/form-data">

<input type="hidden" name="id" value="<?= $id ?>">

<div class="form-group">
<label>Nome</label>
<input type="text" name="nome" value="<?= $servico['nome'] ?>">
</div>

<div class="form-group">
<label>Descrição</label>
<textarea name="descricao"><?= $servico['descricao'] ?></textarea>
</div>

<div class="form-group">
<label>Preço</label>
<input type="text" name="preco" value="<?= $servico['preco'] ?>">
</div>

<div class="form-group">
<label>Categoria</label>

<select name="categoria">

<option value="feminino" <?= $servico['categoria']=="feminino"?"selected":"" ?>>Feminino</option>
<option value="masculino" <?= $servico['categoria']=="masculino"?"selected":"" ?>>Masculino</option>
<option value="combos" <?= $servico['categoria']=="combos"?"selected":"" ?>>Combos</option>

</select>

</div>

<div class="form-group">
<label>Nova imagem</label>
<input type="file" name="imagem">
</div>

<button class="btn-save" type="submit">
Salvar Serviço
</button>

</form>

</div>

</body>
</html>