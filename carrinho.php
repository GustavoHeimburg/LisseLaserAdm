<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Seu Carrinho • LISSE</title>

    <link rel="icon" type="image/png" href="src/images/carrinho.png">

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

        html{
            scroll-behavior:smooth;
        }

        body{
            font-family:'Inter',sans-serif;
            background:#f8f4ee;
            color:#3e342c;
            overflow-x:hidden;
        }

        .title-font{
            font-family:'Cormorant Garamond',serif;
        }

        .card-hover{
            transition:.35s;
        }

        .card-hover:hover{
            transform:translateY(-4px);
        }

        .texture{
            position:fixed;
            inset:0;
            opacity:.03;
            pointer-events:none;
            background-image:url('https://www.transparenttextures.com/patterns/diamond-upholstery.png');
            z-index:0;
        }

    </style>

</head>

<body class="overflow-x-hidden max-w-[100vw]">

<div class="texture"></div>

<div class="fixed top-[-120px] left-[-120px] w-[280px] h-[280px] bg-[#d8c3a5]/40 blur-[90px] rounded-full pointer-events-none"></div>

<div class="fixed bottom-[-120px] right-[-120px] w-[280px] h-[280px] bg-[#e9ddd0]/80 blur-[90px] rounded-full pointer-events-none"></div>

<!-- HEADER -->

<header class="sticky top-0 z-50 border-b border-[#e7ddd2] bg-[#f8f4ee]/90 backdrop-blur-xl">

    <div class="max-w-7xl mx-auto px-5 py-5 flex items-center justify-between">

        <a href="loja.php" class="flex items-center gap-4">

            <div class="w-12 h-12 rounded-full bg-[#efe5d9] border border-[#e0d2c3] flex items-center justify-center text-lg shadow-sm">
                ✨
            </div>

            <div>

                <h1 class="title-font text-3xl font-semibold tracking-wide leading-none">
                    LISSE
                </h1>

                <p class="text-sm text-[#8b7765]">
                    Carrinho premium
                </p>

            </div>

        </a>

        <a href="loja.php"
           class="px-5 py-3 rounded-full border border-[#dfd1c1] bg-white/70 hover:bg-[#f3ece4] transition text-sm font-medium">

            ← Voltar à loja

        </a>

    </div>

</header>


<section class="relative z-10 px-4 md:px-8 pt-8 md:pt-16 pb-8 md:pb-12">
    <div class="max-w-7xl mx-auto">

        <span class="inline-flex items-center gap-2 px-5 py-2 rounded-full bg-[#efe4d7] border border-[#e4d5c5] text-[#8a735f] text-sm mb-8">
            ✨ Atendimento elegante e personalizado
        </span>

        <h1 class="title-font text-2xl md:text-4xl md:text-7xl leading-none font-semibold mb-6 max-w-4xl">

            Seu carrinho
            <span class="italic text-[#b59678]">
                LISSE
            </span>

        </h1>

        <p class="hidden md:block text-[#7f6d5d] text-lg leading-relaxed max-w-2xl">

            Revise seus serviços favoritos e finalize seu atendimento premium diretamente pelo WhatsApp com toda praticidade.

        </p>

    </div>

</section>

<!-- MAIN -->

<section class="relative z-10 px-5 md:px-8 pb-32">

    <div class="max-w-7xl mx-auto grid lg:grid-cols-[1fr_400px] gap-10 items-start">

        <!-- CART ITEMS -->

        <div>

            <div id="cart-items" class="space-y-6"></div>

            <!-- EMPTY -->

            <div id="empty-cart"
                 class="hidden bg-white/70 border border-[#eadfce] rounded-[38px] p-14 text-center shadow-sm">

                <div class="text-7xl mb-6">
                    🛍️
                </div>

                <h2 class="title-font text-5xl font-semibold mb-5">
                    Seu carrinho está vazio
                </h2>

                <p class="text-[#8a7766] text-lg mb-10 max-w-xl mx-auto leading-relaxed">

                    Explore nossos tratamentos premium e monte sua experiência perfeita na LISSE.

                </p>

                <a href="loja.php"
                   class="inline-flex items-center justify-center px-8 py-4 rounded-full bg-[#b59678] hover:bg-[#a88767] text-white transition font-medium shadow-lg shadow-[#d8c4ae]">

                    Explorar serviços

                </a>

            </div>

        </div>

        <!-- SUMMARY -->

        <div class="lg:sticky lg:top-28">

            <div class="relative overflow-hidden rounded-[28px] md:rounded-[40px] bg-white/70 border border-[#eadfce] p-5 md:p-8 shadow-sm">

                <div class="absolute top-[-40px] right-[-40px] w-40 h-40 rounded-full bg-[#efe1d2] blur-[70px]"></div>

                <div class="relative z-10">

                    <div class="flex items-center justify-between mb-10">

                        <div>

                            <p class="text-sm text-[#9b8878] mb-1">
                                Resumo do pedido
                            </p>

                            <h2 class="title-font text-5xl font-semibold leading-none">
                                Checkout
                            </h2>

                        </div>

                        <div class="w-14 h-14 rounded-full bg-[#efe5d9] border border-[#e5d8c8] flex items-center justify-center text-xl">
                            🤍
                        </div>

                    </div>

                    <div class="space-y-5 mb-8">

                        <div class="flex items-center justify-between text-[#7f6d5d]">

                            <span>Subtotal</span>

                            <span id="subtotal-price">
                                R$ 0,00
                            </span>

                        </div>

                        <div class="flex items-center justify-between text-[#7f6d5d]">

                            <span>Atendimento</span>

                            <span class="text-[#b59678] font-medium">
                                Gratuito
                            </span>

                        </div>

                        <div class="pt-6 border-t border-[#eee2d4] flex items-center justify-between">

                            <div>

                                <p class="text-sm text-[#9b8878] mb-1">
                                    Total
                                </p>

                                <h2 id="cart-total"
                                    class="title-font text-3xl md:text-5xl font-semibold text-[#b59678]">

                                    R$ 0,00

                                </h2>

                            </div>

                            <div class="px-4 py-2 rounded-full bg-[#f1e7dc] border border-[#e7d7c7] text-[#8d745f] text-sm">
                                Premium
                            </div>

                        </div>

                    </div>

                    <div class="space-y-4">

                        <button id="checkoutBtn"
                                class="w-full py-5 rounded-full bg-[#b59678] hover:bg-[#a88767] transition text-white font-semibold shadow-lg shadow-[#dbc9b6]">

                            Finalizar no WhatsApp

                        </button>

                        <button id="saveOrderBtn"
                                class="w-full py-4 rounded-full border border-[#e4d6c6] bg-[#f7f1ea] hover:bg-[#efe7dd] transition font-medium">

                            Salvar pedido

                        </button>

                        <button id="clearCartBtn"
                                class="w-full py-4 rounded-full border border-[#ead2d2] bg-[#fff5f5] hover:bg-[#ffecec] transition text-[#c47a7a] font-medium">

                            Limpar carrinho

                        </button>

                    </div>

                    <div class="mt-10 pt-8 border-t border-[#eee2d4] space-y-5">

                        <div class="flex items-center gap-4">

                            <div class="w-12 h-12 rounded-full bg-[#f1e7dc] flex items-center justify-center">
                                🔒
                            </div>

                            <div>

                                <h3 class="font-semibold">
                                    Atendimento seguro
                                </h3>

                                <p class="text-sm text-[#8c7968]">
                                    Seu pedido será confirmado via WhatsApp
                                </p>

                            </div>

                        </div>

                        <div class="flex items-center gap-4">

                            <div class="w-12 h-12 rounded-full bg-[#f1e7dc] flex items-center justify-center">
                                ⚡
                            </div>

                            <div>

                                <h3 class="font-semibold">
                                    Resposta rápida
                                </h3>

                                <p class="text-sm text-[#8c7968]">
                                    Atendimento humanizado premium
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- MOBILE BAR -->

<div class="fixed bottom-0 left-0 w-full md:hidden bg-[#f8f4ee]/95 backdrop-blur-xl border-t border-[#eadfce] px-3 py-2 md:px-5 md:py-4 flex items-center justify-between z-50">

    <div>

        <p class="text-xs text-[#8d7968]">
            Total
        </p>

        <strong id="mobile-total"
                class="title-font text-3xl text-[#b59678] font-semibold">

            R$ 0,00

        </strong>

    </div>

    <button id="mobileCheckout"
            class="px-6 py-3 rounded-full bg-[#b59678] text-white font-semibold shadow-lg shadow-[#dbc9b6]">

        Finalizar

    </button>

</div>

<!-- TOAST -->

<div id="toast"
     class="fixed bottom-24 right-6 bg-[#b59678] text-white px-6 py-4 rounded-full shadow-2xl opacity-0 translate-y-10 transition-all duration-500 z-50 font-medium">
</div>

<script>

    let cartItems = JSON.parse(localStorage.getItem('cart')) || [];

    let favorites = JSON.parse(localStorage.getItem('favorites')) || [];

    let orderHistory = JSON.parse(localStorage.getItem('orderHistory')) || [];

    const cartItemsContainer = document.getElementById('cart-items');

    const cartTotal = document.getElementById('cart-total');

    const emptyCart = document.getElementById('empty-cart');

    function showToast(msg){

        const toast=document.getElementById('toast');

        toast.innerText=msg;

        toast.classList.remove('opacity-0','translate-y-10');

        toast.classList.add('opacity-100','translate-y-0');

        setTimeout(()=>{

            toast.classList.add('opacity-0','translate-y-10');

        },2000);

    }

    function saveCart(){

        localStorage.setItem('cart', JSON.stringify(cartItems));

    }

    function formatPrice(value){

        return Number(value).toFixed(2).replace('.', ',');

    }

    function renderCart(){

        cartItemsContainer.innerHTML='';

        let total=0;

        if(cartItems.length===0){

            emptyCart.classList.remove('hidden');

        }else{

            emptyCart.classList.add('hidden');

        }

        cartItems.forEach((item,index)=>{

            total += item.price * item.quantity;

            const isFavorite = favorites.includes(item.name);

            const div=document.createElement('div');

            div.className=`
                card-hover
                relative
                overflow-hidden
                rounded-[38px]
                bg-white/70
                border
                border-[#eadfce]
                p-4 md:p-7
                shadow-sm
            `;

            div.innerHTML=`

<div class="absolute top-[-30px] right-[-30px] w-32 h-32 rounded-full bg-[#f0e2d3] blur-[60px]"></div>

<div class="relative z-10 flex flex-col xl:flex-row xl:items-center justify-between p-5 md:p-8">

<div class="flex items-center gap-5">

<div class="w-16 h-16 md:w-24 md:h-24 rounded-[30px] bg-[#f4ece3] border border-[#eadfce] flex items-center justify-center text-2xl md:text-4xl">
✨
</div>

<div>

<h2 class="title-font text-2xl md:text-4xl font-semibold mb-2 leading-none">
${item.name}
</h2>

<p class="text-[#8b7765] mb-4">
Tratamento premium LISSE
</p>

<div class="flex items-center gap-3 flex-wrap">

<span class="text-[#b7a695] line-through text-sm">
R$ ${formatPrice(item.price * 1.25)}
</span>

<span class="title-font text-2xl md:text-4xl text-[#b59678] font-semibold">
R$ ${formatPrice(item.price)}
</span>

</div>

</div>

</div>

<div class="flex flex-wrap md:flex-nowrap items-center gap-2 md:gap-4">

<button class="fav-btn w-14 h-14 rounded-full border border-[#eadfce] bg-[#faf6f1] hover:bg-[#f3ece4] transition text-xl">
${isFavorite ? '🤎' : '🤍'}
</button>

<div class="flex items-center rounded-full overflow-hidden border border-[#eadfce] bg-[#faf7f3]">

<button class="qty-minus px-3 py-2 md:px-5 md:py-4 hover:bg-[#f1e7dc] transition text-lg">
−
</button>

<span class="px-3 md:px-5 font-semibold">
${item.quantity}
</span>

<button class="qty-plus px-3 py-2 md:px-5 md:py-4 hover:bg-[#f1e7dc] transition text-lg">
+
</button>

</div>

<button class="remove-btn px-3 py-2 md:px-5 md:py-4 rounded-full bg-[#fff3f3] border border-[#f1dada] text-[#bf7d7d] hover:bg-[#ffe9e9] transition font-medium">

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

                showToast('Serviço removido');

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

    document.getElementById('mobileCheckout')?.addEventListener('click',()=>{

        document.getElementById('checkoutBtn').click();

    });

    function gerarMensagemWhatsApp(nome){

        let mensagem = `Olá ${nome}!%0A%0A`;

        mensagem += `Tenho interesse nos seguintes serviços da LISSE:%0A%0A`;

        cartItems.forEach(item=>{

            mensagem += `• ${item.name} (x${item.quantity})%0A`;

        });

        mensagem += `%0AObrigada! 🤍`;

        return mensagem;

    }

    document.getElementById('checkoutBtn')?.addEventListener('click',()=>{

        if(cartItems.length===0){

            showToast('Seu carrinho está vazio');

            return;

        }

        let nome = prompt('Digite seu nome para continuar:');

        if(!nome || nome.trim()===''){

            showToast('Informe seu nome 😊');

            return;

        }

        const numero='5549920014288';

        const mensagem = gerarMensagemWhatsApp(nome.trim());

        window.location.href=`https://wa.me/${numero}?text=${mensagem}`;

    });

    document.getElementById('saveOrderBtn')?.addEventListener('click',()=>{

        const total = cartItems.reduce((acc,item)=>acc + item.price * item.quantity,0);

        orderHistory.unshift({

            date:new Date().toLocaleString('pt-BR'),

            items:cartItems.map(i=>`${i.name} x${i.quantity}`).join(', '),

            total

        });

        localStorage.setItem('orderHistory', JSON.stringify(orderHistory));

        showToast('Pedido salvo com sucesso 🤍');

    });

    document.getElementById('clearCartBtn')?.addEventListener('click',()=>{

        cartItems=[];

        saveCart();

        renderCart();

        showToast('Carrinho limpo');

    });

    window.addEventListener('storage',()=>{

        cartItems = JSON.parse(localStorage.getItem('cart')) || [];

        renderCart();

    });

    renderCart();

</script>

</body>
</html>

