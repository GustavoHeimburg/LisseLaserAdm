<?php ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="UTF-8">
<title>Novo Serviço</title>

<link rel="stylesheet" href="../src/styles/style.css">

<style>

body{
    background:#f4f6f9;
    font-family:Arial;
    padding:40px;
}

/* CARD */

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

/* GRUPOS */

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
input[type=number],
textarea,
select{

    width:100%;
    padding:12px;
    border:1px solid #ddd;
    border-radius:8px;
    font-size:15px;
    transition:0.2s;

}

input:focus,
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

/* BOTÃO VOLTAR */

.voltar{
    display:inline-block;
    margin-top:20px;
    text-decoration:none;
    color:#555;
    font-weight:600;
}

.voltar:hover{
    color:#E9A209;
}

</style>

</head>

<body>

<div class="form-container">

<h2>Novo Serviço</h2>

<form action="salvar_novo.php" method="POST" enctype="multipart/form-data">

<div class="form-group">
<label>Nome</label>
<input type="text" name="nome" required>
</div>

<div class="form-group">
<label>Descrição</label>
<textarea name="descricao" required></textarea>
</div>

<div class="form-group">
<label>Preço</label>
<input type="number" step="0.01" name="preco" required>
</div>

<div class="form-group">
<label>Categoria</label>

<select name="categoria">
<option value="feminino">Feminino</option>
<option value="masculino">Masculino</option>
<option value="combos">Combos</option>
</select>

</div>

<div class="form-group">
<label>Imagem</label>
<input type="file" name="imagem">
</div>

<button class="btn-save" type="submit">
Salvar Serviço
</button>

</form>

<a class="voltar" href="painel.php">
⬅ Voltar para o painel
</a>

</div>

</body>
</html>