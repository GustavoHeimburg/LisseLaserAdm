const cart = document.getElementById('cart');
const overlay = document.getElementById('cart-overlay');
const closeCartBtn = document.getElementById('close-cart');
const cartItemsContainer = document.getElementById('cart-items');
const cartTotal = document.getElementById('cart-total');

let cartItems = [];

function openCart() {
    cart.classList.add('active');
    overlay.classList.add('active');
}

function closeCart() {
    cart.classList.remove('active');
    overlay.classList.remove('active');
}

closeCartBtn.addEventListener('click', closeCart);
overlay.addEventListener('click', closeCart);

document.querySelectorAll('.add-to-cart').forEach(button => {
    button.addEventListener('click', () => {
        const dish = button.closest('.dish');

        if (!dish) return;

        const name = dish.querySelector('.dish-title')?.innerText;
        const priceText = dish.querySelector('.dish-price h4')?.innerText;

        if (!name || !priceText) return;

        const price = Number(
            priceText.replace('R$', '').replace('.', '').replace(',', '.')
        );

        const existingItem = cartItems.find(item => item.name === name);

        if (existingItem) {
            existingItem.quantity++;
        } else {
            cartItems.push({
                name,
                price,
                quantity: 1
            });
        }

        renderCart();
        openCart();
    });
});

function renderCart() {
    cartItemsContainer.innerHTML = '';
    let total = 0;

    cartItems.forEach((item, index) => {
        total += item.price * item.quantity;

        const div = document.createElement('div');
        div.classList.add('cart-item');

        div.innerHTML = `
            <div class="cart-item-info">
                <strong>${item.name}</strong>
                <span>R$ ${item.price.toFixed(2).replace('.', ',')}</span>
            </div>

            <div class="cart-item-actions">
                <button class="qty-btn" data-action="decrease">−</button>
                <span>${item.quantity}</span>
                <button class="qty-btn" data-action="increase">+</button>
            </div>

            <button class="remove-btn" data-remove="${index}">✕</button>
        `;

        div.querySelector('[data-action="increase"]').addEventListener('click', () => {
            item.quantity++;
            renderCart();
        });

        div.querySelector('[data-action="decrease"]').addEventListener('click', () => {
            item.quantity--;
            if (item.quantity <= 0) {
                cartItems.splice(index, 1);
            }
            renderCart();
        });

        div.querySelector('[data-remove]').addEventListener('click', () => {
            cartItems.splice(index, 1);
            renderCart();
        });

        cartItemsContainer.appendChild(div);
    });

    cartTotal.innerText = `R$ ${total.toFixed(2).replace('.', ',')}`;
}

function gerarMensagemWhatsApp() {
    let mensagem = 'Olá! Gostaria de agendar os seguintes serviços:\n\n';

    cartItems.forEach(item => {
        mensagem += `• ${item.name} - R$ ${item.price.toFixed(2).replace('.', ',')} (x${item.quantity})\n`;
    });

    mensagem += `\nTotal: R$ ${cartItems.reduce((acc, item) => acc + item.price * item.quantity, 0).toFixed(2).replace('.', ',')}`;
    return encodeURIComponent(mensagem);
}

document.querySelector('.cart-checkout').onclick = () => {
    const numero = '5549920014288';
    const mensagem = gerarMensagemWhatsApp();
    const url = `https://wa.me/${numero}?text=${mensagem}`;
    window.open(url, '_blank');
};

