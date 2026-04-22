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


<body class="bg-[#020617] text-white font-[Poppins] overflow-x-hidden">

<!-- BACKGROUND -->
<div class="fixed w-[600px] h-[600px] bg-pink-500/30 blur-[180px] top-[-150px] left-[-150px]"></div>
<div class="fixed w-[600px] h-[600px] bg-blue-500/30 blur-[180px] bottom-[-150px] right-[-150px]"></div>

<div class="max-w-5xl mx-auto px-6 py-16">

    <div class="flex justify-between items-center mb-10">
        <h1 class="text-5xl font-bold bg-gradient-to-r from-pink-400 to-blue-400 bg-clip-text text-transparent">
            Seu carrinho
        </h1>

        <button id="clearCartBtn"
        class="px-4 py-2 rounded-xl bg-red-500/20 hover:bg-red-500/30 transition">
            Limpar
        </button>
    </div>

    <div id="cart-items" class="space-y-6"></div>

    <div id="empty-cart" class="hidden text-center text-gray-400 mt-16 text-lg opacity-70">
        🛒 Seu carrinho está vazio
    </div>

    <div class="mt-14 flex flex-col sm:flex-row justify-between items-center gap-6">

        <div>
            <p class="text-gray-400 text-sm">Total</p>
            <strong id="cart-total" class="text-4xl font-bold text-green-400">R$ 0,00</strong>
        </div>

        <div class="flex gap-3">
            <button id="saveOrderBtn"
            class="px-6 py-3 rounded-xl bg-yellow-500/20 hover:bg-yellow-500/30 transition">
                Salvar pedido
            </button>

            <button id="checkoutBtn"
            class="px-8 py-3 rounded-xl bg-gradient-to-r from-green-500 to-emerald-400 hover:scale-105 transition shadow-xl">
                Finalizar no WhatsApp
            </button>
        </div>
    </div>

    <!-- HISTÓRICO -->
    <div class="mt-20">
        <h2 class="text-2xl font-bold mb-6">Histórico de pedidos</h2>
        <div id="order-history" class="space-y-4"></div>
    </div>

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
    return value.toFixed(2).replace('.', ',');
}

function renderCart() {
    cartItemsContainer.innerHTML = '';
    let total = 0;

    if (cartItems.length === 0) {
        emptyCart.classList.remove('hidden');
    } else {
        emptyCart.classList.add('hidden');
    }

    cartItems.forEach((item, index) => {
        total += item.price * item.quantity;

        const isFavorite = favorites.includes(item.name);

        const div = document.createElement('div');
        div.className = `
            flex justify-between items-center
            bg-white/5 backdrop-blur-xl border border-white/10
            p-5 rounded-2xl shadow-lg hover:scale-[1.02] transition
        `;

        div.innerHTML = `
            <div>
                <strong class="text-lg">${item.name}</strong>
                <p class="text-sm text-blue-400">R$ ${formatPrice(item.price)}</p>
            </div>

            <div class="flex items-center gap-3">

                <button class="fav-btn text-xl">${isFavorite ? '❤️' : '🤍'}</button>

                <button class="qty-btn bg-white/10 px-3 py-1 rounded-lg">−</button>

                <span class="text-lg font-semibold">${item.quantity}</span>

                <button class="qty-btn bg-white/10 px-3 py-1 rounded-lg">+</button>

                <button class="remove-btn text-red-400 text-xl">✕</button>
            </div>
        `;

        const qtyBtns = div.querySelectorAll('.qty-btn');
        const favBtn = div.querySelector('.fav-btn');
        const removeBtn = div.querySelector('.remove-btn');

        qtyBtns[1].onclick = () => {
            item.quantity++;
            saveCart();
            renderCart();
        };

        qtyBtns[0].onclick = () => {
            item.quantity--;
            if (item.quantity <= 0) {
                cartItems.splice(index, 1);
            }
            saveCart();
            renderCart();
        };

        removeBtn.onclick = () => {
            cartItems.splice(index, 1);
            saveCart();
            renderCart();
        };

        favBtn.onclick = () => {
            if (favorites.includes(item.name)) {
                favorites = favorites.filter(f => f !== item.name);
            } else {
                favorites.push(item.name);
            }

            localStorage.setItem('favorites', JSON.stringify(favorites));
            renderCart();
        };

        cartItemsContainer.appendChild(div);
    });

    cartTotal.innerText = `R$ ${formatPrice(total)}`;
}

function renderHistory() {
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

function gerarMensagemWhatsApp() {
    let mensagem = 'Olá! Gostaria de agendar:\\n\\n';

    cartItems.forEach(item => {
        mensagem += `• ${item.name} (x${item.quantity}) - R$ ${formatPrice(item.price)}\\n`;
    });

    const total = cartItems.reduce((acc, item) => acc + item.price * item.quantity, 0);

    mensagem += `\\nTotal: R$ ${formatPrice(total)}`;

    return encodeURIComponent(mensagem);
}

document.getElementById('checkoutBtn').onclick = () => {
    if (cartItems.length === 0) return alert('Carrinho vazio');

    const numero = '5549920014288';
    const mensagem = gerarMensagemWhatsApp();

    window.open(`https://wa.me/${numero}?text=${mensagem}`, '_blank');
};

document.getElementById('saveOrderBtn').onclick = () => {
    const total = cartItems.reduce((acc, item) => acc + item.price * item.quantity, 0);

    orderHistory.unshift({
        date: new Date().toLocaleString('pt-BR'),
        items: cartItems.map(i => `${i.name} x${i.quantity}`).join(', '),
        total
    });

    localStorage.setItem('orderHistory', JSON.stringify(orderHistory));
    renderHistory();
};

document.getElementById('clearCartBtn').onclick = () => {
    cartItems = [];
    saveCart();
    renderCart();
};

window.addEventListener('storage', () => {
    cartItems = JSON.parse(localStorage.getItem('cart')) || [];
    renderCart();
});

renderCart();
renderHistory();

if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('service-worker.js');
}

</script>
</body>
</html>