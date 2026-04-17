<?php
session_start();

$cart = $_SESSION['cart'] ?? [];

if (isset($_GET['action'])) {
    $index = $_GET['index'];

    if ($_GET['action'] === 'increase') {
        $cart[$index]['quantity']++;
    }

    if ($_GET['action'] === 'decrease') {
        $cart[$index]['quantity']--;
        if ($cart[$index]['quantity'] <= 0) {
            array_splice($cart, $index, 1);
        }
    }

    if ($_GET['action'] === 'remove') {
        array_splice($cart, $index, 1);
    }

    $_SESSION['cart'] = $cart;
    header("Location: carrinho.php");
    exit;
}

/* LIMPAR */
if (isset($_GET['clear'])) {
    $_SESSION['cart'] = [];
    header("Location: carrinho.php");
    exit;
}

/* TOTAL */
$total = 0;
foreach ($cart as $item) {
    $total += $item['price'] * $item['quantity'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Carrinho</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>
body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #020617, #0f172a);
    color: #fff;
}

.cart-page {
    max-width: 900px;
    margin: 60px auto;
    padding: 30px;
}

h1 {
    text-align: center;
    margin-bottom: 40px;
    font-size: 2.5rem;
    background: linear-gradient(90deg, #38bdf8, #6366f1);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.cart-item {
    display: flex;
    justify-content: space-between;
    background: rgba(255,255,255,0.05);
    padding: 20px;
    border-radius: 16px;
    margin-bottom: 15px;
}

a {
    color: #38bdf8;
    text-decoration: none;
}

.cart-footer {
    margin-top: 40px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.cart-checkout {
    background: #22c55e;
    padding: 12px 20px;
    border-radius: 10px;
    color: #fff;
}

@media (max-width: 480px) {

    .dish-title {
        font-size: 1rem;
    }

    .dish-description {
        font-size: 0.85rem;
    }

    .dish-price h4 {
        font-size: 1rem;
    }

}

</style>
</head>

<body>

<div class="cart-page">

<h1>Seu carrinho</h1>

<?php if (empty($cart)): ?>
    <p>Seu carrinho está vazio 🛒</p>
<?php else: ?>

<?php foreach ($cart as $index => $item): ?>
<div class="cart-item">
    <div>
        <strong><?= $item['name'] ?></strong><br>
        R$ <?= number_format($item['price'], 2, ',', '.') ?>
    </div>

    <div>
        <a href="?action=decrease&index=<?= $index ?>">−</a>
        <?= $item['quantity'] ?>
        <a href="?action=increase&index=<?= $index ?>">+</a>
    </div>

    <a href="?action=remove&index=<?= $index ?>">✕</a>
</div>
<?php endforeach; ?>

<div class="cart-footer">
    <strong>Total: R$ <?= number_format($total, 2, ',', '.') ?></strong>

    <a class="cart-checkout" href="#" onclick="finalizarWhats()">Finalizar</a>
</div>

<a href="?clear=true">Limpar carrinho</a>

<?php endif; ?>

</div>

<script>
function finalizarWhats() {
    let mensagem = "Olá! Gostaria de agendar:\n\n";

    <?php foreach ($cart as $item): ?>
        mensagem += "• <?= $item['name'] ?> (x<?= $item['quantity'] ?>)\n";
    <?php endforeach; ?>

    mensagem += "\nTotal: R$ <?= number_format($total, 2, ',', '.') ?>";

    const numero = "5549920014288";
    window.open(`https://wa.me/${numero}?text=${encodeURIComponent(mensagem)}`, "_blank");
}
</script>

</body>
</html>