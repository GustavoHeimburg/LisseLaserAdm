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

body{
    padding:40px;
    background:#fafafa;
}

.admin-top{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:40px;
}

.btn-add{
    background:#E9A209;
    color:white;
    padding:12px 20px;
    border-radius:8px;
    text-decoration:none;
    font-weight:bold;
}

.admin-actions{
    display:flex;
    gap:10px;
    justify-content:center;
    margin-top:15px;
}

.btn-edit{
    background:#4CAF50;
    color:white;
    padding:6px 12px;
    border-radius:6px;
    text-decoration:none;
}

.btn-delete{
    background:#ff4d4d;
    color:white;
    padding:6px 12px;
    border-radius:6px;
    text-decoration:none;
}

.categoria{
    margin:50px 0 20px;
    font-size:22px;
    font-weight:bold;
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
<img src="<?= $servico['imagem'] ?>" class="rosto-photo">
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
<img src="<?= $servico['imagem'] ?>" class="rosto-photo">
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