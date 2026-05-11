<?php
$servicos = json_decode(file_get_contents("data/servicos.json"), true);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LISSE • Laser & Estética</title>

    <link rel="icon" type="image/png" href="src/images/arma-espacial.png">

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>

        html{
            scroll-behavior:smooth;
        }

        body{
            font-family:'Poppins',sans-serif;
            background:#050816;
            overflow-x:hidden;
        }

        .glow{
            position:absolute;
            border-radius:999px;
            filter:blur(150px);
            z-index:0;
        }

        .card-hover{
            transition:0.5s;
        }

        .card-hover:hover{
            transform:translateY(-10px);
        }

        .texture{
            position:fixed;
            inset:0;
            opacity:0.03;
            pointer-events:none;
            background-image:url('https://www.transparenttextures.com/patterns/asfalt-dark.png');
            z-index:0;
        }

    </style>

</head>

<body class="text-white overflow-x-hidden max-w-[100vw]">

<div class="texture"></div>

<div class="fixed w-[280px] md:w-[500px] h-[280px] md:h-[500px] bg-pink-500/30 blur-[150px] rounded-full top-[-100px] left-[-100px] pointer-events-none overflow-hidden"></div>

<div class="fixed w-[280px] md:w-[500px] h-[280px] md:h-[500px] bg-blue-500/30 blur-[150px] rounded-full bottom-[-100px] right-[-100px] pointer-events-none overflow-hidden"></div>

<!-- HEADER -->

<header class="sticky top-0 z-50 border-b border-white/10 bg-[#070b14]/70 backdrop-blur-2xl">

    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

        <div class="flex items-center gap-3">

            <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-pink-500 to-blue-500 flex items-center justify-center shadow-2xl shadow-pink-500/30 text-xl">
                ✨
            </div>

            <div>
                <h1 class="text-xl font-black tracking-wide">
                    LISSE
                </h1>

                <p class="text-xs text-gray-400">
                    Laser & Estética
                </p>
            </div>

        </div>

        <nav class="hidden md:flex items-center gap-8 text-sm text-gray-300">

            <a href="#feminino" class="hover:text-pink-400 transition">
                Feminino
            </a>

            <a href="#masculino" class="hover:text-blue-400 transition">
                Masculino
            </a>

            <a href="#combos" class="hover:text-green-400 transition">
                Combos
            </a>

        </nav>

        <div class="flex items-center gap-3">

            <button class="w-11 h-11 rounded-2xl bg-white/5 border border-white/10 hover:bg-white/10 transition">
                🔍
            </button>

            <a href="carrinho.php"
               class="relative w-11 h-11 rounded-2xl bg-gradient-to-r from-pink-500 to-blue-500 flex items-center justify-center shadow-lg shadow-pink-500/30 hover:scale-105 transition">

                🛒

                <span id="cart-count"
                      class="absolute -top-2 -right-2 bg-white text-black text-xs font-bold w-6 h-6 rounded-full flex items-center justify-center">
0
</span>

            </a>

        </div>

    </div>

</header>

<!-- HERO -->

<section class="relative z-10 overflow-hidden">

    <div class="max-w-7xl mx-auto px-6 py-24 grid lg:grid-cols-2 gap-16 items-center">

        <div>

<span class="inline-flex items-center gap-2 bg-pink-500/10 border border-pink-500/20 text-pink-300 px-5 py-2 rounded-full text-sm mb-8">
✨ Tecnologia avançada em estética
</span>

            <h1 class="text-5xl lg:text-7xl font-black leading-tight mb-8">

                Sua pele
                <span class="bg-gradient-to-r from-pink-400 to-blue-400 bg-clip-text text-transparent">
perfeita
</span>
                começa aqui.

            </h1>

            <p class="text-gray-400 text-lg leading-relaxed mb-10 max-w-xl">

                Tratamentos modernos, resultados incríveis e uma experiência premium em depilação a laser e estética avançada.

            </p>

            <div class="flex flex-wrap gap-4">

                <a href="#feminino"
                   class="px-8 py-4 rounded-2xl bg-gradient-to-r from-pink-500 to-blue-500 font-semibold hover:scale-105 transition shadow-2xl shadow-pink-500/30">

                    Agendar agora

                </a>

                <a href="#feminino"
                   class="px-8 py-4 rounded-2xl border border-white/10 bg-white/5 hover:bg-white/10 transition">

                    Ver serviços

                </a>

            </div>

            <div class="flex gap-10 mt-14">

                <div>
                    <h2 class="text-3xl font-black">+500</h2>
                    <p class="text-gray-400 text-sm">Clientes atendidos</p>
                </div>

                <div>
                    <h2 class="text-3xl font-black">98%</h2>
                    <p class="text-gray-400 text-sm">Satisfação</p>
                </div>

                <div>
                    <h2 class="text-3xl font-black">5★</h2>
                    <p class="text-gray-400 text-sm">Avaliações</p>
                </div>

            </div>

        </div>

        <div class="relative">

            <div class="absolute inset-0 bg-gradient-to-r from-pink-500/30 to-blue-500/30 blur-[120px]"></div>

        </div>

    </div>

</section>

<!-- FEMININO -->

<section id="feminino" class="relative z-10 px-6 py-20">

    <div class="max-w-7xl mx-auto">

        <div class="flex items-center justify-between mb-12">

            <div>

                <h2 class="text-4xl font-black mb-3">
                    Depilação Feminina
                </h2>

                <p class="text-gray-400">
                    Conheça nossos tratamentos premium
                </p>

            </div>

            <span class="bg-pink-500/10 text-pink-400 px-5 py-2 rounded-full text-sm border border-pink-500/20">
Mais procurados
</span>

        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">

            <?php foreach ($servicos as $servico): ?>
                <?php if ($servico['categoria'] === 'feminino' && ($servico['ativo'] ?? true)): ?>

                    <?php
                    $imagens = is_array($servico['imagens']) ? $servico['imagens'] : [$servico['imagens']];
                    ?>

                    <div class="card-hover group relative rounded-[34px] p-[1px] bg-gradient-to-br from-pink-500/40 to-blue-500/30">

                        <div class="relative overflow-hidden bg-[#0b1120]/95 border border-white/10 backdrop-blur-2xl rounded-[32px] p-5 h-full">

                            <div class="absolute top-4 right-4 z-20">

<span class="bg-pink-500 text-white text-xs px-3 py-1 rounded-full shadow-lg">
Popular
</span>

                            </div>

                            <div class="overflow-hidden rounded-3xl mb-5">

                                <?php foreach ($imagens as $img): ?>

                                    <img src="<?= $img ?>"
                                         class="w-full h-60 object-cover group-hover:scale-110 transition duration-700">

                                <?php endforeach; ?>

                            </div>

                            <h3 class="text-xl font-bold mb-2">
                                <?= $servico['nome']; ?>
                            </h3>

                            <p class="text-gray-400 text-sm leading-relaxed mb-6">
                                <?= $servico['descricao']; ?>
                            </p>

                            <div class="flex justify-between items-end mt-auto">

                                <div>

                                    <p class="text-xs text-gray-500 line-through">
                                        R$<?= number_format($servico['preco'] * 1.25, 2, ',', '.'); ?>
                                    </p>

                                    <h2 class="text-3xl font-black bg-gradient-to-r from-pink-400 to-blue-400 bg-clip-text text-transparent">
                                        R$<?= number_format((float)$servico['preco'], 2, ',', '.'); ?>
                                    </h2>

                                </div>

                                <button
                                        class="add-to-cart relative overflow-hidden px-5 py-3 rounded-2xl bg-gradient-to-r from-pink-500 to-blue-500 text-white font-semibold shadow-lg shadow-pink-500/20 hover:scale-105 transition duration-300"
                                        data-name="<?= htmlspecialchars($servico['nome']) ?>"
                                        data-price="<?= $servico['preco'] ?>"
                                >

<span class="relative z-10 flex items-center gap-2">
🛒
</span>

                                </button>

                            </div>

                        </div>

                    </div>

                <?php endif; ?>
            <?php endforeach; ?>

        </div>

    </div>

</section>

<!-- MASCULINO -->

<section id="masculino" class="relative z-10 px-6 py-20">

    <div class="max-w-7xl mx-auto">

        <div class="flex items-center justify-between mb-12">

            <div>

                <h2 class="text-4xl font-black mb-3">
                    Depilação Masculina
                </h2>

                <p class="text-gray-400">
                    Tecnologia e conforto para você
                </p>

            </div>

            <span class="bg-blue-500/10 text-blue-400 px-5 py-2 rounded-full text-sm border border-blue-500/20">
Alta performance
</span>

        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">

            <?php foreach ($servicos as $servico): ?>
                <?php if ($servico['categoria'] === 'masculino' && ($servico['ativo'] ?? true)): ?>

                    <?php
                    $imagens = is_array($servico['imagens']) ? $servico['imagens'] : [$servico['imagens']];
                    ?>

                    <div class="card-hover group relative rounded-[34px] p-[1px] bg-gradient-to-br from-blue-500/40 to-cyan-500/30">

                        <div class="relative overflow-hidden bg-[#0b1120]/95 border border-white/10 backdrop-blur-2xl rounded-[32px] p-5 h-full">

                            <div class="absolute top-4 right-4 z-20">

<span class="bg-blue-500 text-white text-xs px-3 py-1 rounded-full shadow-lg">
Premium
</span>

                            </div>

                            <div class="overflow-hidden rounded-3xl mb-5">

                                <?php foreach ($imagens as $img): ?>

                                    <img src="<?= $img ?>"
                                         class="w-full h-60 object-cover group-hover:scale-110 transition duration-700">

                                <?php endforeach; ?>

                            </div>

                            <h3 class="text-xl font-bold mb-2">
                                <?= $servico['nome']; ?>
                            </h3>

                            <p class="text-gray-400 text-sm leading-relaxed mb-6">
                                <?= $servico['descricao']; ?>
                            </p>

                            <div class="flex justify-between items-end mt-auto">

                                <div>

                                    <p class="text-xs text-gray-500 line-through">
                                        R$<?= number_format($servico['preco'] * 1.25, 2, ',', '.'); ?>
                                    </p>

                                    <h2 class="text-3xl font-black text-blue-400">
                                        R$<?= number_format((float)$servico['preco'], 2, ',', '.'); ?>
                                    </h2>

                                </div>

                                <button
                                        class="add-to-cart relative overflow-hidden px-5 py-3 rounded-2xl bg-gradient-to-r from-pink-500 to-blue-500 text-white font-semibold shadow-lg shadow-blue-500/20 hover:scale-105 transition duration-300"
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

    </div>

</section>

<!-- COMBOS -->

<section id="combos" class="relative z-10 px-6 py-20">

    <div class="max-w-7xl mx-auto">

        <div class="flex items-center justify-between mb-12">

            <div>

                <h2 class="text-4xl font-black mb-3">
                    Combos Exclusivos
                </h2>

                <p class="text-gray-400">
                    Economize nos tratamentos completos
                </p>

            </div>

            <span class="bg-green-500/10 text-green-400 px-5 py-2 rounded-full text-sm border border-green-500/20">
Melhor custo benefício
</span>

        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">

            <?php foreach ($servicos as $servico): ?>
                <?php if ($servico['categoria'] === 'combos' && ($servico['ativo'] ?? true)): ?>

                    <?php $publico = $servico['publico'] ?? null; ?>

                    <div class="card-hover group relative rounded-[34px] p-[1px] bg-gradient-to-br from-green-500/40 to-emerald-400/30">

                        <div class="relative overflow-hidden bg-[#0b1120]/95 border border-white/10 backdrop-blur-2xl rounded-[32px] p-5 h-full">

                            <?php if ($publico): ?>

                                <span class="absolute top-4 left-4 bg-green-500 text-white px-4 py-1 rounded-full text-xs z-20">
<?= ucfirst($publico) ?>
</span>

                            <?php endif; ?>

                            <div class="overflow-hidden rounded-3xl mb-5">

                                <?php foreach ($servico['imagens'] as $img): ?>

                                    <img src="<?= $img ?>"
                                         class="w-full h-60 object-cover group-hover:scale-110 transition duration-700">

                                <?php endforeach; ?>

                            </div>

                            <h3 class="text-xl font-bold mb-2">
                                <?= $servico['nome'] ?>
                            </h3>

                            <p class="text-gray-400 text-sm leading-relaxed mb-6">
                                <?= $servico['descricao'] ?>
                            </p>

                            <div class="flex justify-between items-end mt-auto">

                                <div>

                                    <p class="text-xs text-gray-500 line-through">
                                        R$<?= number_format($servico['preco'] * 1.30, 2, ',', '.'); ?>
                                    </p>

                                    <h2 class="text-3xl font-black text-green-400">
                                        R$<?= number_format((float)$servico['preco'], 2, ',', '.') ?>
                                    </h2>

                                </div>

                                <button
                                        class="add-to-cart relative overflow-hidden px-5 py-3 rounded-2xl bg-gradient-to-r from-green-500 to-emerald-400 text-white font-semibold shadow-lg shadow-green-500/20 hover:scale-105 transition duration-300"
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

    </div>

</section>

<!-- AVALIAÇÕES -->

<section class="relative z-10 px-6 py-20">

    <div class="max-w-7xl mx-auto">

        <div class="text-center mb-16">

            <h2 class="text-5xl font-black mb-5">
                O que nossas clientes dizem
            </h2>

            <p class="text-gray-400">
                Experiências reais de quem já passou pela LISSE
            </p>

        </div>

        <div class="grid md:grid-cols-3 gap-8">

            <div class="bg-white/[0.03] border border-white/10 rounded-[32px] p-8 backdrop-blur-xl">

                <div class="text-yellow-400 text-2xl mb-5">
                    ★★★★★
                </div>

                <p class="text-gray-300 leading-relaxed mb-6">
                    “Melhor atendimento que já recebi. Ambiente incrível e resultado perfeito.”
                </p>

                <h3 class="font-bold">
                    Mariana Souza
                </h3>

            </div>

            <div class="bg-white/[0.03] border border-white/10 rounded-[32px] p-8 backdrop-blur-xl">

                <div class="text-yellow-400 text-2xl mb-5">
                    ★★★★★
                </div>

                <p class="text-gray-300 leading-relaxed mb-6">
                    “Tecnologia absurda, quase não senti dor e o resultado apareceu muito rápido.”
                </p>

                <h3 class="font-bold">
                    Camila Rocha
                </h3>

            </div>

            <div class="bg-white/[0.03] border border-white/10 rounded-[32px] p-8 backdrop-blur-xl">

                <div class="text-yellow-400 text-2xl mb-5">
                    ★★★★★
                </div>

                <p class="text-gray-300 leading-relaxed mb-6">
                    “Parece clínica de cidade grande. Atendimento premium de verdade.”
                </p>

                <h3 class="font-bold">
                    Fernanda Lima
                </h3>

            </div>

        </div>

    </div>

</section>

<!-- FOOTER -->

<footer class="relative z-10 border-t border-white/10 mt-20">

    <div class="max-w-7xl mx-auto px-6 py-14">

        <div class="grid md:grid-cols-3 gap-10">

            <div>

                <h2 class="text-3xl font-black mb-4">
                    LISSE
                </h2>

                <p class="text-gray-400 leading-relaxed">
                    Estética premium, tecnologia avançada e resultados incríveis.
                </p>

            </div>

            <div>

                <h3 class="font-bold mb-5">
                    Links rápidos
                </h3>

                <div class="flex flex-col gap-3 text-gray-400">

                    <a href="#feminino" class="hover:text-pink-400 transition">
                        Feminino
                    </a>

                    <a href="#masculino" class="hover:text-blue-400 transition">
                        Masculino
                    </a>

                    <a href="#combos" class="hover:text-green-400 transition">
                        Combos
                    </a>

                </div>

            </div>

            <div>

                <h3 class="font-bold mb-5">
                    Contato
                </h3>

                <div class="flex flex-col gap-3 text-gray-400">

                    <p>📍 Xanxerê - SC</p>
                    <p>📞 (49) 99999-9999</p>
                    <p>✉ contato@lisse.com</p>

                </div>

            </div>

        </div>

        <div class="border-t border-white/10 mt-10 pt-8 text-center text-gray-500 text-sm">
            © <?= date('Y') ?> LISSE • Todos os direitos reservados
        </div>

    </div>

</footer>

<!-- MOBILE BAR -->

<div class="fixed bottom-0 left-0 w-full md:hidden bg-[#070b14]/95 backdrop-blur-xl border-t border-white/10 px-2 py-3 flex items-center justify-between z-50 overflow-hidden">

    <a href="#feminino" class="w-1/3 flex flex-col items-center justify-center text-xs text-pink-400">
        💖
        <span>Feminino</span>
    </a>

    <a href="#masculino" class="w-1/3 flex flex-col items-center justify-center text-xs text-blue-400">
        🔥
        <span>Masculino</span>
    </a>

    <a href="carrinho.php" class="w-1/3 flex flex-col items-center justify-center text-xs text-white">
        🛒
        <span>Carrinho</span>
    </a>

</div>

<!-- TOAST -->

<div id="toast"
     class="fixed bottom-24 right-6 bg-gradient-to-r from-green-500 to-emerald-400 text-white px-6 py-4 rounded-2xl shadow-2xl opacity-0 translate-y-10 transition-all duration-500 z-50 font-semibold">
</div>

<script>

    function showToast(msg){

        const toast=document.getElementById('toast');

        toast.innerText=msg;

        toast.classList.remove('opacity-0','translate-y-10');
        toast.classList.add('opacity-100','translate-y-0');

        setTimeout(()=>{

            toast.classList.add('opacity-0','translate-y-10');

        },2000);

    }

    function updateCartCount(){

        const cart=JSON.parse(localStorage.getItem('cart')) || [];

        const count=cart.reduce((acc,item)=>acc+item.quantity,0);

        document.getElementById('cart-count').innerText=count;

    }

    document.querySelectorAll('.add-to-cart').forEach(btn=>{

        btn.addEventListener('click',()=>{

            const name=btn.dataset.name;
            const price=parseFloat(btn.dataset.price);

            let cart=JSON.parse(localStorage.getItem('cart')) || [];

            const existing=cart.find(i=>i.name===name);

            if(existing){

                existing.quantity++;

            }else{

                cart.push({
                    name,
                    price,
                    quantity:1
                });

            }

            localStorage.setItem('cart',JSON.stringify(cart));

            showToast('Adicionado ao carrinho 🛒');

            updateCartCount();

        });

    });

    updateCartCount();

</script>

</body>
</html>