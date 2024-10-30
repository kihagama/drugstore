const products = [
    { id: 1, name: "Bioderma", price: 10.00, img: "images/product_01.png" },
    { id: 2, name: "Piedra", price: 12.00, img: "images/product_02.png" },
    { id: 3, name: "Cetylpure", price: 15.00, img: "images/product_04.png" },
    { id: 4, name: "Ibuprofen", price: 20.00, img: "images/product_07_large.png" },
];

let cart = JSON.parse(localStorage.getItem('cart')) || [];

function renderProducts() {
    const productGrid = document.getElementById('product-grid');
    productGrid.innerHTML = '';
    products.forEach(product => {
        const card = document.createElement('div');
        card.classList.add('product-card');
        card.innerHTML = `
            <img src="${product.img}" alt="${product.name}">
            <h3>${product.name}</h3>
            <p>Price: $${product.price.toFixed(2)}</p>
            <button onclick="addToCart(${product.id})">Add to Cart</button>
        `;
        productGrid.appendChild(card);
    });
}

function addToCart(productId) {
    const product = products.find(p => p.id === productId);
    const cartItem = cart.find(item => item.id === productId);
    
    if (cartItem) {
        cartItem.quantity += 1;
    } else {
        cart.push({ ...product, quantity: 1 });
    }

    localStorage.setItem('cart', JSON.stringify(cart));
    renderCart();
}

function renderCart() {
    const cartItemsDiv = document.getElementById('cart-contents');
    cartItemsDiv.innerHTML = ''; // Clear previous content
    let total = 0;

    // Render each cart item
    cart.forEach(item => {
        const itemDiv = document.createElement('div');
        itemDiv.innerHTML = `
            ${item.name} - $${item.price.toFixed(2)} x ${item.quantity}
            <button onclick="removeFromCart(${item.id})">Remove</button>
        `;
        cartItemsDiv.appendChild(itemDiv);
        total += item.price * item.quantity; // Calculate total
    });

    // Update total display
    document.getElementById('total').textContent = total.toFixed(2); 

    // Clear previous checkout button
    const checkoutButtonDiv = document.getElementById('checkout-button');
    if (!checkoutButtonDiv) {
        // Create and append the checkout button if it doesn't exist
        const buttonDiv = document.createElement('div');
        buttonDiv.id = 'checkout-button'; // Give it an ID for future reference
        const checkoutButton = document.createElement('button');
        checkoutButton.innerText = 'Checkout';
        checkoutButton.onclick = () => { location.href = 'payment.php'; }; // Set onclick event
        buttonDiv.appendChild(checkoutButton);
        cartItemsDiv.appendChild(buttonDiv);
    }

    // Show/hide the checkout button based on cart contents
    if (cart.length > 0) {
        checkoutButtonDiv.style.display = 'block'; // Show button
    } else {
        checkoutButtonDiv.style.display = 'none'; // Hide button
    }
}

function removeFromCart(productId) {
    cart = cart.filter(item => item.id !== productId);
    localStorage.setItem('cart', JSON.stringify(cart));
    renderCart();
}

function searchProducts() {
    const searchTerm = document.getElementById('search').value.toLowerCase();
    const filteredProducts = products.filter(product => 
        product.name.toLowerCase().includes(searchTerm)
    );

    const productGrid = document.getElementById('product-grid');
    productGrid.innerHTML = '';
    filteredProducts.forEach(product => {
        const card = document.createElement('div');
        card.classList.add('product-card');
        card.innerHTML = `
            <img src="${product.img}" alt="${product.name}">
            <h3>${product.name}</h3>
            <p>Price: $${product.price.toFixed(2)}</p>
            <button onclick="addToCart(${product.id})">Add to Cart</button>
        `;
        productGrid.appendChild(card);
    });
}

// Initial rendering of products and cart
renderProducts();
renderCart();
const mobileMenu = document.getElementById('mobile-menu');
const navLinks = document.querySelector('nav ul');

mobileMenu.addEventListener('click', () => {
    
    navLinks.classList.toggle('active');
    
});