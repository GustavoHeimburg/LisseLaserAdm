<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Seu Carrinho</title>

<script src="https://cdn.tailwindcss.com"></script>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

</head>

<body class="bg-[#020617] text-white font-[Poppins] overflow-x-hidden">

<div class="fixed w-[600px] h-[600px] bg-pink-500/30 blur-[180px] top-[-150px] left-[-150px]"></div>
<div class="fixed w-[600px] h-[600px] bg-blue-500/30 blur-[180px] bottom-[-150px] right-[-150px]"></div>

<div class="max-w-4xl mx-auto px-6 py-16">

<h1 class="text-5xl font-bold text-center mb-12 bg-gradient-to-r from-pink-400 to-blue-400 bg-clip-text text-transparent">
Seu carrinho
</h1>

<div id="cart-items" class="space-y-6"></div>

<div id="empty-cart" class="hidden text-center text-gray-400 mt-16 text-lg opacity-70">
🛒 Seu carrinho está vazio
</div>

<div class="mt-14 flex flex-col sm:flex-row justify-between items-center gap-6">

<div>
<p class="text-gray-400 text-sm">Total</p>
<strong id="cart-total" class="text-4xl font-bold text-green-400 transition-all duration-300">R$ 0,00</strong>
</div>

<button id="checkoutBtn"
class="relative px-8 py-3 rounded-xl bg-gradient-to-r from-green-500 to-emerald-400 text-white font-medium overflow-hidden hover:scale-105 transition shadow-xl">

<span id="checkoutText" class="relative z-10">Finalizar no WhatsApp</span>

<span class="absolute inset-0 opacity-0 hover:opacity-100 transition bg-white/20 blur-md"></span>

</button>

</div>

</div>

<script>

const cartItemsContainer = document.getElementById('cart-items');
const cartTotal = document.getElementById('cart-total');
const emptyCart = document.getElementById('empty-cart');
const checkoutBtn = document.getElementById('checkoutBtn');
const checkoutText = document.getElementById('checkoutText');

let cartItems = JSON.parse(localStorage.getItem('cart')) || [];

function saveCart() {
    localStorage.setItem('cart', JSON.stringify(cartItems));
}

function formatPrice(value) {
    return value.toFixed(2).replace('.', ',');
}

function animateTotal(newValue) {
    cartTotal.classList.add('scale-110');
    cartTotal.innerText = `R$ ${formatPrice(newValue)}`;

    setTimeout(() => {
        cartTotal.classList.remove('scale-110');
    }, 200);
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

        const div = document.createElement('div');

        div.className = `
        flex justify-between items-center
        bg-white/5 backdrop-blur-xl border border-white/10
        p-5 rounded-2xl shadow-lg
        transition duration-300
        hover:scale-[1.02]
        `;

        div.innerHTML = `
            <div>
                <strong class="text-lg">${item.name}</strong>
                <p class="text-sm text-blue-400">R$ ${formatPrice(item.price)}</p>
            </div>

            <div class="flex items-center gap-3">

                <button class="qty-btn bg-white/10 px-3 py-1 rounded-lg hover:bg-blue-500 transition active:scale-90">−</button>

                <span class="text-lg font-semibold">${item.quantity}</span>

                <button class="qty-btn bg-white/10 px-3 py-1 rounded-lg hover:bg-blue-500 transition active:scale-90">+</button>

                <button class="remove-btn ml-3 text-red-400 hover:text-red-500 text-xl transition active:scale-75">✕</button>

            </div>
        `;

        const buttons = div.querySelectorAll('.qty-btn');

        buttons[1].onclick = () => {
            item.quantity++;
            saveCart();
            renderCart();
        };

        buttons[0].onclick = () => {
            item.quantity--;

            if (item.quantity <= 0) {
                div.classList.add('opacity-0','scale-95');
                setTimeout(() => {
                    cartItems.splice(index, 1);
                    saveCart();
                    renderCart();
                }, 200);
            } else {
                saveCart();
                renderCart();
            }
        };

        div.querySelector('.remove-btn').onclick = () => {
            div.classList.add('opacity-0','scale-95');
            setTimeout(() => {
                cartItems.splice(index, 1);
                saveCart();
                renderCart();
            }, 200);
        };

        cartItemsContainer.appendChild(div);
    });

    animateTotal(total);
}

renderCart();

function gerarMensagemWhatsApp() {
    let mensagem = 'Olá! Gostaria de agendar:\n\n';

    cartItems.forEach(item => {
        mensagem += `• ${item.name} (x${item.quantity}) - R$ ${formatPrice(item.price)}\n`;
    });

    const total = cartItems.reduce((acc, item) => acc + item.price * item.quantity, 0);

    mensagem += `\nTotal: R$ ${formatPrice(total)}`;

    return encodeURIComponent(mensagem);
}

checkoutBtn.onclick = () => {

    if (cartItems.length === 0) {
        alert("Seu carrinho está vazio!");
        return;
    }

    checkoutText.innerText = "Redirecionando...";
    checkoutBtn.classList.add('opacity-70','cursor-not-allowed');

    setTimeout(() => {
        const numero = '5549920014288';
        const mensagem = gerarMensagemWhatsApp();

        window.open(`https://wa.me/${numero}?text=${mensagem}`, '_blank');

        checkoutText.innerText = "Finalizar no WhatsApp";
        checkoutBtn.classList.remove('opacity-70','cursor-not-allowed');
    }, 800);
};

</script>

</body>
</html>