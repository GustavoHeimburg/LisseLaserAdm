<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Seu Carrinho - LISSE</title>

    <link rel="icon" type="image/png" href="src/images/carrinho.png">

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <link rel="manifest" href="manifest.json">
    <meta name="theme-color" content="#020617">

</head>


<body class="bg-[#050816] text-white font-[Poppins] overflow-x-hidden max-w-[100vw]">

<div class="fixed w-[280px] md:w-[500px] h-[280px] md:h-[500px] bg-pink-500/30 blur-[150px] rounded-full top-[-100px] left-[-100px] pointer-events-none"></div>

<div class="fixed w-[280px] md:w-[500px] h-[280px] md:h-[500px] bg-blue-500/30 blur-[150px] rounded-full bottom-[-100px] right-[-100px] pointer-events-none"></div>

<div class="fixed inset-0 opacity-[0.03] pointer-events-none"
     style="background-image:url('https://www.transparenttextures.com/patterns/asfalt-dark.png')">
</div>

<!-- HEADER -->

<header class="sticky top-0 z-50 border-b border-white/10 bg-[#070b14]/80 backdrop-blur-2xl">

    <div class="max-w-7xl mx-auto px-5 py-4 flex items-center justify-between">

        <a href="loja.php" class="flex items-center gap-3">

            <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-pink-500 to-blue-500 flex items-center justify-center shadow-2xl shadow-pink-500/30">
                🛒
            </div>

            <div>
                <h1 class="text-xl font-black tracking-wide">
                    LISSE
                </h1>

                <p class="text-xs text-gray-400">
                    Seu carrinho premium
                </p>
            </div>

        </a>

        <a href="loja.php"
           class="px-5 py-3 rounded-2xl bg-white/5 border border-white/10 hover:bg-white/10 transition">
            ← Voltar
        </a>

    </div>

</header>

<!-- MAIN -->

<div class="relative z-10 max-w-7xl mx-auto px-4 md:px-6 py-10 md:py-16">

    <!-- HERO -->

    <div class="mb-14">

        <div class="inline-flex items-center gap-2 bg-green-500/10 border border-green-500/20 text-green-300 px-5 py-2 rounded-full text-sm mb-6">
            ✨ Checkout inteligente
        </div>

        <h1 class="text-4xl md:text-6xl font-black leading-tight mb-5">

            Seu
            <span class="bg-gradient-to-r from-pink-400 to-blue-400 bg-clip-text text-transparent">
Carrinho
</span>

        </h1>

        <p class="text-gray-400 text-lg max-w-2xl leading-relaxed">
            Revise seus serviços, personalize seu pedido e finalize seu atendimento premium diretamente pelo WhatsApp.
        </p>

    </div>

    <!-- GRID -->

    <div class="grid lg:grid-cols-[1fr_380px] gap-10 items-start">

        <!-- CARRINHO -->

        <div>

            <div id="cart-items" class="space-y-6"></div>

            <div id="empty-cart"
                 class="hidden bg-white/[0.03] border border-white/10 rounded-[32px] p-14 text-center backdrop-blur-2xl">

                <div class="text-7xl mb-6">
                    🛒
                </div>

                <h2 class="text-3xl font-black mb-4">
                    Seu carrinho está vazio
                </h2>

                <p class="text-gray-400 mb-8">
                    Adicione serviços incríveis para começar sua experiência premium.
                </p>

                <a href="loja.php"
                   class="inline-flex px-7 py-4 rounded-2xl bg-gradient-to-r from-pink-500 to-blue-500 font-semibold hover:scale-105 transition shadow-2xl shadow-pink-500/20">

                    Explorar serviços

                </a>

            </div>

        </div>

        <!-- RESUMO -->

        <div class="lg:sticky lg:top-28">

            <div class="relative overflow-hidden bg-white/[0.03] border border-white/10 backdrop-blur-2xl rounded-[36px] p-7">

                <div class="absolute top-0 right-0 w-40 h-40 bg-pink-500/10 blur-[100px] rounded-full"></div>

                <div class="relative z-10">

                    <div class="flex items-center justify-between mb-8">

                        <div>

                            <p class="text-gray-400 text-sm">
                                Resumo
                            </p>

                            <h2 class="text-3xl font-black">
                                Pedido
                            </h2>

                        </div>

                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-pink-500 to-blue-500 flex items-center justify-center text-2xl shadow-2xl shadow-pink-500/20">
                            ✨
                        </div>

                    </div>

                    <div class="space-y-5 mb-8">

                        <div class="flex items-center justify-between text-gray-400">

                            <span>Subtotal</span>

                            <span id="subtotal-price">
R$ 0,00
</span>

                        </div>

                        <div class="flex items-center justify-between text-gray-400">

                            <span>Atendimento</span>

                            <span class="text-green-400">
Grátis
</span>

                        </div>

                        <div class="border-t border-white/10 pt-5 flex items-center justify-between">

                            <div>

                                <p class="text-sm text-gray-400">
                                    Total
                                </p>

                                <h2 id="cart-total"
                                    class="text-4xl font-black bg-gradient-to-r from-green-400 to-emerald-300 bg-clip-text text-transparent">

                                    R$ 0,00

                                </h2>

                            </div>

                            <div class="bg-green-500/10 text-green-400 px-4 py-2 rounded-full text-sm border border-green-500/20">
                                Premium
                            </div>

                        </div>

                    </div>

                    <div class="space-y-4">

                        <button id="checkoutBtn"
                                type="button"
                                class="w-full py-5 rounded-2xl bg-gradient-to-r from-green-500 to-emerald-400 font-bold text-lg hover:scale-[1.02] transition duration-300 shadow-2xl shadow-green-500/20 active:scale-[0.98]">

                            Finalizar no WhatsApp

                        </button>

                        <button id="saveOrderBtn"
                                type="button"
                                class="w-full py-4 rounded-2xl bg-white/5 border border-white/10 hover:bg-white/10 transition font-semibold active:scale-[0.98]">

                            Salvar pedido

                        </button>

                        <button id="clearCartBtn"
                                type="button"
                                class="w-full py-4 rounded-2xl bg-red-500/10 border border-red-500/20 text-red-400 hover:bg-red-500/20 transition font-semibold active:scale-[0.98]">

                            Limpar carrinho

                        </button>

                    </div>

                    <div class="mt-8 pt-8 border-t border-white/10">

                        <div class="flex items-center gap-4 mb-4">

                            <div class="w-12 h-12 rounded-2xl bg-blue-500/10 flex items-center justify-center">
                                🔒
                            </div>

                            <div>
                                <h3 class="font-bold">
                                    Atendimento seguro
                                </h3>

                                <p class="text-sm text-gray-400">
                                    Seu pedido será confirmado via WhatsApp
                                </p>
                            </div>

                        </div>

                        <div class="flex items-center gap-4">

                            <div class="w-12 h-12 rounded-2xl bg-pink-500/10 flex items-center justify-center">
                                ⚡
                            </div>

                            <div>
                                <h3 class="font-bold">
                                    Resposta rápida
                                </h3>

                                <p class="text-sm text-gray-400">
                                    Atendimento humanizado premium
                                </p>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- MOBILE BAR -->

<div class="fixed bottom-0 left-0 w-full md:hidden bg-[#070b14]/95 backdrop-blur-xl border-t border-white/10 px-4 py-4 flex items-center justify-between z-50">

    <div>

        <p class="text-xs text-gray-400">
            Total
        </p>

        <strong id="mobile-total"
                class="text-xl font-black text-green-400">
            R$ 0,00
        </strong>

    </div>

    <button id="mobileCheckout"
            class="px-6 py-3 rounded-2xl bg-gradient-to-r from-green-500 to-emerald-400 font-semibold shadow-xl shadow-green-500/20 active:scale-95">

        Finalizar

    </button>

</div>

<script>
    let cartItems = JSON.parse(localStorage.getItem('cart')) || [];
    let favorites = JSON.parse(localStorage.getItem('favorites')) || [];
    let orderHistory = JSON.parse(localStorage.getItem('orderHistory')) || [];

    const cartItemsContainer = document.getElementById('cart-items');
    const cartTotal = document.getElementById('cart-total');
    const emptyCart = document.getElementById('empty-cart');
    const historyContainer = document.getElementById('order-history');

    function saveCart() {
        localStorage.setItem('cart', JSON.stringify(cartItems));
    }

    function formatPrice(value) {
        return Number(value).toFixed(2).replace('.', ',');
    }

    function renderCart() {

        cartItemsContainer.innerHTML = '';

        let total = 0;

        if(cartItems.length === 0){

            emptyCart?.classList.remove('hidden');

        }else{

            emptyCart?.classList.add('hidden');

        }

        cartItems.forEach((item,index)=>{

            total += item.price * item.quantity;

            const isFavorite = favorites.includes(item.name);

            const div = document.createElement('div');

            div.className = `
group relative overflow-hidden
bg-white/[0.03]
border border-white/10
backdrop-blur-2xl
rounded-[32px]
p-6
hover:border-pink-500/30
transition duration-500
`;

            div.innerHTML = `

<div class="absolute top-0 right-0 w-32 h-32 bg-pink-500/10 blur-[80px] rounded-full"></div>

<div class="relative z-10 flex flex-col md:flex-row md:items-center justify-between gap-6">

<div class="flex items-center gap-5">

<div class="w-24 h-24 rounded-3xl bg-gradient-to-br from-pink-500/20 to-blue-500/20 flex items-center justify-center text-4xl shadow-inner border border-white/10">
✨
</div>

<div>

<h2 class="text-2xl font-black mb-2">
${item.name}
</h2>

<p class="text-gray-400 text-sm mb-3">
Tratamento premium LISSE
</p>

<div class="flex items-center gap-3">

<span class="text-gray-500 line-through text-sm">
R$ ${formatPrice(item.price * 1.25)}
</span>

<span class="text-2xl font-black bg-gradient-to-r from-pink-400 to-blue-400 bg-clip-text text-transparent">
R$ ${formatPrice(item.price)}
</span>

</div>

</div>

</div>

<div class="flex flex-wrap items-center gap-4">

<button class="fav-btn w-14 h-14 rounded-2xl bg-white/5 border border-white/10 hover:bg-white/10 transition text-2xl">
${isFavorite ? '❤️' : '🤍'}
</button>

<div class="flex items-center rounded-2xl bg-white/5 border border-white/10 overflow-hidden">

<button class="qty-minus px-5 py-4 text-xl hover:bg-white/10 transition">
−
</button>

<span class="px-5 text-lg font-bold">
${item.quantity}
</span>

<button class="qty-plus px-5 py-4 text-xl hover:bg-white/10 transition">
+
</button>

</div>

<button class="remove-btn px-5 py-4 rounded-2xl bg-red-500/10 border border-red-500/20 text-red-400 hover:bg-red-500/20 transition font-semibold">
Remover
</button>

</div>

</div>

`;

            const favBtn = div.querySelector('.fav-btn');
            const minusBtn = div.querySelector('.qty-minus');
            const plusBtn = div.querySelector('.qty-plus');
            const removeBtn = div.querySelector('.remove-btn');

            plusBtn.addEventListener('click',()=>{

                item.quantity++;

                saveCart();

                renderCart();

            });

            minusBtn.addEventListener('click',()=>{

                item.quantity--;

                if(item.quantity <= 0){

                    cartItems.splice(index,1);

                }

                saveCart();

                renderCart();

            });

            removeBtn.addEventListener('click',()=>{

                cartItems.splice(index,1);

                saveCart();

                renderCart();

            });

            favBtn.addEventListener('click',()=>{

                if(favorites.includes(item.name)){

                    favorites = favorites.filter(f=>f!==item.name);

                }else{

                    favorites.push(item.name);

                }

                localStorage.setItem('favorites', JSON.stringify(favorites));

                renderCart();

            });

            cartItemsContainer.appendChild(div);

        });

        cartTotal.innerText = `R$ ${formatPrice(total)}`;

        document.getElementById('subtotal-price').innerText = `R$ ${formatPrice(total)}`;

        document.getElementById('mobile-total').innerText = `R$ ${formatPrice(total)}`;

    }

    document.getElementById('mobileCheckout')?.addEventListener('click', () => {

        document.getElementById('checkoutBtn').click();

    });

    function renderHistory() {
        if (!historyContainer) return;

        historyContainer.innerHTML = '';

        orderHistory.forEach(order => {
            const div = document.createElement('div');
            div.className = 'bg-white/5 p-4 rounded-xl border border-white/10';

            div.innerHTML = `
            <p class="text-sm text-gray-400">${order.date}</p>
            <p>${order.items}</p>
            <strong class="text-green-400">R$ ${formatPrice(order.total)}</strong>
        `;

            historyContainer.appendChild(div);
        });
    }
    function gerarMensagemWhatsApp(nome) {
        let mensagem = `Olá ${nome}! \n\n`;
        mensagem += `Seja bem-vindo(a) à Lisse Laser \n`;
        mensagem += `Recebemos seu interesse nos seguintes serviços:\n\n`;

        cartItems.forEach(item => {
            mensagem += `• ${item.name} (x${item.quantity})\n`;
        });

        mensagem += `\nEm breve iremos te atender e finalizar seu agendamento`;

        return encodeURIComponent(mensagem);
    }

    function bindEvents() {
        const checkoutBtn = document.getElementById('checkoutBtn');
        const saveBtn = document.getElementById('saveOrderBtn');
        const clearBtn = document.getElementById('clearCartBtn');

        checkoutBtn?.addEventListener('click', () => {
            if (cartItems.length === 0) {
                alert('Carrinho vazio');
                return;
            }

            let nome = prompt('Digite seu nome para continuar:');

            if (!nome || nome.trim() === '') {
                alert('Por favor, informe seu nome 😊');
                return;
            }

            const numero = '5549920014288';
            const mensagem = gerarMensagemWhatsApp(nome.trim());

            window.location.href = `https://wa.me/${numero}?text=${mensagem}`;
        });

        saveBtn?.addEventListener('click', () => {
            const total = cartItems.reduce((acc, item) => acc + item.price * item.quantity, 0);

            orderHistory.unshift({
                date: new Date().toLocaleString('pt-BR'),
                items: cartItems.map(i => `${i.name} x${i.quantity}`).join(', '),
                total
            });

            localStorage.setItem('orderHistory', JSON.stringify(orderHistory));
            renderHistory();
        });

        clearBtn?.addEventListener('click', () => {
            cartItems = [];
            saveCart();
            renderCart();
        });
    }

    window.addEventListener('storage', () => {
        cartItems = JSON.parse(localStorage.getItem('cart')) || [];
        renderCart();
    });

    renderCart();
    renderHistory();
    bindEvents();

    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('service-worker.js');
    }

</script>
</body>
</html>