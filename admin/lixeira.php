<?php

$arquivo = "../data/servicos.json";
$servicos = json_decode(file_get_contents($arquivo), true);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

<meta charset="UTF-8">
<title>Lixeira</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>

body{
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg,#020617,#0f172a);
    color:white;
    padding:40px;
}

.top{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:30px;
}

h1{
    font-size:28px;
}

.btn-back{
    text-decoration:none;
    background:rgba(255,255,255,0.05);
    padding:10px 16px;
    border-radius:10px;
    color:#cbd5f5;
    transition:.3s;
    border:1px solid rgba(255,255,255,0.08);
}

.btn-back:hover{
    background:#38bdf8;
    color:white;
}

.dishes-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
    gap:25px;
}

.dish{
    background:rgba(255,255,255,0.05);
    backdrop-filter:blur(12px);
    border-radius:18px;
    padding:20px;
    border:1px solid rgba(255,255,255,0.08);
    box-shadow:0 15px 40px rgba(0,0,0,0.5);
    transition:.3s;
    opacity:0.75;
    position:relative;
}

.dish:hover{
    transform:translateY(-6px) scale(1.02);
    opacity:1;
}

.combo-images{
    display:flex;
    gap:8px;
    overflow:auto;
    margin-bottom:10px;
}

.combo-images img{
    width:80px;
    height:80px;
    object-fit:cover;
    border-radius:10px;
}

.dish h3{
    font-size:16px;
    margin-bottom:5px;
}

.dish p{
    font-size:13px;
    color:#94a3b8;
}

.admin-actions{
    display:flex;
    gap:10px;
    margin-top:15px;
}

.admin-actions a{
    flex:1;
    text-align:center;
    padding:8px;
    border-radius:8px;
    text-decoration:none;
    font-size:13px;
    transition:.3s;
}

.btn-restore{
    background:linear-gradient(135deg,#22c55e,#16a34a);
    color:white;
}

.btn-delete-perm{
    background:linear-gradient(135deg,#ef4444,#b91c1c);
    color:white;
}

.admin-actions a:hover{
    transform:scale(1.05);
}

.empty{
    text-align:center;
    margin-top:80px;
    color:#64748b;
    font-size:18px;
}

.trash-badge{
    position:absolute;
    top:10px;
    right:10px;
    background:#ef4444;
    font-size:11px;
    padding:4px 8px;
    border-radius:6px;
}

</style>

</head>

<body>

<div class="top">
    <h1>🗑 Lixeira</h1>
    <a href="painel.php" class="btn-back">⬅ Voltar</a>
</div>

<div class="dishes-grid">

<?php
$temItens = false;

foreach ($servicos as $index => $servico):
if (($servico['ativo'] ?? true) == false):
$temItens = true;
?>

<div class="dish">

<div class="trash-badge">Removido</div>

<h3><?= $servico['nome'] ?></h3>

<?php if(isset($servico['imagens'])): ?>
<div class="combo-images">
    <?php
    $imgs = is_array($servico['imagens']) ? $servico['imagens'] : [$servico['imagens']];
    foreach($imgs as $img): ?>
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
   onclick="return confirm('Excluir permanentemente?')">
❌ Excluir
</a>

</div>

</div>

<?php endif; endforeach; ?>

</div>

<?php if(!$temItens): ?>
<div class="empty">
    🧹 Nada na lixeira ainda
</div>
<?php endif; ?>

</body>
</html>