<?php

$arquivo = "../data/servicos.json";
$servicos = json_decode(file_get_contents($arquivo), true);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

<meta charset="UTF-8">
<title>Lixeira</title>

<link rel="stylesheet" href="../src/styles/style.css">

<style>

body{
    background:#f4f6f9;
    padding:40px;
    font-family:Arial;
}

.dishes-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:25px;
}

.dish{
    background:white;
    border-radius:14px;
    padding:20px;
    box-shadow:0 6px 18px rgba(0,0,0,0.08);
    opacity:0.7;
    text-align:center;
}

.combo-images img{
    width:100%;
    height:120px;
    object-fit:cover;
    border-radius:10px;
    margin-bottom:8px;
}

.admin-actions{
    display:flex;
    gap:10px;
    justify-content:center;
    margin-top:10px;
}

.btn-restore{
    background:#4CAF50;
    color:white;
    padding:8px 14px;
    border-radius:6px;
    text-decoration:none;
}

.btn-delete-perm{
    background:#111;
    color:white;
    padding:8px 14px;
    border-radius:6px;
    text-decoration:none;
}

.btn-back{
    display:inline-block;
    margin-bottom:20px;
    text-decoration:none;
    font-weight:bold;
    color:#E9A209;
}

</style>

</head>

<body>

<a href="painel.php" class="btn-back">⬅ Voltar ao painel</a>

<h1>🗑 Lixeira</h1>

<div class="dishes-grid">

<?php foreach ($servicos as $index => $servico): ?>
<?php if (($servico['ativo'] ?? true) == false): ?>

<div class="dish">

    <h3><?= $servico['nome'] ?></h3>

    <?php if(isset($servico['imagens']) && is_array($servico['imagens'])): ?>
        <div class="combo-images">
            <?php foreach($servico['imagens'] as $img): ?>
                <img src="../<?= $img ?>">
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <p><?= $servico['descricao'] ?></p>

    <div class="admin-actions">

        <a href="restaurar.php?id=<?= $index ?>" class="btn-restore">
            ♻️ Restaurar
        </a>

        <a href="excluir_permanente.php?id=<?= $index ?>"
           class="btn-delete-perm"
           onclick="return confirm('Tem certeza que deseja excluir permanentemente?')">
            ❌ Excluir
        </a>

    </div>

</div>

<?php endif; ?>
<?php endforeach; ?>

</div>

</body>
</html>