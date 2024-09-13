$(document).ready(function () {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    function updateCartCount() {
        $('#cart-count').text(cart.length);
    }

    function renderCart() {
        const cartItemsContainer = $('#cart-items');
        cartItemsContainer.empty();
        cart.forEach((item, index) => {
            const cartItem = `
                <div class="cart-item">
                    <img src="img/product${item.id}.jpg" alt="${item.name}">
                    <div class="cart-item-details">
                        <h5 class="cart-item-title">${item.name}</h5>
                        <p class="cart-item-price">$${item.price}</p>
                        <span class="cart-item-quantity">Cantidad: ${item.quantity}</span>
                    </div>
                    <button class="btn btn-danger btn-sm remove-from-cart" data-index="${index}">Eliminar</button>
                </div>
            `;
            cartItemsContainer.append(cartItem);
        });
    }

    $('.add-to-cart').click(function () {
        const id = $(this).data('id');
        const name = $(this).data('name');
        const price = $(this).data('price');
        const existingItem = cart.find(item => item.id === id);
        if (existingItem) {
            existingItem.quantity += 1;
        } else {
            cart.push({ id, name, price, quantity: 1 });
        }
        localStorage.setItem('cart', JSON.stringify(cart));
        updateCartCount();
    });

    $(document).on('click', '.remove-from-cart', function () {
        const index = $(this).data('index');
        cart.splice(index, 1);
        localStorage.setItem('cart', JSON.stringify(cart));
        renderCart();
        updateCartCount();
    });

    if ($('#cart-items').length) {
        renderCart();
    }

    updateCartCount();
});