// Load cart from local storage
let cart = JSON.parse(localStorage.getItem('cart')) || [];

// Render cart on page load
function renderCart() {
    const cartItemsDiv = document.getElementById('cart-items');
    cartItemsDiv.innerHTML = '';
    let total = 0;

    if (cart.length === 0) {
        cartItemsDiv.innerHTML = '<p>Your cart is empty.</p>';
    } else {
        cart.forEach(item => {
            const itemDiv = document.createElement('div');
            itemDiv.innerHTML = `${item.name} - $${item.price.toFixed(2)} x ${item.quantity} = $${(item.price * item.quantity).toFixed(2)}`;
            cartItemsDiv.appendChild(itemDiv);
            total += item.price * item.quantity;
        });
    }
    document.getElementById('total').textContent = total.toFixed(2);
}

// Handle the payment button click
document.getElementById('pay-button').addEventListener('click', () => {
    const username = document.getElementById('username').value;
    const email = document.getElementById('email').value;
    const paymentMethod = document.querySelector('input[name="payment-method"]:checked').value;
    const total = document.getElementById('total').textContent;

    // Validate that all fields are filled
    if (!username || !email) {
        alert('Please enter both your username and email.');
        return;
    }

    // Send payment info to PHP
    fetch('payment.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: `username=${encodeURIComponent(username)}&email=${encodeURIComponent(email)}&total=${total}&paymentMethod=${paymentMethod}`
    })
    .then(response => response.text())
    .then(data => alert(data)) // Displays any alerts or messages from PHP
    .catch(error => console.error('Error:', error));
});

// Initial rendering
renderCart();
