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

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>

*{box-sizing:border-box;}

body{
    font-family:'Poppins', sans-serif;
    background:linear-gradient(135deg,#020617,#0f172a);
    color:#fff;
    margin:0;
    padding:40px;
}

.form-container{
    max-width:650px;
    margin:auto;
    background:rgba(255,255,255,0.05);
    backdrop-filter:blur(20px);
    padding:40px;
    border-radius:20px;
    border:1px solid rgba(255,255,255,0.08);
    box-shadow:0 20px 60px rgba(0,0,0,0.5);
}

.form-container h2{
    margin-bottom:25px;
    font-size:28px;
    background:linear-gradient(90deg,#38bdf8,#6366f1);
    -webkit-background-clip:text;
    -webkit-text-fill-color:transparent;
}

.form-group{
    margin-bottom:20px;
}

.form-group label{
    display:block;
    margin-bottom:6px;
    font-weight:500;
    color:#cbd5f5;
}

input, textarea, select{
    width:100%;
    padding:12px;
    border-radius:10px;
    border:none;
    outline:none;
    background:rgba(255,255,255,0.06);
    color:#fff;
    font-size:14px;
    transition:0.2s;
}

input:focus, textarea:focus, select:focus{
    box-shadow:0 0 0 2px #38bdf8;
}

textarea{
    min-height:100px;
}

input[type=file]{
    background:none;
}

.preview{
    display:flex;
    gap:10px;
    margin-top:10px;
    flex-wrap:wrap;
}

.preview img{
    width:80px;
    height:80px;
    object-fit:cover;
    border-radius:10px;
}

.btn-save{
    width:100%;
    background:linear-gradient(135deg,#22c55e,#16a34a);
    border:none;
    padding:14px;
    font-size:16px;
    border-radius:12px;
    font-weight:bold;
    color:#fff;
    cursor:pointer;
    transition:.3s;
}

.btn-save:hover{
    transform:scale(1.03);
    box-shadow:0 10px 30px rgba(34,197,94,0.4);
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
<input type="text" name="nome" value="<?= $servico['nome'] ?>" required>
</div>

<div class="form-group">
<label>Descrição</label>
<textarea name="descricao" required><?= $servico['descricao'] ?></textarea>
</div>

<div class="form-group">
<label>Preço</label>
<input type="number" step="0.01" name="preco" value="<?= $servico['preco'] ?>" required>
</div>

<div class="form-group">
<label>Categoria</label>
<select name="categoria" id="categoria">
<option value="feminino" <?= $servico['categoria']=="feminino"?"selected":"" ?>>Feminino</option>
<option value="masculino" <?= $servico['categoria']=="masculino"?"selected":"" ?>>Masculino</option>
<option value="combos" <?= $servico['categoria']=="combos"?"selected":"" ?>>Combos</option>
</select>
</div>

<div class="form-group" id="publico-group">
<label>Público do Combo</label>
<select name="publico">
<option value="">Selecione</option>
<option value="feminino" <?= ($servico['publico'] ?? '')=="feminino"?"selected":"" ?>>Feminino</option>
<option value="masculino" <?= ($servico['publico'] ?? '')=="masculino"?"selected":"" ?>>Masculino</option>
</select>
</div>

<div class="form-group">
<label>Nova imagem</label>
<input type="file" id="fileInput" name="imagens[]" multiple accept="image/*">

<div class="preview" id="preview"></div>
</div>

<div class="form-group">
<label>Avaliações (+)</label>
<input type="number" name="avaliacoes" value="<?= $servico['avaliacoes'] ?? '' ?>">
</div>

<button class="btn-save" type="submit">
Salvar Serviço
</button>

</form>

</div>

<script>

const categoria = document.getElementById('categoria');
const publicoGroup = document.getElementById('publico-group');

function verificarCategoria(){
    publicoGroup.style.display = categoria.value === 'combos' ? 'block' : 'none';
}
categoria.addEventListener('change', verificarCategoria);
verificarCategoria();

const fileInput = document.getElementById('fileInput');
const preview = document.getElementById('preview');

fileInput.addEventListener('change', () => {
    preview.innerHTML = '';

    Array.from(fileInput.files).forEach(file => {
        const reader = new FileReader();

        reader.onload = e => {
            const img = document.createElement('img');
            img.src = e.target.result;
            preview.appendChild(img);
        };

        reader.readAsDataURL(file);
    });
});

</script>

</body>
</html>