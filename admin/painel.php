<?php
$arquivo = "../data/servicos.json";
$servicos = json_decode(file_get_contents($arquivo), true);

$lixeiraCount = 0;
foreach ($servicos as $s) {
    if (($s['ativo'] ?? true) == false) $lixeiraCount++;
}

$categorias = [
    'feminino' => 'Depilação Feminina',
    'masculino' => 'Depilação Masculina',
    'combos' => 'Combos'
];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>PAINEL ADMINISTRATIVO</title>

<link rel="icon" type="image/png" href="../src/images/painel-de-controle.png">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

*{
    box-sizing:border-box;
}

body{
    font-family:'Segoe UI', sans-serif;
    background:linear-gradient(135deg,#0f172a,#020617);
    color:#fff;
    margin:0;
    padding:30px;
}

.admin-top{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:30px;
}

.admin-top h1{
    font-size:32px;
    background:linear-gradient(90deg,#38bdf8,#6366f1);
    -webkit-background-clip:text;
    -webkit-text-fill-color:transparent;
}

.btn-add{
    background:linear-gradient(135deg,#22c55e,#16a34a);
    padding:12px 22px;
    border-radius:12px;
    font-weight:bold;
    color:#fff;
    text-decoration:none;
    box-shadow:0 8px 25px rgba(34,197,94,0.3);
    transition:.3s;
}

.btn-add:hover{
    transform:scale(1.05);
}

.search-box input{
    width:100%;
    padding:14px;
    border-radius:12px;
    border:none;
    outline:none;
    margin-bottom:30px;
    background:rgba(255,255,255,0.05);
    color:#fff;
}

.dishes-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
    gap:25px;
}

.dish{
    background:rgba(255,255,255,0.05);
    backdrop-filter:blur(14px);
    border-radius:18px;
    padding:18px;
    border:1px solid rgba(255,255,255,0.08);
    transition:.3s;
    position:relative;
}

.dish:hover{
    transform:translateY(-6px);
    box-shadow:0 15px 40px rgba(0,0,0,0.5);
}

.rosto-photo{
    width:100%;
    height:160px;
    object-fit:cover;
    border-radius:12px;
    margin-bottom:10px;
}

.dish-title{
    font-size:18px;
    font-weight:600;
}

.dish-description{
    font-size:13px;
    color:#94a3b8;
    display:block;
    margin:5px 0 10px;
}

.dish-price h4{
    font-size:22px;
    color:#38bdf8;
}

.admin-actions{
    display:flex;
    gap:8px;
    margin-top:12px;
}

.admin-actions a{
    flex:1;
    text-align:center;
    padding:10px;
    border-radius:10px;
    text-decoration:none;
    font-size:13px;
    color:white;
    transition:.2s;
}

.admin-actions a:hover{
    transform:scale(1.05);
}

.btn-edit{background:#22c55e;}
.btn-delete{background:#ef4444;}
.btn-restore{background:#3b82f6;}
.btn-delete-perm{background:#000;}

.categoria{
    font-size:24px;
    font-weight:700;
    margin:50px 0 15px;
    color:#e2e8f0;
}

.trash-card{
    opacity:0.5;
    filter:grayscale(100%);
}
.btn-trash{
    background:linear-gradient(135deg,#ef4444,#b91c1c);
    padding:12px 20px;
    border-radius:10px;
    font-weight:bold;
    color:white;
    text-decoration:none;
    box-shadow:0 6px 18px rgba(239,68,68,0.3);
    transition:.3s;
}

.btn-trash:hover{
    transform:translateY(-3px);
    box-shadow:0 10px 25px rgba(239,68,68,0.5);
}
</style>
</head>

<body>

<div class="admin-top">

    <h1>Painel Administrativo</h1>

    <div style="display:flex; gap:10px;">

        <a href="lixeira.php" class="btn-trash">
            🗑 Lixeira (<?= $lixeiraCount ?>)
        </a>

        <a href="novo.php" class="btn-add">
            <i class="fa fa-plus"></i> Novo Serviço
        </a>

    </div>

</div>

<div class="search-box">
<input type="text" id="search" placeholder="Buscar serviço...">
</div>

<?php foreach($categorias as $key => $titulo): ?>
<h2 class="categoria"><?= $titulo ?></h2>

<div class="dishes-grid">
<?php foreach ($servicos as $index => $servico): ?>
<?php if ($servico['categoria'] === $key && ($servico['ativo'] ?? true)): ?>

<div class="dish">

<?php if(isset($servico['imagens']) && is_array($servico['imagens'])): ?>
    <?php foreach($servico['imagens'] as $img): ?>
        <img src="../<?= $img ?>" class="rosto-photo">
    <?php endforeach; ?>
<?php elseif(isset($servico['imagens'])): ?>
    <img src="../<?= $servico['imagens'] ?>" class="rosto-photo">
<?php endif; ?>

<h3 class="dish-title"><?= $servico['nome'] ?></h3>

<span class="dish-description"><?= $servico['descricao'] ?></span>

<div class="dish-price">
<h4>R$<?= number_format((float)$servico['preco'],2,',','.') ?></h4>
</div>

<div class="admin-actions">
<a href="editar.php?id=<?= $index ?>" class="btn-edit">Editar</a>
<a href="deletar.php?id=<?= $index ?>" class="btn-delete">Deletar</a>
</div>

</div>

<?php endif; ?>
<?php endforeach; ?>
</div>
<?php endforeach; ?>

<script>
document.getElementById("search").addEventListener("keyup", function(){
    let value = this.value.toLowerCase();
    let cards = document.querySelectorAll(".dish");

    cards.forEach(card => {
        let text = card.innerText.toLowerCase();
        card.style.display = text.includes(value) ? "block" : "none";
    });
});
</script>

</body>
</html>