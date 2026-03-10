<?php

$arquivo = "../data/servicos.json";
$servicos = json_decode(file_get_contents($arquivo), true);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="UTF-8">
<title>Painel Administrativo</title>

<link rel="stylesheet" href="../src/styles/style.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

/* GRID DOS SERVIÇOS */

.dishes-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:25px;
}

/* CARD DO SERVIÇO */

.dish{
    background:white;
    border-radius:14px;
    padding:20px;
    box-shadow:0 6px 18px rgba(0,0,0,0.08);
    text-align:center;
    transition:0.3s;
    position:relative;
}

.dish:hover{
    transform:translateY(-5px);
    box-shadow:0 10px 22px rgba(0,0,0,0.12);
}

/* IMAGEM DO SERVIÇO */

.rosto-photo{
    width:100%;
    height:160px;
    object-fit:cover;
    border-radius:10px;
    margin-bottom:12px;
}

/* TITULO */

.dish-title{
    font-size:18px;
    margin-bottom:6px;
}

/* DESCRIÇÃO */

.dish-description{
    font-size:14px;
    color:#777;
    display:block;
    margin-bottom:10px;
}

/* AVALIAÇÃO */

.dish-rate{
    color:#E9A209;
    margin-bottom:10px;
}

/* PREÇO */

.dish-price h4{
    font-size:20px;
    margin-bottom:10px;
}

/* BOTÕES */

.admin-actions{
    display:flex;
    gap:10px;
    justify-content:center;
}

/* BOTÃO EDITAR */

.btn-edit{
    background:#4CAF50;
    color:white;
    padding:8px 14px;
    border-radius:6px;
    text-decoration:none;
    font-size:14px;
}

/* BOTÃO DELETAR */

.btn-delete{
    background:#ff4d4d;
    color:white;
    padding:8px 14px;
    border-radius:6px;
    text-decoration:none;
    font-size:14px;
}

/* BOTÃO NOVO SERVIÇO */

.btn-add{
    background:#E9A209;
    color:white;
    padding:12px 22px;
    border-radius:8px;
    text-decoration:none;
    font-weight:bold;
    transition:0.2s;
}

.btn-add:hover{
    transform:scale(1.05);
}

/* CORAÇÃO */

.dish-heart{
    position:absolute;
    top:10px;
    right:10px;
    background:#E9A209;
    color:white;
    padding:6px;
    border-radius:50%;
}

.categoria{
    font-size:28px;
    font-weight:700;
    margin:60px 0 25px;
    padding:15px 20px;
    background:linear-gradient(90deg,#fff,#f3f3f3);
    border-left:6px solid #E9A209;
    border-radius:8px;
    box-shadow:0 3px 10px rgba(0,0,0,0.05);
    letter-spacing:0.5px;
}

.categoria::after{
    content:"";
    display:block;
    width:60px;
    height:3px;
    background:#E9A209;
    margin-top:8px;
    border-radius:2px;
}

</style>

</head>

<body>

<div class="admin-top">

<h1>Painel Administrativo</h1>

<a href="novo.php" class="btn-add">
<i class="fa fa-plus"></i> Novo Serviço
</a>

</div>


<!-- FEMININO -->

<h2 class="categoria">Depilação Feminina</h2>

<div class="dishes-grid">

<?php foreach ($servicos as $index => $servico): ?>
<?php if ($servico['categoria'] === 'feminino'): ?>

<div class="dish">

<div class="dish-heart">
<i class="fa-solid fa-heart"></i>
</div>

<?php if(isset($servico['imagem'])): ?>
<img src="../<?= $servico['imagem'] ?>" class="rosto-photo">
<?php endif; ?>

<h3 class="dish-title">
<?= $servico['nome'] ?>
</h3>

<span class="dish-description">
<?= $servico['descricao'] ?>
</span>

<div class="dish-rate">
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<span>(67+)</span>
</div>

<div class="dish-price">

<h4>
R$<?= number_format((float)$servico['preco'],2,',','.') ?>
</h4>

</div>

<div class="admin-actions">

<a href="editar.php?id=<?= $index ?>" class="btn-edit">
✏️ Editar
</a>

<a href="deletar.php?id=<?= $index ?>" class="btn-delete">
🗑 Deletar
</a>

</div>

</div>

<?php endif; ?>
<?php endforeach; ?>

</div>


<!-- MASCULINO -->

<h2 class="categoria">Depilação Masculina</h2>

<div class="dishes-grid">

<?php foreach ($servicos as $index => $servico): ?>
<?php if ($servico['categoria'] === 'masculino'): ?>

<div class="dish">

<div class="dish-heart">
<i class="fa-solid fa-heart"></i>
</div>

<?php if(isset($servico['imagem'])): ?>
<img src="../<?= $servico['imagem'] ?>" class="rosto-photo">
<?php endif; ?>

<h3 class="dish-title">
<?= $servico['nome'] ?>
</h3>

<span class="dish-description">
<?= $servico['descricao'] ?>
</span>

<div class="dish-rate">
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<span>(67+)</span>
</div>

<div class="dish-price">

<h4>
R$<?= number_format((float)$servico['preco'],2,',','.') ?>
</h4>

</div>

<div class="admin-actions">

<a href="editar.php?id=<?= $index ?>" class="btn-edit">
✏️ Editar
</a>

<a href="deletar.php?id=<?= $index ?>" class="btn-delete">
🗑 Deletar
</a>

</div>

</div>

<?php endif; ?>
<?php endforeach; ?>

</div>


<!-- COMBOS -->

<h2 class="categoria">Combos</h2>

<div class="dishes-grid">

<?php foreach ($servicos as $index => $servico): ?>
<?php if ($servico['categoria'] === 'combos'): ?>

<div class="dish">

<h3 class="dish-title">
<?= $servico['nome'] ?>
</h3>

<span class="dish-description">
<?= $servico['descricao'] ?>
</span>

<div class="dish-price">

<h4>
R$<?= number_format((float)$servico['preco'],2,',','.') ?>
</h4>

</div>

<div class="admin-actions">

<a href="editar.php?id=<?= $index ?>" class="btn-edit">
✏️ Editar
</a>

<a href="deletar.php?id=<?= $index ?>" class="btn-delete">
🗑 Deletar
</a>

</div>

</div>

<?php endif; ?>
<?php endforeach; ?>

</div>


</body>
</html>