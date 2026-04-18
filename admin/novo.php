<?php ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<title>Novo Serviço</title>

<!-- Fonte -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<!-- Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

body{
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg,#020617,#0f172a);
    color:white;
    padding:40px;
}

/* CARD */
.form-container{
    max-width:650px;
    margin:auto;
    background: rgba(255,255,255,0.05);
    backdrop-filter: blur(15px);
    padding:40px;
    border-radius:20px;
    border:1px solid rgba(255,255,255,0.08);
    box-shadow:0 20px 50px rgba(0,0,0,0.6);
    animation:fadeIn .5s ease;
}

@keyframes fadeIn{
    from{opacity:0; transform:translateY(20px);}
    to{opacity:1; transform:translateY(0);}
}

/* TITULO */
.form-container h2{
    margin-bottom:25px;
    font-size:26px;
    background: linear-gradient(90deg,#38bdf8,#6366f1);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

/* GRUPOS */
.form-group{
    margin-bottom:18px;
}

/* LABEL */
.form-group label{
    display:block;
    margin-bottom:6px;
    font-weight:500;
    color:#cbd5f5;
}

/* INPUTS */
input, textarea, select{
    width:100%;
    padding:12px;
    border-radius:10px;
    border:1px solid rgba(255,255,255,0.1);
    background:rgba(255,255,255,0.05);
    color:white;
    font-size:14px;
    transition:.3s;
}

input:focus, textarea:focus, select:focus{
    outline:none;
    border-color:#38bdf8;
    box-shadow:0 0 0 2px rgba(56,189,248,0.2);
}

textarea{
    min-height:100px;
}

/* FILE */
input[type=file]{
    background:none;
    border:none;
}

/* PREVIEW */
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
    border:1px solid rgba(255,255,255,0.1);
}

/* BOTÃO */
.btn-save{
    width:100%;
    background: linear-gradient(135deg,#22c55e,#16a34a);
    border:none;
    padding:14px;
    font-size:15px;
    border-radius:12px;
    color:white;
    cursor:pointer;
    font-weight:600;
    transition:.3s;
}

.btn-save:hover{
    transform:scale(1.03);
    box-shadow:0 10px 25px rgba(34,197,94,0.4);
}

/* VOLTAR */
.voltar{
    display:inline-block;
    margin-top:20px;
    color:#94a3b8;
    text-decoration:none;
    font-size:14px;
}

.voltar:hover{
    color:#38bdf8;
}

/* TOAST */
.toast{
    position:fixed;
    bottom:30px;
    right:30px;
    background:#22c55e;
    padding:12px 20px;
    border-radius:10px;
    opacity:0;
    transform:translateY(20px);
    transition:.3s;
}

.toast.show{
    opacity:1;
    transform:translateY(0);
}

</style>

</head>

<body>

<div class="form-container">

<h2>✨ Novo Serviço</h2>

<form action="salvar_novo.php" method="POST" enctype="multipart/form-data" id="form">

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
<input type="text" name="preco" id="preco" placeholder="Ex: 49,90" required>
</div>

<div class="form-group">
<label>Categoria</label>
<select name="categoria" id="categoria">
    <option value="feminino">Feminino</option>
    <option value="masculino">Masculino</option>
    <option value="combos">Combos</option>
</select>
</div>

<div class="form-group" id="publico-group" style="display:none;">
<label>Público do Combo</label>
<select name="publico">
    <option value="">Selecione</option>
    <option value="feminino">Feminino</option>
    <option value="masculino">Masculino</option>
</select>
</div>

<div class="form-group">
<label>Imagens</label>
<input type="file" name="imagens[]" multiple accept="image/*" id="upload">
<div class="preview" id="preview"></div>
</div>

<div class="form-group">
<label>Avaliações (+)</label>
<input type="number" name="avaliacoes" placeholder="Ex: 120">
</div>

<button class="btn-save" type="submit">
💾 Salvar Serviço
</button>

</form>

<a class="voltar" href="painel.php">⬅ Voltar para o painel</a>

</div>

<div id="toast" class="toast">Salvo com sucesso</div>

<script>

/* ===== MOSTRAR PUBLICO ===== */
const categoria = document.getElementById('categoria');
const publicoGroup = document.getElementById('publico-group');

categoria.addEventListener('change', () => {
    publicoGroup.style.display = categoria.value === 'combos' ? 'block' : 'none';
});

/* ===== PREVIEW IMAGEM ===== */
const upload = document.getElementById('upload');
const preview = document.getElementById('preview');

upload.addEventListener('change', () => {
    preview.innerHTML = '';

    [...upload.files].forEach(file => {
        const reader = new FileReader();

        reader.onload = e => {
            const img = document.createElement('img');
            img.src = e.target.result;
            preview.appendChild(img);
        };

        reader.readAsDataURL(file);
    });
});

/* ===== FORMATA PREÇO ===== */
const preco = document.getElementById('preco');

preco.addEventListener('input', () => {
    let v = preco.value.replace(/\D/g, '');
    v = (v / 100).toFixed(2) + '';
    v = v.replace('.', ',');
    preco.value = v;
});

/* ===== TOAST FAKE UX ===== */
document.getElementById('form').addEventListener('submit', () => {
    const toast = document.getElementById('toast');
    toast.classList.add('show');

    setTimeout(() => {
        toast.classList.remove('show');
    }, 2000);
});

</script>

</body>
</html>