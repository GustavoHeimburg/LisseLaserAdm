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
            background:#f7f3ee;
            overflow-x:hidden;
            color:#3e3128;
        }

        .card-hover{
            transition:0.4s;
        }

        .card-hover:hover{
            transform:translateY(-8px);
        }

        .texture{
            position:fixed;
            inset:0;
            opacity:0.04;
            pointer-events:none;
            background-image:url('https://www.transparenttextures.com/patterns/cream-paper.png');
            z-index:0;
        }

    </style>

</head>

<body class="overflow-x-hidden max-w-[100vw]">

<div class="texture"></div>

<div class="fixed w-[280px] md:w-[500px] h-[280px] md:h-[500px] bg-[#e7d7c9]/40 blur-[150px] rounded-full top-[-100px] left-[-100px] pointer-events-none overflow-hidden"></div>

<div class="fixed w-[280px] md:w-[500px] h-[280px] md:h-[500px] bg-[#d8c2ae]/40 blur-[150px] rounded-full bottom-[-100px] right-[-100px] pointer-events-none overflow-hidden"></div>

<!-- HEADER -->

<header class="sticky top-0 z-50 border-b border-[#e6ddd3] bg-[#f7f3ee]/90 backdrop-blur-2xl">

    <div class="max-w-7xl mx-auto px-4 md:px-6 py-4 flex items-center justify-between">

        <div class="flex items-center gap-3">

            <div class="w-12 h-12 rounded-2xl bg-[#c8a98d] flex items-center justify-center shadow-lg text-xl text-white">
                ✨
            </div>

            <div>
                <h1 class="text-xl font-black tracking-wide text-[#4b3b31]">
                    LISSE
                </h1>

                <p class="text-xs text-[#8b7767]">
                    Laser & Estética
                </p>
            </div>

        </div>

        <nav class="hidden md:flex items-center gap-8 text-sm text-[#7b6a5d]">

            <a href="#feminino" class="hover:text-[#b08968] transition">
                Feminino
            </a>

            <a href="#masculino" class="hover:text-[#b08968] transition">
                Masculino
            </a>

            <a href="#combos" class="hover:text-[#b08968] transition">
                Combos
            </a>

        </nav>

        <div class="flex items-center gap-3">

            <a href="carrinho.php"
               class="relative w-11 h-11 rounded-2xl bg-[#c8a98d] flex items-center justify-center shadow-lg hover:scale-105 transition text-white">

                🛒

                <span id="cart-count"
                      class="absolute -top-2 -right-2 bg-[#4b3b31] text-white text-xs font-bold w-6 h-6 rounded-full flex items-center justify-center">
0
</span>

            </a>

        </div>

    </div>

</header>

<section class="relative z-10 overflow-hidden">

    <div class="max-w-7xl mx-auto px-4 md:px-6 py-24 grid lg:grid-cols-2 gap-16 items-center">

        <div>

<span class="inline-flex items-center gap-2 bg-[#efe4d8] border border-[#e0d2c4] text-[#8a6b55] px-5 py-2 rounded-full text-sm mb-8">
✨ Tecnologia avançada em estética
</span>

            <h1 class="text-3xl md:text-5xl lg:text-7xl font-black leading-tight mb-6 md:mb-8 text-[#4b3b31]">

                Sua pele
                <span class="text-[#b08968]">
perfeita
</span>
                começa aqui.

            </h1>

            <p class="text-[#7f7065] text-lg leading-relaxed mb-10 max-w-xl">

                Tratamentos modernos, resultados incríveis e uma experiência premium em depilação a laser e estética avançada.

            </p>

            <div class="flex flex-col sm:flex-row gap-3">

                <a href="#feminino"
                   class="px-8 py-4 rounded-2xl bg-[#c8a98d] text-white font-semibold hover:scale-105 transition shadow-lg">

                    Agendar agora

                </a>

                <a href="#feminino"
                   class="px-8 py-4 rounded-2xl border border-[#ddd1c5] bg-white hover:bg-[#f3ece5] transition text-[#5e4d42]">

                    Ver serviços

                </a>

            </div>

            <div class="grid grid-cols-3 gap-3 md:flex md:gap-10 mt-10 md:mt-14 text-center">

                <div>
                    <h2 class="text-3xl font-black text-[#4b3b31]">+500</h2>
                    <p class="text-[#8b7767] text-sm">Clientes atendidos</p>
                </div>

                <div>
                    <h2 class="text-3xl font-black text-[#4b3b31]">98%</h2>
                    <p class="text-[#8b7767] text-sm">Satisfação</p>
                </div>

                <div>
                    <h2 class="text-3xl font-black text-[#4b3b31]">5★</h2>
                    <p class="text-[#8b7767] text-sm">Avaliações</p>
                </div>

            </div>

        </div>

        <div class="relative">

            <div class="absolute inset-0 bg-[#e7d7c9]/50 blur-[120px] rounded-full"></div>

        </div>

    </div>

</section>

<section id="feminino" class="relative z-10 px-4 md:px-6 py-20">

    <div class="max-w-7xl mx-auto">

        <div class="flex items-center justify-between mb-12">

            <div>

                <h2 class="text-4xl font-black mb-3 text-[#4b3b31]">
                    Depilação Feminina
                </h2>

                <p class="text-[#8b7767]">
                    Conheça nossos tratamentos
                </p>

            </div>

            <span class="bg-[#efe4d8] text-[#8a6b55] px-5 py-2 rounded-full text-sm border border-[#e0d2c4]">
Mais procurados
</span>

        </div>

        <div class="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 md:gap-8">

            <?php foreach ($servicos as $servico): ?>
                <?php if ($servico['categoria'] === 'feminino' && ($servico['ativo'] ?? true)): ?>

                    <?php
                    $imagens = is_array($servico['imagens']) ? $servico['imagens'] : [$servico['imagens']];
                    ?>

                    <div class="card-hover group relative rounded-[34px] p-[1px] bg-[#eadfd4]">

                        <div class="relative overflow-hidden bg-[#fffdfa] border border-[#e7ddd2]
            rounded-3xl md:rounded-[32px]
            p-3 md:p-5
            h-full shadow-sm">

                            <div class="absolute top-4 right-4 z-20">

<span class="bg-[#c8a98d] text-white text-xs px-3 py-1 rounded-full shadow-lg">
Popular
</span>

                            </div>

                            <div class="overflow-hidden rounded-3xl mb-5">

                                <?php foreach ($imagens as $img): ?>

                                    <img src="<?= $img ?>"
                                         class="w-full h-36 md:h-60 object-cover group-hover:scale-110 transition duration-700">

                                <?php endforeach; ?>

                            </div>

                            <h3 class="text-sm md:text-xl font-bold mb-2 text-[#4b3b31] leading-tight">
                                <?= $servico['nome']; ?>
                            </h3>

                            <p class="hidden md:block text-[#8b7767] text-sm leading-relaxed mb-6">
                                <?= $servico['descricao']; ?>
                            </p>

                            <div class="flex justify-between items-end mt-auto">

                                <div>

                                    <p class="text-xs text-[#b9a89b] line-through">
                                        R$<?= number_format($servico['preco'] * 1.25, 2, ',', '.'); ?>
                                    </p>

                                    <h2 class="text-xl md:text-3xl font-black text-[#b08968]">
                                        R$<?= number_format((float)$servico['preco'], 2, ',', '.'); ?>
                                    </h2>

                                </div>

                                <button
                                        class="add-to-cart relative overflow-hidden px-5 py-3 rounded-2xl bg-[#c8a98d] text-white font-semibold shadow-lg hover:scale-105 transition duration-300"
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

<section id="masculino" class="relative z-10 px-4 md:px-6 py-20">

    <div class="max-w-7xl mx-auto">

        <div class="flex items-center justify-between mb-12">

            <div>

                <h2 class="text-4xl font-black mb-3 text-[#4b3b31]">
                    Depilação Masculina
                </h2>

                <p class="text-[#8b7767]">
                    Tecnologia e conforto para você
                </p>

            </div>

            <span class="bg-[#efe4d8] text-[#8a6b55] px-5 py-2 rounded-full text-sm border border-[#e0d2c4]">
Alta performance
</span>

        </div>

        <div class="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 md:gap-8">

            <?php foreach ($servicos as $servico): ?>
                <?php if ($servico['categoria'] === 'masculino' && ($servico['ativo'] ?? true)): ?>

                    <?php
                    $imagens = is_array($servico['imagens']) ? $servico['imagens'] : [$servico['imagens']];
                    ?>

                    <div class="card-hover group relative rounded-[34px] p-[1px] bg-[#eadfd4]">

                        <div class="relative overflow-hidden bg-[#fffdfa] border border-[#e7ddd2]
            rounded-3xl md:rounded-[32px]
            p-3 md:p-5
            h-full shadow-sm">

                            <div class="absolute top-4 right-4 z-20">

<span class="bg-[#c8a98d] text-white text-xs px-3 py-1 rounded-full shadow-lg">
Premium
</span>

                            </div>

                            <div class="overflow-hidden rounded-3xl mb-5">

                                <?php foreach ($imagens as $img): ?>

                                    <img src="<?= $img ?>"
                                         class="w-full h-36 md:h-60 object-cover group-hover:scale-110 transition duration-700">

                                <?php endforeach; ?>

                            </div>

                            <h3 class="text-sm md:text-xl font-bold mb-2 text-[#4b3b31] leading-tight">
                                <?= $servico['nome']; ?>
                            </h3>

                            <p class="hidden md:block text-[#8b7767] text-sm leading-relaxed mb-6">
                                <?= $servico['descricao']; ?>
                            </p>

                            <div class="flex justify-between items-end mt-auto">

                                <div>

                                    <p class="text-xs text-[#b9a89b] line-through">
                                        R$<?= number_format($servico['preco'] * 1.25, 2, ',', '.'); ?>
                                    </p>

                                    <h2 class="text-xl md:text-3xl font-black text-[#b08968]">
                                        R$<?= number_format((float)$servico['preco'], 2, ',', '.'); ?>
                                    </h2>

                                </div>

                                <button
                                        class="add-to-cart flex items-center justify-center
           w-10 h-10 md:w-auto md:h-auto
           md:px-5 md:py-3
           rounded-xl md:rounded-2xl
           bg-[#c8a98d]
           text-white
           font-semibold
           shadow-lg
           hover:scale-105
           transition duration-300"
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

<section id="combos" class="relative z-10 px-4 md:px-6 py-20">

    <div class="max-w-7xl mx-auto">

        <div class="flex items-center justify-between mb-12">

            <div>

                <h2 class="text-4xl font-black mb-3 text-[#4b3b31]">
                    Combos Exclusivos
                </h2>

                <p class="text-[#8b7767]">
                    Economize nos tratamentos completos
                </p>

            </div>

            <span class="bg-[#efe4d8] text-[#8a6b55] px-5 py-2 rounded-full text-sm border border-[#e0d2c4]">
Melhor custo benefício
</span>

        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4 md:gap-8">

            <?php foreach ($servicos as $servico): ?>
                <?php if ($servico['categoria'] === 'combos' && ($servico['ativo'] ?? true)): ?>

                    <?php $publico = $servico['publico'] ?? null; ?>

                    <div class="card-hover group relative rounded-[34px] p-[1px] bg-[#eadfd4]">

                        <div class="relative overflow-hidden bg-[#fffdfa] border border-[#e7ddd2]
            rounded-3xl md:rounded-[32px]
            p-3 md:p-5
            h-full shadow-sm">

                            <?php if ($publico): ?>

                                <span class="absolute top-4 left-4 bg-[#c8a98d] text-white px-4 py-1 rounded-full text-xs z-20">
<?= ucfirst($publico) ?>
</span>

                            <?php endif; ?>

                            <div class="overflow-hidden rounded-3xl mb-5">

                                <?php foreach ($servico['imagens'] as $img): ?>

                                    <img src="<?= $img ?>"
                                         class="w-full h-36 md:h-60 object-cover group-hover:scale-110 transition duration-700">

                                <?php endforeach; ?>

                            </div>

                            <h3 class="text-sm md:text-xl font-bold mb-2 text-[#4b3b31] leading-tight">
                                <?= $servico['nome'] ?>
                            </h3>

                            <p class="hidden md:block text-[#8b7767] text-sm leading-relaxed mb-6">
                                <?= $servico['descricao'] ?>
                            </p>

                            <div class="flex justify-between items-end mt-auto">

                                <div>

                                    <p class="text-xs text-[#b9a89b] line-through">
                                        R$<?= number_format($servico['preco'] * 1.30, 2, ',', '.'); ?>
                                    </p>

                                    <h2 class="text-xl md:text-3xl font-black text-[#b08968]">
                                        R$<?= number_format((float)$servico['preco'], 2, ',', '.') ?>
                                    </h2>

                                </div>

                                <button
                                        class="add-to-cart relative overflow-hidden px-5 py-3 rounded-2xl bg-[#c8a98d] text-white font-semibold shadow-lg hover:scale-105 transition duration-300"
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

<section class="relative z-10 px-4 md:px-6 py-20">

    <div class="max-w-7xl mx-auto">

        <div class="text-center mb-16">

            <h2 class="text-5xl font-black mb-5 text-[#4b3b31]">
                O que nossas clientes dizem
            </h2>

            <p class="text-[#8b7767]">
                Experiências reais de quem já passou pela LISSE
            </p>

        </div>

        <div class="grid md:grid-cols-3 gap-8">

            <div class="bg-[#fffdfa] border border-[#e7ddd2] rounded-[32px] p-8 shadow-sm">

                <div class="text-[#d1a954] text-2xl mb-5">
                    ★★★★★
                </div>

                <p class="text-[#7f7065] leading-relaxed mb-6">
                    “Melhor atendimento que já recebi. Ambiente incrível e resultado perfeito.”
                </p>

                <h3 class="font-bold text-[#4b3b31]">
                    Mariana Souza
                </h3>

            </div>

            <div class="bg-[#fffdfa] border border-[#e7ddd2] rounded-[32px] p-8 shadow-sm">

                <div class="text-[#d1a954] text-2xl mb-5">
                    ★★★★★
                </div>

                <p class="text-[#7f7065] leading-relaxed mb-6">
                    “Tecnologia absurda, quase não senti dor e o resultado apareceu muito rápido.”
                </p>

                <h3 class="font-bold text-[#4b3b31]">
                    Camila Rocha
                </h3>

            </div>

            <div class="bg-[#fffdfa] border border-[#e7ddd2] rounded-[32px] p-8 shadow-sm">

                <div class="text-[#d1a954] text-2xl mb-5">
                    ★★★★★
                </div>

                <p class="text-[#7f7065] leading-relaxed mb-6">
                    “Parece clínica de cidade grande. Atendimento premium de verdade.”
                </p>

                <h3 class="font-bold text-[#4b3b31]">
                    Fernanda Lima
                </h3>

            </div>

        </div>

    </div>

</section>

<footer class="relative z-10 border-t border-[#e6ddd3] mt-20 bg-[#f5efe9]">

    <div class="max-w-7xl mx-auto px-6 py-14">

        <div class="grid md:grid-cols-3 gap-10">

            <div>

                <h2 class="text-3xl font-black mb-4 text-[#4b3b31]">
                    LISSE
                </h2>

                <p class="text-[#7f7065] leading-relaxed">
                    Estética atual, tecnologia avançada e resultados incríveis.
                </p>

            </div>

            <div>

                <h3 class="font-bold mb-5 text-[#4b3b31]">
                    Links rápidos
                </h3>

                <div class="flex flex-col gap-3 text-[#7f7065]">

                    <a href="#feminino" class="hover:text-[#b08968] transition">
                        Feminino
                    </a>

                    <a href="#masculino" class="hover:text-[#b08968] transition">
                        Masculino
                    </a>

                    <a href="#combos" class="hover:text-[#b08968] transition">
                        Combos
                    </a>

                </div>

            </div>

            <div>

                <h3 class="font-bold mb-5 text-[#4b3b31]">
                    Contato
                </h3>

                <div class="flex flex-col gap-3 text-[#7f7065]">

                    <p>📍 Xanxerê - SC</p>
                    <p>📞 (49) 99999-9999</p>
                    <p>✉ contato@lisse.com</p>

                </div>

            </div>

        </div>

        <div class="border-t border-[#e6ddd3] mt-10 pt-8 text-center text-[#8b7767] text-sm">
            © <?= date('Y') ?> LISSE • Todos os direitos reservados
        </div>

    </div>

</footer>

<div class="fixed bottom-0 left-0 w-full md:hidden bg-[#f7f3ee]/95 backdrop-blur-xl border-t border-[#e6ddd3] px-2 py-3 flex items-center justify-between z-50 overflow-hidden">

    <a href="#feminino" class="w-1/3 flex flex-col items-center justify-center text-xs text-[#b08968]">
        💖
        <span>Feminino</span>
    </a>

    <a href="#masculino" class="w-1/3 flex flex-col items-center justify-center text-xs text-[#b08968]">
        🔥
        <span>Masculino</span>
    </a>

    <a href="carrinho.php" class="w-1/3 flex flex-col items-center justify-center text-xs text-[#4b3b31]">
        🛒
        <span>Carrinho</span>
    </a>

</div>

<div id="toast"
     class="fixed bottom-24 right-6 bg-[#c8a98d] text-white px-4 md:px-6 py-4 rounded-2xl shadow-2xl opacity-0 translate-y-10 transition-all duration-500 z-50 font-semibold">
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

