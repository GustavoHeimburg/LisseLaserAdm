<?php
$servicos = json_decode(file_get_contents("data/servicos.json"), true);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>LISSE</title>

<link rel="icon" type="image/png" href="src/images/arma-espacial.png">

<script src="https://cdn.tailwindcss.com"></script>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

</head>

<body class="bg-[#0b1120] text-white font-[Poppins] overflow-x-hidden">

<div class="fixed w-[600px] h-[600px] bg-pink-500/30 blur-[180px] top-[-150px] left-[-150px]"></div>
<div class="fixed w-[600px] h-[600px] bg-blue-500/30 blur-[180px] bottom-[-150px] right-[-150px]"></div>

<header class="flex justify-between items-center px-6 py-5 backdrop-blur-xl bg-white/5 border-b border-white/10 sticky top-0 z-50">

    <h1 class="text-2xl font-bold bg-gradient-to-r from-pink-400 to-blue-400 bg-clip-text text-transparent">
        LISSE
    </h1>


    <a href="carrinho.php" class="relative text-2xl hover:scale-110 transition">
        🛒
        <span id="cart-count" class="absolute -top-2 -right-3 bg-pink-500 text-xs px-2 py-1 rounded-full shadow-lg">
            0
        </span>
    </a>

</header>

<div id="toast" class="fixed bottom-6 right-6 bg-green-500 text-white px-6 py-3 rounded-xl shadow-2xl opacity-0 translate-y-10 transition-all duration-500 z-50"></div>

<section class="px-6 py-16">

<h2 class="text-5xl font-bold text-center bg-gradient-to-r from-white to-gray-400 bg-clip-text text-transparent">
LISSE
</h2>

<p class="text-center text-gray-400 mb-12">
Conheça nossos serviços
</p>

<h3 class="text-center text-pink-400 tracking-[4px] mb-10 text-sm">
DEPILAÇÃO FEMININA
</h3>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

<?php foreach ($servicos as $servico): ?>
<?php if ($servico['categoria'] === 'feminino' && ($servico['ativo'] ?? true)): ?>

<div class="group relative rounded-[28px] p-[1px] bg-gradient-to-br from-pink-500/40 to-blue-500/40 hover:scale-[1.03] transition duration-500">

<div class="bg-[#0b1120]/90 backdrop-blur-2xl rounded-[26px] p-5">

<?php
$imagens = is_array($servico['imagens']) ? $servico['imagens'] : [$servico['imagens']];
?>

<div class="overflow-hidden rounded-2xl mb-4">
<?php foreach ($imagens as $img): ?>
<img src="<?= $img ?>" class="w-full h-48 object-cover group-hover:scale-110 transition duration-500">
<?php endforeach; ?>
</div>

<h3 class="text-lg font-semibold mb-1"><?= $servico['nome']; ?></h3>

<p class="text-gray-400 text-sm"><?= $servico['descricao']; ?></p>

<div class="flex justify-between items-center mt-5">

<span class="text-2xl font-bold bg-gradient-to-r from-pink-400 to-blue-400 bg-clip-text text-transparent">
R$<?= number_format((float)$servico['preco'], 2, ',', '.'); ?>
</span>

<button
class="add-to-cart relative px-4 py-2 rounded-xl bg-gradient-to-r from-pink-500 to-blue-500 text-white text-sm font-medium overflow-hidden group-hover:scale-110 transition"
data-name="<?= htmlspecialchars($servico['nome']) ?>"
data-price="<?= $servico['preco'] ?>"
>
<span class="relative z-10">🛒</span>
<span class="absolute inset-0 opacity-0 group-hover:opacity-100 transition bg-white/20 blur-md"></span>
</button>

</div>

</div>
</div>

<?php endif; ?>
<?php endforeach; ?>

</div>
</section>

<section class="px-6 py-16">

<h3 class="text-center text-blue-400 tracking-[4px] mb-10 text-sm">
DEPILAÇÃO MASCULINA
</h3>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

<?php foreach ($servicos as $servico): ?>
<?php if ($servico['categoria'] === 'masculino' && ($servico['ativo'] ?? true)): ?>

<div class="group relative rounded-[28px] p-[1px] bg-gradient-to-br from-blue-500/40 to-cyan-500/40 hover:scale-[1.03] transition duration-500">

<div class="bg-[#0b1120]/90 backdrop-blur-2xl rounded-[26px] p-5">

<?php
$imagens = is_array($servico['imagens']) ? $servico['imagens'] : [$servico['imagens']];
?>

<div class="overflow-hidden rounded-2xl mb-4">
<?php foreach ($imagens as $img): ?>
<img src="<?= $img ?>" class="w-full h-48 object-cover group-hover:scale-110 transition duration-500">
<?php endforeach; ?>
</div>

<h3 class="text-lg font-semibold mb-1"><?= $servico['nome']; ?></h3>

<p class="text-gray-400 text-sm"><?= $servico['descricao']; ?></p>

<div class="flex justify-between items-center mt-5">

<span class="text-2xl font-bold text-blue-400">
R$<?= number_format((float)$servico['preco'], 2, ',', '.'); ?>
</span>

<button
class="add-to-cart px-4 py-2 rounded-xl bg-gradient-to-r from-pink-500 to-blue-500 text-white text-sm font-medium hover:scale-110 transition"
data-name="<?= htmlspecialchars($servico['nome']) ?>"
data-price="<?= $servico['preco'] ?>"
>
🛒
</button>

</div>

</div>
</div>

<?php endif; ?>
<?php endforeach; ?>

</div>
</section>

<section class="px-6 py-16">

<h3 class="text-center text-green-400 tracking-[4px] mb-10 text-sm">
COMBOS
</h3>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

<?php foreach ($servicos as $servico): ?>
<?php if ($servico['categoria'] === 'combos' && ($servico['ativo'] ?? true)): ?>

<?php $publico = $servico['publico'] ?? null; ?>

<div class="group relative rounded-[28px] p-[1px] bg-gradient-to-br from-green-500/40 to-emerald-400/40 hover:scale-[1.03] transition duration-500">

<div class="bg-[#0b1120]/90 backdrop-blur-2xl rounded-[26px] p-5">

<?php if ($publico): ?>
<span class="absolute top-3 left-3 bg-green-500/20 text-green-300 px-3 py-1 rounded-full text-xs">
<?= ucfirst($publico) ?>
</span>
<?php endif; ?>

<div class="w-full aspect-[4/3] object-cover rounded-2xl">
<?php foreach ($servico['imagens'] as $img): ?>
<img src="<?= $img ?>" class="w-full h-48 object-cover group-hover:scale-110 transition duration-500">
<?php endforeach; ?>
</div>

<h3 class="text-lg font-semibold"><?= $servico['nome'] ?></h3>

<p class="text-gray-400 text-sm"><?= $servico['descricao'] ?></p>

<div class="flex justify-between items-center mt-5">

<span class="text-2xl font-bold text-green-400">
R$<?= number_format((float)$servico['preco'], 2, ',', '.') ?>
</span>

<button
class="add-to-cart px-4 py-2 rounded-xl bg-gradient-to-r from-pink-500 to-blue-500 text-white text-sm font-medium hover:scale-110 transition"
data-name="<?= htmlspecialchars($servico['nome']) ?>"
data-price="<?= $servico['preco'] ?>"
>
🛒
</button>

</div>

</div>
</div>

<?php endif; ?>
<?php endforeach; ?>

</div>
</section>

<script>

function showToast(msg) {
    const toast = document.getElementById('toast');
    toast.innerText = msg;

    toast.classList.remove('opacity-0','translate-y-10');
    toast.classList.add('opacity-100','translate-y-0');

    setTimeout(() => {
        toast.classList.add('opacity-0','translate-y-10');
    }, 2000);
}

function updateCartCount() {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const count = cart.reduce((acc, item) => acc + item.quantity, 0);

    document.getElementById('cart-count').innerText = count;
}

document.querySelectorAll('.add-to-cart').forEach(btn => {
    btn.addEventListener('click', () => {

        const name = btn.dataset.name;
        const price = parseFloat(btn.dataset.price);

        let cart = JSON.parse(localStorage.getItem('cart')) || [];

        const existing = cart.find(i => i.name === name);

        if (existing) {
            existing.quantity++;
        } else {
            cart.push({ name, price, quantity: 1 });
        }

        localStorage.setItem('cart', JSON.stringify(cart));

        showToast("Adicionado 🛒");
        updateCartCount();
    });
});

updateCartCount();

</script>

</body>
</html>